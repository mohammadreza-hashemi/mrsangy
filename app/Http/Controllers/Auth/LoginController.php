<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Events\ActivationCode;
use App\Events\MyEvent;
use Socialite;
use Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        
    }
    public function redirectToProviderGithub(){
        return Socialite::driver('github')->redirect();
    }
    public function redirectToProviderGoogle(){
        return Socialite::driver('google')->redirect();
    }
    
    public function handeleProviderCallbackGithub(){
        $usersocial = Socialite::driver('github')->user();
        $avatar=$usersocial->getAvatar();
        $name=strtoupper($usersocial->getName());
      $userInDatabase=\App\User::whereEmail($usersocial->getEmail())->first();
      if( ! $userInDatabase){
        $newuser=\App\User::create([
        'name'=>$usersocial->getName(),
        'email'=>$usersocial->getEmail(),   
        'password'=>bcrypt($usersocial->getId()),
        ]);

        auth()->loginUsingId($newuser->id);
        alert("<img src=$avatar style=height:100px;width:100px;border-radius:10px;/>")->html()->persistent("ok, thanks")->success(" شما با گیت هاب خود در سایت ما لاگین کردید","hello $name");
            return redirect ('/');
      }else{
        auth()->loginUsingId($userInDatabase->id);
        alert("<img src=$avatar style=height:100px;width:100px;border-radius:10px;/>")->html()->persistent("ok, thanks")->success(" شما با گیت هاب خود در سایت ما لاگین کردید","hello $name");
        
        return redirect('/');
      }
    }
    public function handleProviderCallbackGoogle(){
        $usersocial = Socialite::driver('google')->user();
        $avatar=$usersocial->getAvatar();
        $name=strtoupper($usersocial->getName());
      $userInDatabase=\App\User::whereEmail($usersocial->getEmail())->first();
      if( ! $userInDatabase){
        $newuser=\App\User::create([
        'name'=>$usersocial->getName(),
        'email'=>$usersocial->getEmail(),   
        'password'=>bcrypt($usersocial->getId()),
        ]);

        auth()->loginUsingId($newuser->id);
        alert("<img src=$avatar style=height:100px;width:100px;border-radius:10px;/>")->html()->persistent("ok")->success(" شما با  گوگل  خود در سایت ما لاگین کردید","hello $name");

            return redirect ('/');
      }else{
        auth()->loginUsingId($userInDatabase->id);
        alert("<img src=$avatar style=height:100px;width:100px;border-radius:10px;/>")->html()->persistent("ok")->success(" شما با  گوگل خود در سایت ما لاگین کردید","hello $name");

        return redirect('/');
      }
        
    }

    public function login(Request $request)
    {

        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }


        if(auth()->validate($request->only('email','password'))){
            $user=\App\User::whereEmail($request->input('email'))->first();
            if($user->active==0){
              $chechactivationcode=$user->activationcode()->where('expire','>=',\Carbon\Carbon::now())->latest()->first();  
                if(isset($chechactivationcode)==1){ 
                    if($chechactivationcode->expire  > \Carbon\Carbon::now()){
                        //5بار لاگین در دقیقه
                    $this->incrementLoginAttempts($request);

                    return back()->withErrors(['code'=>'ایمیل فعال سازی قبلا به ایمیل شما ارسال شده']);
                    }
                }else{
                    event(new ActivationCode($user));
                }

            }

        }




        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
            'g-recaptcha-response'=>'required',
        ]);
    }

}

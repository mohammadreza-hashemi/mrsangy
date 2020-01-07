<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MyEvent;
use App\User;
use App\Jobs\SendMail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['job','any']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=USer::find(26);
        // event(new MyEvent('heoow word'));

        return view('home');
    }
    public function user(){
        event(new MyEvent('heoow word'));

        // return auth()->user();

    }
    public function job(){

        $job=new SendMail(User::find(26),'codeeeeeeeee');
        $job->delay(Carbon\Carbon::now()->addSecond(20));
        // $job->onQueue('sendmail');//php artisan queue:work --queue=sendmail 
            
       dispatch($job);//or helper dispatch($job)

        return 'done job';
    }
    public function any(){
        return view('admin.rtl');
    }
}

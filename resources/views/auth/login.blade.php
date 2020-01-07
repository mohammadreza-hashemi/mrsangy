@extends('layouts.app')
 
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<script src="https://js.pusher.com/5.0/pusher.min.js?v=1255"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lc-AswUAAAAAJFg_y-GvmiyoH8eOgWOmtPMwXvX"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Lc-AswUAAAAAJFg_y-GvmiyoH8eOgWOmtPMwXvX', {action: 'homepage'}).then(function(token) {
       ...
    });
});
</script>

<script src="{{ asset('js/app.js?v=1255')}}"></script>



<div class="limiter" style="margin-top:-25px;margin-bottom:-25px;" >
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-49">
                    Login
                </span>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span class="label-input100">Username</span>
                    <input id="login100" class="input100 @error('email') is-invalid @enderror" type="text" placeholder="Type your username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus data-toggle="tooltip" data-placement="top" title="Enter UserName">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input id="login100" class="input100 @error('password') is-invalid @enderror" type="password" placeholder="Type your password" name="password" required autocomplete="current-password" data-toggle="tooltip" data-placement="top" title="Enter Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div><br>
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
               <div class="g-recaptcha" data-sitekey="6LdoBroUAAAAAMSmFI96DvqRy_6wVgSawFH_C-wX" style="margin-left:70px;"></div>
            
                <div class="text-right p-t-8 p-b-31">
                    @if (Route::has('password.request'))
                        <a id="login100a" class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
                
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button id="login100btn" class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </div>
                

                <div class="txt1 text-center p-t-54 p-b-20">
                    <span>
                        Or Sign Up Using
                    </span>
                </div>

                <div class="flex-c-m">
                    <a id="login100a" href="login/github" class="login100-social-item bg1">
                        <i class="fa fa-github"></i>
                    </a>

                    <a id="login100a" href="login/google" class="login100-social-item bg3">
                        <i class="fa fa-google"></i>
                    </a>
                </div>

                <div class="flex-col-c p-t-155">
                    <span class="txt1 p-b-17">
                        Or Sign Up Using
                    </span>

                <a id="login100a" href="{{route('register')}}" class="txt2">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<script src="{{ asset('js/main.js') }}"></script>



@endsection

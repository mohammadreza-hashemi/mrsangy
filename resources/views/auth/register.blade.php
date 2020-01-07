@extends('layouts.app')

@section('register')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}





<div class="container register" style="padding-bottom:-1000px;">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
        <input type="submit" name="" value="Login" onclick="window.location='{{ route('login')}}' "/><br/>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >
                    <h3 class="register-heading">Apply as a Employee</h3>

                    <form class="row register-form"  method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="col-md-6">
                            <div class="form-group">
                                <input placeholder="Enter Name *" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus data-toggle="tooltip" data-placement="left" title="Enter name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input placeholder="Entr Email *" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" data-toggle="tooltip" data-placement="left" title="Enter Your Email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input placeholder="Enter Password *" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" data-toggle="tooltip" data-placement="left" title="Enter your Password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <input placeholder="Enter Confirm Password *" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" data-toggle="tooltip" data-placement="left" title="Confirm Password"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" value="" data-toggle="tooltip" data-placement="right" title="Enter your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="09384629750 *"   max="11"data-toggle="tooltip" data-placement="right" title="For Example:09384629750"/>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="country">
                                    <option class="hidden"  selected disabled>Please SelectCountry</option>
                                    @inject('inject','App\Http\Utilities\country')
                                    @foreach($inject::all() as $country)
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" data-toggle="tooltip" data-placement="right" title="Enter your Password"/>
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>




@endsection

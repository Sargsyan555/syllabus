@extends('layouts.base')

@section('title', 'Login')


@section('content')

    <div class="login" id="sing-up">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                    <div class="section-title">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h6>Login</h6>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                    <img width="200" src="{{asset('assets/images/logo.png')}}" alt="">
                </div>
                <div class="col-lg-5 col-md-12 ml-auto mr-auto md-mt-5">
                    <div class="login-form text-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="col-12 form-group ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class=" col-12 form-group">
                                <input id="password form_password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required="required"  data-error="password is required." >

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class=" col-12 form-group remember-checkbox d-flex align-items-center justify-content-between">
                                <div class="checkbox ">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                            </div>

                            <button type="submit" class="btn border-0 btn-theme " data-text="Sign in"><span>S</span><span>i</span><span>g</span><span>n</span>
                                <span> </span><span>I</span><span>n</span>
                            </button>
                        </form>
                        <h5 class="mb-0 mt-4 text-capitalize">Don't Have An Account ? <a href="/register"><i>Sign Up!</i></a></h5>
                        <div class="social-icons fullwidth social-colored mt-4 text-center clearfix">
                            <ul class="list-inline">
                                <li class="social-facebook"><a href="#">Facebook</a>
                                </li>
                                <li class="social-twitter"><a href="#">Twitter</a>
                                </li>
                                <li class="social-gplus"><a href="#">Google Plus</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

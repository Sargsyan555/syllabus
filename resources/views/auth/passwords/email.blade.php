

@extends('layouts.base')

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
                        <h6>Reset Password</h6>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                    <img width="200" src="{{asset('assets/images/logo.png')}}" alt="">
                </div>
                <div class="col-lg-5 col-md-12 ml-auto mr-auto md-mt-5">
                    <div class="login-form text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <a type="submit" class="btn btn-theme border-0" data-text="Send Password Reset Link"><span>S</span><span>e</span><span>n</span><span>d</span>
                                <span> </span><span>P</span><span>a</span><span>s</span><span>s</span><span>w</span><span>o</span><span>r</span><span>d</span><span>&nbsp </span><span> R</span><span >e</span><span>s</span><span>s</span><span>e</span><span>t</span> <span>L</span><span>i</span><span>n</span><span>k</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

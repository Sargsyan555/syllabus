@extends('layouts.base')

@section('title', 'Forgot Password')

@section('content')

    <section class="login" id="sing-up">
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
                        <h6>Forgot Password</h6>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                    <img width="200" src="{{asset('assets/images/logo.png')}}" alt="">
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif

                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn border-0 btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

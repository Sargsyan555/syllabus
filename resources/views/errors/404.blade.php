@extends('layouts.base')

@section('title', 'error')

@section('content')


    <section class="page-title o-hidden pos-r md-text-center" data-bg-color="#fbf3ed">
        <canvas id="confetti"></canvas>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <h1 class="title"><span>4</span>04 Error</h1>
                    <p>We're Building Modern And High Software</p>
                </div>
                <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Pages</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Error 404</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-title-pattern"><img class="img-fluid" src="images/bg/11.png" alt=""></div>
    </section>

    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <!--contact start-->

        <section class="text-center o-hidden pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="error-page">
                            <span>4</span>
                            <span class="rotateme"><span class="screen-reader-text">0</span></span>
                            <span>4</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--contact end-->

    </div>

    <section id="service" class="pos-r o-hidden text-center">
        <div class="container">
            <div class="row subscribe-inner align-items-center">
                <div class="col-md-6 col-sm-12">
                    <h4>Subscribe Our Newsletter</h4>
                    <p class="lead mb-0">Get started for 1 Month free trial No Purchace required.</p>
                </div>
                <div class="col-md-6 col-sm-12 sm-mt-2">
                    <div class="subscribe-form">
                        <form id="mc-form" class="group">
                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                            <input class="btn btn-theme" type="submit" name="subscribe" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

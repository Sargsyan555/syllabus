@extends('layouts.base')

@section('title', 'Mobile App')

@section('content')
    <section class="pos-r">
        <div class="hexagon-bg style-2">
            <div class="hexagon"></div>
            <div class="hexagon"></div>
            <div class="hexagon"></div>
            <div class="hexagon"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12 md-mt-5">

                </div>
                <div class="col-lg-6 col-md-12 md-mt-5">
                    <div class="price-table active p-0">
                        <div class="col-12 p-0 mb-5">
                            <img class="img-fluid" src="{{asset('assets/images/mobile-app/mobile-app.jpg')}}" alt="">
                        </div>
                        <h3 class="price-title py-3 mt-5">Android App</h3>
                        <p class="py-1">Go with this link and istall Roulette Syllabus App</p>
                        <div class="col-12 pb-3">
                            <a  class="btn border-0 btn-theme  btn-circle " target="_blank"  href="https://play.google.com/store/apps/details?id=com.exampl.rs" data-text="Download"> <span>D</span><span>o</span><span>w</span><span>n</span><span>l</span><span>o</span><span>a</span><span>s</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 md-mt-5">

                </div>
            </div>
        </div>
    </section>
@endsection

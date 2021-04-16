<?php

namespace App\Http\Controllers;

use App\Models\Simple_videos;
use App\Models\TrainingVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        $training_videos = TrainingVideo::where('status',1)->get();
        $simple_videos = Simple_videos::where('status',1)->get();

        return view('front/home' ,compact('simple_videos','training_videos'));
    }
    public function casino_rng()
    {
        return view('front/casino-rng');
    }
    public function contact()
    {
        return view('front/contact');
    }
    public function faq()
    {
        return view('front/faq');
    }

    public function law_of_thrid()
    {
        return view('front/law-of-third');
    }
    public function login()
    {
        return view('front/login');
    }
    public function mobile_app()
    {
        return view('front/mobile-app');
    }
    public function sing_up()
    {
        return view('front/sing-up');
    }
    public function forgot_password()
    {
        return view('front/forgot-password');
    }
}

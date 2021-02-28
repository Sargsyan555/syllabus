<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        $simple_videos = DB::table('simple_videos')->where('status',1)->get()->toArray();

        return view('front/home' ,compact('simple_videos'));
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

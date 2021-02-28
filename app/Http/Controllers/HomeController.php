<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users= User::all();

        return view('home', compact('users'));
    }
    public function users()
    {
        $users= User::all();

        return view('users', compact('users'));
    }
    public function subscribers()
    {
        return view('subscribers', [
            'subscribers' => DB::table('subscribers')->paginate(5)
        ]);
    }
    public function simple_videos()
    {
        $simple_videos = DB::table('simple_videos')->get()->toArray();

        return view('simple_videos',compact('simple_videos'));
    }
    public function members_videos()
    {
        return view('members_videos');
    }
    /**/
}

<?php

namespace App\Http\Controllers;

use App\Models\Members_Video;
use App\Models\Simple_videos;
use App\Models\Subscribe;
use App\Models\TrainingVideo;
use App\Models\User;
use Dotenv\Validator;
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

        return view('admin/home', compact('users'));
    }
    public function users()
    {
        $users= User::all();

        return view('admin/users', compact('users'));
    }
    public function subscribers()
    {
        return view('admin/subscribers', [
            'subscribers' => Subscribe::paginate(5)
        ]);
    }
    public function simple_videos()
    {
        $simple_videos = Simple_videos::get();

        return view('admin/simple_videos',compact('simple_videos'));
    }
    public function training_videos()
    {
        $training_videos = TrainingVideo::get();

        return view('admin/training_videos',compact('training_videos'));
    }
    public function edit_members_videos()
    {
        $members_videos = Members_Video::get();
        return view('admin/edit_members_videos',compact('members_videos'));
    }
    public function changePassPage()
    {
        $users= User::all();
        return view('admin/change_pass',compact('users'));
    }
    public function change_user_status(Request $request){
        $users = User::where('id',$request->get('id'))->get();

        foreach ($users as $user){
            $status = $user->status;
        }

        if ($status == 1){
            $active = 0;
        }else{
            $active = 1;
        }
        User::where('id',$request->get('id'))
            ->update(['status' => $active]);
        return response()->json([
            'success' => $active
        ]);

    }
}

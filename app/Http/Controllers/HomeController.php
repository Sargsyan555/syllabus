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
            'subscribers' => DB::table('subscribers')->paginate(5)
        ]);
    }
    public function simple_videos()
    {
        $simple_videos = DB::table('simple_videos')->get()->toArray();

        return view('admin/simple_videos',compact('simple_videos'));
    }
    public function training_videos()
    {
        $training_videos = DB::table('training_videos')->get()->toArray();

        return view('admin/training_videos',compact('training_videos'));
    }
    public function edit_members_videos()
    {
        $members_videos = DB::table('members_videos')->get()->toArray();
        return view('admin/edit_members_videos',compact('members_videos'));
    }
    public function change_user_status(Request $request){
        $users = DB::table('users')->where('id',$request->post('id'))->get();

        foreach ($users as $user){
            $status = $user->status;
        }

        if ($status == 1){
            $active = 0;
        }else{
            $active = 1;
        }
        DB::table('users')
            ->where('id',$request->post('id'))
            ->update(['status' => $active]);
        return response()->json([
            'success' => $active
        ]);

    }
}

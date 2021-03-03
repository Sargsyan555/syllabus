<?php

namespace App\Http\Controllers;

use App\Models\Members_Video;
use App\Models\Simple_videos;
use App\Models\TrainingVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Illuminate\Auth\Events\Validated;
use phpDocumentor\Reflection\Types\Compound;

class VideoController extends Controller
{
    /*Start Controllers for members Video*/
    /*Insert*/

    public function add_members_videos(Request $request)
    {

        $members_video = new Members_Video($request->all());
        $members_video->save();
        $videos = view('admin/members_video_tr', compact('members_video'));
        return $videos;
    }
    /*Update*/
    public function update_members_video(Request $request){
        $member = DB::table('members_videos')
            ->where('id', $request->post('id'))
            ->update([
                'name' => $request->name,
                'link' => $request->link,
            ]);

        $members = DB::table('members_videos')
            ->where('id',$request->post('id'))
            ->get()
            ->toArray();
        foreach ($members as $members_video)
        $videos = view('admin/members_video_tr', compact('members_video'));
        return $videos;
    }
    /*Delete*/
    public function delete_members_video(Request $request){
        DB::table('members_videos')->where('id',$request->post('id'))->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);

    }

    /*Change  video status*/
    public function change_members_video_status(Request $request){
        $members_videos = DB::table('members_videos')->where('id',$request->post('id'))->get();

        foreach ($members_videos as $members_video){
            $status = $members_video->status;
        }

        if ($status == 1){
            $active = 0;
        }else{
            $active = 1;
        }
        $req = DB::table('members_videos')
            ->where('id',$request->post('id'))
            ->update(['status' => $active]);
        return response()->json([
            'success' => $active
        ]);

    }

    /*End Members Video*/

    /*Start Controllers for Simple Video*/
    /*Insert*/
    public function add_simple_video(Request $request)
    {

        $simple_video = new Simple_videos($request->all());
        $simple_video->save();
        $videos = view('admin/simple_videos_tr', compact('simple_video'));
        return $videos;


    }

    /*Update*/
    public function edit_simple_video(Request $request){
        DB::table('simple_videos')
            ->where('id',$request->post('id'))
            ->update([
                'name' => $request->name,
                'link' => $request->link]);
        $simple_videos = DB::table('simple_videos')
            ->where('id',$request->post('id'))
            ->get()
            ->toArray();
        foreach ($simple_videos as $simple_video)
        $videos = view('admin/simple_videos_tr', compact('simple_video'));
        return $videos;

    }
    /*Delete*/
    public function delete_simple_video(Request $request){
        DB::table('simple_videos')->where('id',$request->post('id'))->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);

    }
    /*Change  status*/

    public function change_simple_video_status(Request $request){
        $simple_videos = DB::table('simple_videos')->where('id',$request->post('id'))->get();

        foreach ($simple_videos as $simple_video){
            $status = $simple_video->status;
        }

        if ($status == 1){
            $active = 0;
        }else{
            $active = 1;
        }
        DB::table('simple_videos')
            ->where('id',$request->post('id'))
            ->update(['status' => $active]);

        return response()->json([
            'success' => $active
        ]);

    }
    /*End Simple Video*/

    /*Start Controllers for Training Video*/
    /*Insert*/
    public function add_training_video(Request $request)
    {
        $training_video = new TrainingVideo($request->all());
        $training_video->save();
        $videos = view('admin/training_video_tr', compact('training_video'));
        return $videos;
    }

    /*Delete*/
    public function delete_training_video(Request $request){
        DB::table('training_videos')->where('id',$request->post('id'))->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);

    }
    /*Update*/

    public function edit_training_video(Request $request){
        DB::table('training_videos')
            ->where('id',$request->post('id'))
            ->update([
                'name' => $request->name,
                'link' => $request->link]);
        $training_videos = DB::table('training_videos')
            ->where('id',$request->post('id'))
            ->get()
            ->toArray();
        foreach ($training_videos as $training_video)
        $videos = view('admin/training_video_tr', compact('training_video'));
        return $videos;

    }
    /*Change Status*/
    public function change_training_video_status(Request $request){
        $training_videos = DB::table('training_videos')->where('id',$request->post('id'))->get();

        foreach ($training_videos as $training_video){
            $status = $training_video->status;
        }

        if ($status == 1){
            $active = 0;
        }else{
            $active = 1;
        }
        DB::table('training_videos')
            ->where('id',$request->post('id'))
            ->update(['status' => $active]);

        return response()->json([
            'success' => $active
        ]);

    }

    public function use_of_software(){
        $videos = Members_Video::where('category', 'use_of_software')->get();
        return view('admin/use_of_software' , compact('videos'));

    }
    public function manually_setup(){
        $videos = Members_Video::where('category', 'manually_setup')->get();
        return view('admin/manually_setup' , compact('videos'));

    }
    public function automated_setup(){
        $videos = Members_Video::where('category', 'automated_setup')->get();
        return view('admin/automated_setup' , compact('videos'));

    }
    public function run_simulation(){
        $videos = Members_Video::where('category', 'run_simulation')->get();
        return view('admin/run_simulation' , compact('videos'));

    }
    public function flat_bet_and_videos(){
        $videos = Members_Video::where('category', 'flat_bet_and_videos')->get();
        return view('admin/flat_bet_and_videos' , compact('videos'));

    }
}

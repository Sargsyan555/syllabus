<?php

namespace App\Http\Controllers;

use App\Models\Members_Video;
use App\Models\Simple_videos;
use App\Models\TrainingVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use phpDocumentor\Reflection\Types\Compound;

class VideoController extends Controller
{
    /*Start Controllers for members Video*/
    /*Insert*/

    public function add_members_videos(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'category' => 'required',
            'link' => 'required|url',
        ]);
        if ($validator->passes()) {
            $members_video = new Members_Video($request->all());
            $members_video->save();
            $videos = view('admin/members_video_tr', compact('members_video'));
            return $videos;
        }
        return response()->json(['error'=>$validator->errors()]);

    }
    /*Update*/
    public function update_members_video(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_update' => 'required',
            'link_update' => 'required|url',
        ]);
        if ($validator->passes()){
        $member = Members_Video::where('id', $request->get('id'))
            ->update([
                'name' => $request->name_update,
                'link' => $request->link_update,
            ]);

        $members_videos = Members_Video::where('id', $request->get('id'))
            ->get();
        foreach ($members_videos as $members_video) {
            $videos = view('admin/members_video_tr', compact('members_video'));
        }
            return $videos;
    }
        return response()->json(['error'=>$validator->errors()]);

    }
    /*Delete*/
    public function delete_members_video(Request $request){
        Members_Video::where('id',$request->get('id'))->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);

    }

    /*Change  video status*/
    public function change_members_video_status(Request $request){
        $members_videos = Members_Video::where('id',$request->get('id'))->get();

        foreach ($members_videos as $members_video){
            $status = $members_video->status;
        }

        if ($status == 1){
            $active = 0;
        }else{
            $active = 1;
        }
        $req = Members_Video::where('id',$request->get('id'))
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required|url',
        ]);

        if ($validator->passes()) {
            $simple_video = new Simple_videos($request->all());
            $simple_video->save();
            $videos = view('admin/simple_videos_tr', compact('simple_video'));
            return $videos;

        }

        return response()->json(['error'=>$validator->errors()]);

    }
/*Update*/

    public function edit_simple_video(Request $request){
        $validator = Validator::make($request->all(), [
            'name_update' => 'required',
            'link_update' => 'required|url',
        ]);

        if ($validator->passes()) {
           Simple_videos::where('id', $request->get('id'))
                ->update([
                    'name' => $request->name_update,
                    'link' => $request->link_update]);
            $simple_videos = Simple_videos::where('id', $request->get('id'))
                ->get();
            foreach ($simple_videos as $simple_video) {
                $videos = view('admin/simple_videos_tr', compact('simple_video'));
            }
            return $videos;
        }
        return response()->json(['error'=>$validator->errors()]);

    }
    /*Delete*/
    public function delete_simple_video(Request $request){
        Simple_videos::where('id',$request->get('id'))->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);

    }
    /*Change  status*/

    public function change_simple_video_status(Request $request){
        $simple_videos = Simple_videos::where('id',$request->get('id'))->get();

        foreach ($simple_videos as $simple_video){
            $status = $simple_video->status;
        }

        if ($status == 1){
            $active = 0;
        }else{
            $active = 1;
        }
        Simple_videos::where('id',$request->get('id'))
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required|url',
        ]);

        if ($validator->passes()) {
            $training_video = new TrainingVideo($request->all());
            $training_video->save();
            $videos = view('admin/training_video_tr', compact('training_video'));
            return $videos;
        }
        return response()->json(['error'=>$validator->errors()]);

    }

    /*Delete*/
    public function delete_training_video(Request $request){
        TrainingVideo::where('id',$request->get('id'))->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);

    }
    /*Update*/

    public function edit_training_video(Request $request){

        $validator = Validator::make($request->all(), [
            'name_update' => 'required',
            'link_update' => 'required|url',
        ]);

        if ($validator->passes()) {
        TrainingVideo::where('id',$request->get('id'))
            ->update([
                'name' => $request->name_update,
                'link' => $request->link_update
            ]);
        $training_videos = TrainingVideo::where('id',$request->get('id'))
            ->get();
        foreach ($training_videos as $training_video)
        $videos = view('admin/training_video_tr', compact('training_video'));
        return $videos;
        }
         return response()->json(['error'=>$validator->errors()]);


}
    /*Change Status*/
    public function change_training_video_status(Request $request){
        $training_videos = TrainingVideo::where('id',$request->get('id'))->get();

        foreach ($training_videos as $training_video){
            $status = $training_video->status;
        }

        if ($status == 1){
            $active = 0;
        }else{
            $active = 1;
        }
       TrainingVideo::where('id',$request->get('id'))
            ->update(['status' => $active]);

        return response()->json([
            'success' => $active
        ]);

    }

    public function return_video(Request $request){

        $videos = Members_Video::where('category', $request->name)->get();
        return view('admin/videos' , compact('videos'));

    }
}

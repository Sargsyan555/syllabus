<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Simle_videosController extends Controller
{
    public function update(Request $request){
        $simple_videos = DB::table('simple_videos')->where('id',$request->post('id'))->get();
       foreach ($simple_videos as $simple_video)
        $status = $simple_video->status;
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
    public function edit(Request $request){
        DB::table('simple_videos')
            ->where('id',$request->post('id'))
            ->update([
                'name' => $request->name,
                'link' => $request->link]);

        return response()->json([
            'success' => "Your data changed"
        ]);
    }
}

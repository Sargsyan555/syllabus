<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Members_Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Members_videosController extends Controller
{
    public function store(Request $request)
    {
        $members_video = new Members_Video([
            "name" =>$request->name,
            "category" =>$request->category,
            "link" => $request->link,
        ]);

        $members_video->save();
        return response()->json(['status'=>$request->name]);

    }
}

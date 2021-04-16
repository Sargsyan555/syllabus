<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Subscribe;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:subscribers|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $subscriber = new Subscribe();
        $subscriber->email = $request->get('email');
        $subscriber->save();
        return response()->json(['status'=>'success']);

    }

    public function destroy(Request $request){
       Subscribe::where('id',$request->get('id'))->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);

    }

}

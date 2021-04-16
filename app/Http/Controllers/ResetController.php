<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Auth\Passwords\PasswordBroker;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetController extends Controller
{
    public  function forgotPass(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function ChangePass(Request $request){
        $validator = Validator::make($request->all(), [
                'old_pass' => 'required',
                'new_pass' => 'required|string|min:8|confirmed',
                'confirm_pass' => 'required_with:password|same:password|min:6',

            ]);
        if ($validator->passes()){

        }
        return response()->json(['error'=>$validator->errors()]);

    }
}

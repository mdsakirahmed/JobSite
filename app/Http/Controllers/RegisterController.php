<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function registration(Request $request){
        if ($request->input('type') == 1){
            $request->validate([
                'business_name' => 'required',
            ]);
        }

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $user = new User();
        if ($request->input('business_name')){
            $user->isCompany = 1;
            $user->business_name = $request->input('business_name');
        }
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email_address');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        if( Auth::attempt(['email' => $user->email, 'password' => $request->input('password')]) ){
            return response()->json([
                'message'=>'Successfully account created',
                'type'=>'success'
            ]);
        }
        else {
            return response()->json([
                'message'=>'Login failed',
                'type'=>'warning'
            ]);
        }
    }
}

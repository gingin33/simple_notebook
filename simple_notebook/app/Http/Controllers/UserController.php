<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SimpleNoteRequest;
use App\Models\User;


class UserController extends Controller
{
    public function regist_complete(Request $request){
        $this->validate($request, User::$rules);
        $user = new User();
        $user->fill([
            'user_name'=>$request->session()->get('user_name'),
            'email'=>$request->session()->get('mail'), 
            'password'=>Hash::make($request->session()->get('password'))
        ]);
        $user->save();
        return view('top.registerComplete');
    }
    public function login_check(Request $request){
        foreach(User::all() as $user){
            echo $user;
        }
    }
}

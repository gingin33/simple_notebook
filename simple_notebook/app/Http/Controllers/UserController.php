<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
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
        $user = User::where('email', $request->mail)->get();
        if(count($user) === 0){
            return view('top.login', ['isLoginError'=>true]);
        }
        if(Hash::check($request->pass, $user[0]->password)){
            session()->flash('login_mail', $user[0]->email);
            session()->flash('login_user', $user[0]->user_name);
            return view('top.index');
        }else{
            return view('top.login', ['notPassMatch'=>true]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Validator;

class SimpleNoteController extends Controller
{
    //
    public function index(){
        $isLogged = false;
        return view('top.index', ['isLogged'=>$isLogged]);
    }
    public function login(){
        return view('top.login');
    }
    public function register(){
        return view('top.register');
    }
    public function regist_confirm(RegisterRequest $request){
        $data = [
            'user'=>$request->user,
            'mail'=>$request->mail,
            'pass'=>$request->pass,
        ];
        $request->session()->put(['user_name'=>$request->user, 'mail'=>$request->mail, 'password'=>$request->pass]);

        return view('top.registerConfirm', $data);
    }
    public function logout(Request $request){
        $request->session()->forget('login_mail');
        $request->session()->forget('login_user');
        return view('top.index');
    }

}

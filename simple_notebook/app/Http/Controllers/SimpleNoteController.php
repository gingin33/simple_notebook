<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\SimpleNoteRequest;
use App\Models\User;
use Validator;

class SimpleNoteController extends Controller
{
    //
    public function index(){
        $isLogged = false;
        $data = ['isLogged'=>$isLogged];
        return view('top.index', $data);
    }
    public function login(){
        return view('top.login');
    }
    public function register(){
        return view('top.register');
    }
    public function regist_confirm(SimpleNoteRequest $request){
        $data = [
            'user'=>$request->user,
            'mail'=>$request->mail,
            'pass'=>$request->pass,
        ];
        $request->session()->put(['user_name'=>$request->user, 'mail'=>$request->mail, 'password'=>$request->pass]);

        return view('top.registerConfirm', $data);
    }
    

}

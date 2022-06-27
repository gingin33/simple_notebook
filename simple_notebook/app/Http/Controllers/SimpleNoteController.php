<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\SimpleNoteRequest;
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
            'pass'=>str_repeat("*", mb_strlen($request->pass, "UTF8")),
        ];

        return view('top.registerConfirm', $data);
    }
    public function regist_complete(Request $request){
        return view('top.registerComplete');
    }

}

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
    public function regist_check(SimpleNoteRequest $request){
        return view('top.registerCheck');
    }

}

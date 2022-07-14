<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Notebook;
use Validator;

class SimpleNoteController extends Controller
{
    //
    public function index(){
        return view('top.index');
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
        session()->flash('user_name', $request->user);
        session()->flash('mail', $request->mail);
        session()->flash('password', $request->pass);

        return view('top.registerConfirm', $data);
    }
    public function logout(Request $request){
        $notes = Notebook::orderBy('id', 'desc')->paginate(15);
        $request->session()->forget('login_id');
        $request->session()->forget('login_user');
        return view('top.index', ['notes' => $notes]);
    }

}

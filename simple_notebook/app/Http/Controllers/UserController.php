<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Notebook;
use App\Http\Requests\EditRequest;


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
        $notes = Notebook::orderBy('id', 'desc')->get();
        $user = User::where('email', $request->mail)->get();
        if(count($user) === 0){
            return view('top.login', ['isLoginError'=>true]);
        }
        if(Hash::check($request->pass, $user[0]->password)){
            session(['login_id'=>$user[0]->id, 'login_user'=>$user[0]->user_name]);
            return view('top.index', ['notes' => $notes]);
        }else{
            return view('top.login', ['notPassMatch'=>true]);
        }
    }
    public function edit(Request $request){
        $user = User::find($request->session()->get('login_id'));
        return view('top.editUser', ['user' => $user]);
    }
    public function edit_confirm(EditRequest $request){
        $data = [
            'user'=>$request->user,
            'mail'=>$request->mail,
            'pass'=>$request->pass,
        ];
        $request->session()->put(['user_name'=>$request->user, 'mail'=>$request->mail, 'password'=>$request->pass]);

        return view('top.editConfirm', $data);
    }
}

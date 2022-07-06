<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Models\Notebook;

class NoteController extends Controller
{
    public function index(Request $request){
        $notes = Notebook::orderBy('id', 'desc')->paginate(10);
        return view('top.index', ['notes' => $notes]);
    }
    public function upload(UploadRequest $request){
        $iP = false;
        if(isset($request->isPrivate[0])){
            $iP = true;
        }
        $data = [
            'title'=>$request->title,
            'texts'=>$request->texts,
            'isPrivate'=>$iP,   
        ];
        $request->session()->put(['title'=>$request->title, 'texts'=>$request->texts, 'isPrivate'=>$iP]);

        return view('top.uploadConfirm', $data);
    }
    public function upload_complete(Request $request){
        $note = new Notebook();
        if($request->session()->get('isPrivate') == true){
            $iP = true;
        }else{
            $iP = false;
        }

        $note->fill([
            'subject'=>$request->session()->get('title'),
            'text'=>$request->session()->get('texts'), 
            'user_id'=>$request->session()->get('login_id'),
            'is_private'=>$iP,
        ]);
        $note->save();
        return view('top.uploadComplete');
    }
    public function mypage(Request $request){
        $notes = Notebook::where('user_id', $request->session()->get('login_id'))->orderBy('id', 'desc')->paginate(10);
        return view('top.mypage', ['notes' => $notes]);
    }
}

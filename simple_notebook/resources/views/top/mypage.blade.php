@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', 'マイ備忘録')

@section('contents')
    <div class="container">
        <div class="sideBar">
            @if (session('login_id'))
                <a href="/">最新の備忘録</a>
                <a href="/faves">いいねした備忘録</a>
                <a href="/edit">登録情報変更</a>
                <a href="/logout">ログアウト</a>
            @else
                <a href="/login">ログイン</a>
            @endif
        </div>
        <div class="notes">
            @foreach ($notes as $note)
                <table class="rounded-circle">
                    <tr class="noteName"><th>名前 : </th><td>
                        @if(isset($note->user->user_name))
                            {{ $note->user->user_name }} 
                        @else
                            名無し
                        @endif
                    </td></tr>
                    <tr class="noteTitle"><th>タイトル : </th><td>{{ $note->subject}}</td></tr>
                    <tr class="noteText"><th>本文 : </th><td>{{ $note->text }}</td></tr>
                </table>    
            @endforeach
            {{ $notes->links() }}
            <form action="/upload" method="post"> 
                    @csrf
                    <table class="uploadForm">
                        @if (session('login_id'))
                            <tr><th>名前 : </th><td>{{ session('login_user') }}</td></tr>
                        @else  
                            <tr><th>名前 : </th><td>名無し</td></tr>
                        @endif

                        @if ($errors->has('title'))
                        @error('title')
                        <tr class="err"><th></th><td>{{ $message }}</td></tr>
                        @enderror
                        @endif
                        <tr><th>タイトル : </th><td><input type="text" name="title"></input></td></tr>

                        @if ($errors->has('texts'))
                        @error('texts')
                        <tr class="err"><th></th><td>{{ $message }}</td></tr>
                        @enderror
                        @endif
                        <tr><th></th><td><textarea cols=50 rows=10 name="texts"></textarea></td></tr>
                        <tr><th>プライベート投稿にする</th><td><input type="checkbox" name="isPrivate[]"></td></tr>
                        <tr><th></th><td><input type="submit"></input></td></tr>
                    </table>
            </form> 
        </div>
    </div>
@endsection
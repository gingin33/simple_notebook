@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', '最新の備忘録')

@section('contents')
    @if (session('login_mail') && session('login_user'))
        <div class="helloName">
            <h2>こんにちは、{{ session('login_user') }}</h2>
        </div>
    @endif
    <div class="container">
        <div class="sideBar">
            @if (!(session('login_mail') && session('login_user')))
                <a href="/login">ログイン</a>
            @else
                <a href="/mypage">マイ備忘録</a>
                <a href="/faves">いいねした備忘録</a>
                <a href="/logout">ログアウト</a>
            @endif
        </div>
        <div class="notes">
            <p>aaaa</p>
        </div>
    </div>
@endsection
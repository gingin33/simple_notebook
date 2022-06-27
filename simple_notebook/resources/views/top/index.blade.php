@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', '最新の備忘録')

@section('contents')
    <div class="container">
        <div class="sideBar">
            @if (!$isLogged)
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
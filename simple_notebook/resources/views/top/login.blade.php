@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', 'ログイン')

@section('contents')
    <div class="regist">
        <a href="/register">新規登録</a>
    </div>
    @if (isset($isLoginError))
    <div class="err">入力されたメールアドレスは存在しません.</div>
    @elseif (isset($notPassMatch))
    <div class="err">パスワードが違います.</div>
    @endif
    <form action="/" method="post">
        <table class="forms">
            @csrf
            <tr><th>メールアドレス : </th><td><input type="text" name="mail"></td></tr>
            <tr><th>パスワード : </th><td><input type="password" name="pass"></td></tr>
            <tr><th></th><td><input type="submit" value="ログイン"></td></tr>
        </table>
    </form>
    <a href="/">トップへ</a>
@endsection
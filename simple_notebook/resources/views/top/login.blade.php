@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', 'ログイン')

@section('contents')
    <div class="regist">
        <a href="/register">新規登録</a>
    </div>
    <form action="/" method="post">
        <table class="forms">
            @csrf
            <tr><th>ユーザID : </th><td><input type="text" name="name"></td></tr>
            <tr><th>パスワード : </th><td><input type="password" name="pass"></td></tr>
            <tr><th></th><td><input type="submit" value="ログイン"></td></tr>
        </table>
    </form>
    <a href="/">トップへ</a>
@endsection
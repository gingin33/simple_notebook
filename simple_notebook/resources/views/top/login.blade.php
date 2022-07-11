@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', 'ログイン')

@section('contents')
    <div class="contentForms">
        <div class="regist">
            <a href="/register">新規登録</a>
        </div>
        @if (isset($isLoginError))
        <div class="err">メールアドレスかパスワードが違います.</div>
        @endif  
        <form action="/" method="post">
            <table class="forms">
                @csrf
                <tr><th>メールアドレス : </th><td><input type="text" name="mail"></td></tr>
                <tr><th>パスワード : </th><td><input type="password" name="pass"></td></tr>
                <tr><th></th><td><input type="submit" value="ログイン" class="submit"></td></tr>
            </table>
        </form>
        <div class="back"><a href="/" class="back">トップへ</a></div>
    </div>
@endsection
@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', '登録情報チェック')

@section('contents')
    <p>以下の内容でよろしいでしょうか？</p>
    <form action="/register/complete" method="post">
        <table class="forms">
            <tr><th>ユーザID : </th><td>{{ $user }}</td></tr>
            <tr><th>パスワード : </th><td>{{ $pass }}</td></tr>
            <tr><th></th><td><input type="submit" value="OK"></td><td><input type="button" value="戻る" onclick="history.back()"></td></tr>
        </table>
    </form>
@endsection
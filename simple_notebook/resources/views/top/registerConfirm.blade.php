@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', '登録情報チェック')

@section('contents')
    <div class="contentForms">
        <p>以下の内容でよろしいでしょうか？</p>
        <form action="/register/complete" method="post">
            <table class="forms">
                <tr><th>ユーザID : </th><td>{{ $user }}</td></tr>
                <tr><th>メールアドレス : </th><td>{{ $mail }}</td></tr>
                <tr><th>パスワード : </th><td>@php echo str_repeat("*", mb_strlen($pass, "UTF8")); @endphp</td></tr>
                
                <tr><th></th><td><input type="submit" value="OK"></td><td><input type="button" value="戻る" onclick="history.back()"></td></tr>
            </table>
        </form>
    </div>
@endsection
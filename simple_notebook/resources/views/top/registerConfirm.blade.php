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
                
                <tr><th><input type="submit" value="OK" class="submit"></th><td><input type="button" value="戻る" onclick="history.back()" class="submit"></td></tr>
            </table>
        </form>
    </div>
@endsection
@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', '登録情報変更')

@section('contents')
@if (count($errors) > 0)
    <p class="err">入力に問題があります。</p>
    @endif
    <form action="/editConfirm" method="post">
        <table class="forms">
            @csrf
            @if ($errors->has('user'))
            @error('user')
            <tr class="err"><th></th><td>{{ $message }}</td></tr>
            @enderror
            @endif
            <tr><th>ユーザID : </th><td><input type="text" name="user" value="{{ $user->user_name }}"></td></tr>

            @if ($errors->has('mail'))
            @error('mail')
            <tr class="err"><th></th><td>{{ $message }}</td></tr>
            @enderror
            @endif
            <tr><th>メールアドレス : </th><td><input type="text" name="mail" value="{{ $user->email }}"></td></tr>

            @if ($errors->has('pass'))
            @error('pass')
            <tr class="err"><th></th><td>{{ $message }}</td></tr>
            @enderror
            @endif
            <tr><th>パスワード : </th><td><input type="password" name="pass" value=""></td></tr>

            @if ($errors->has('passCheck'))
            @error('passCheck')
            <tr class="err"><th></th><td>{{ $message }}</td></tr>
            @enderror
            @endif
            <tr><th>パスワード確認 : </th><td><input type="password" name="passCheck" value=""></td></tr>
            <tr><th></th><td><input type="submit" value="登録"></td></tr>
        </table>
    </form>
    <a href="/">トップへ</a>
@endsection
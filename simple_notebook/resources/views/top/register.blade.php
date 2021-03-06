@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', '新規登録')

@section('contents')
    <div class="contentForms">
        @if (count($errors) > 0)
        <p class="err">入力に問題があります。</p>
        @endif
        <form action="/register" method="post">
            <table class="forms">
                @csrf
                @if ($errors->has('user'))
                @error('user')
                <tr class="err"><th></th><td>{{ $message }}</td></tr>
                @enderror
                @endif
                <tr><th>ユーザネーム : </th><td><input type="text" name="user" value="{{ old('user') }}"></td></tr>

                @if ($errors->has('mail'))
                @error('mail')
                <tr class="err"><th></th><td>{{ $message }}</td></tr>
                @enderror
                @endif
                <tr><th>メールアドレス : </th><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>

                @if ($errors->has('pass'))
                @error('pass')
                <tr class="err"><th></th><td>{{ $message }}</td></tr>
                @enderror
                @endif
                <tr><th>パスワード : </th><td><input type="password" name="pass" value="{{ old('pass') }}"></td></tr>

                @if ($errors->has('passCheck'))
                @error('passCheck')
                <tr class="err"><th></th><td>{{ $message }}</td></tr>
                @enderror
                @endif
                <tr><th>パスワード確認 : </th><td><input type="password" name="passCheck" value="{{ old('passCheck') }}"></td></tr>
                <tr><th></th><td><input type="submit" value="登録" class="submit"></td></tr>
            </table>
        </form>
        <div class="back"> <a href="/login">ログインへ</a></div>
    </div>
@endsection

@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', '登録情報チェック')

@section('contents')
    <p>以下の内容でよろしいでしょうか？</p>
    <form action="/upload/complete" method="post">
        <table class="forms">
            @csrf
            <tr><th>タイトル : </th><td>{{ $title }}</td></tr>
            <tr><th>本文 : </th><td>{{ $texts }}</td></tr>
            <tr><th>プライベートか : </th><td>
                @if ($isPrivate)
                    YES
                @else
                    NO
                @endif
            <tr><th></th><td><input type="submit" value="OK"></td><td><input type="button" value="戻る" onclick="history.back()"></td></tr>
        </table>
    </form>
@endsection
@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', '投稿内容チェック')

@section('contents')
    <div class="contentForms"> 
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
                <tr><th><input type="submit" value="OK" class="submit"></th><td><input type="button" value="戻る" onclick="history.back()" class="submit"></td></tr>
            </table>
        </form>
    </div>
@endsection
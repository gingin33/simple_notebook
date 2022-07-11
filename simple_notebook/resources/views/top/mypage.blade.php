@extends('top.template')

@section('title', 'かんたん備忘録')

@section('pageTitle', 'マイ備忘録')

@section('contents')
    <div class="contain">
        <div class="sideBar">
            <div class="sideBarContent">
                @if (session('login_id'))
                    <a href="/">最新の備忘録</a>
                    <a href="/edit">登録情報変更</a>
                    <a href="/logout">ログアウト</a>
                @else
                    <a href="/login">ログイン</a>
                @endif
            </div>
        </div>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="noteTitle">
                        <h3> {{ $note->subject }} </h3>
                    </div>
                    <div class="noteText">{{ $note->text }}</div>
                    <div class="noteInfo">
                        <div class="createdAt">{{ $note->created_at }}</div>
                        <div class="userName">
                            by {{ $note->user->user_name }}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="pager">
                {{ $notes->links() }}
            </div>
            <form action="/upload" method="post"> 
                    @csrf
                    <table class="uploadForm">
                        @if (session('login_id'))
                            <tr><th class="uploadColumn">名前</th><td>{{ session('login_user') }}</td></tr>
                        @else  
                            <tr><th class="uploadColumn">名前</th><td>名無し</td></tr>
                        @endif

                        @if ($errors->has('title'))
                        @error('title')
                        <tr class="err"><th></th><td>{{ $message }}</td></tr>
                        @enderror
                        @endif
                        <tr><th class="uploadColumn">タイトル</th><td><input type="text" name="title"></input></td></tr>

                        @if ($errors->has('texts'))
                        @error('texts')
                        <tr class="err"><th></th><td>{{ $message }}</td></tr>
                        @enderror
                        @endif
                        <tr><th class="uploadColumn"></th><td><textarea cols=50 rows=10 name="texts"></textarea></td></tr>
                        <tr><th class="uploadColumn">プライベート投稿にする</th><td><input type="checkbox" name="isPrivate[]"></td></tr>
                        <tr><th></th><td><input type="submit"></input></td></tr>
                    </table>
            </form> 
        </div>
    </div>
@endsection
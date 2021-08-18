@extends('layouts.app')

@section('content')


    <h1>ログイン画面</h1>

    <form action="#" method="post">
        @csrf

        <label>メールアドレス:
            <input type="email" name="email">
        </label>

        <label>パスワード:
            <input type="password" name="password">
        </label>

        <button type="submit">送信</button>
    </form>



@endsection

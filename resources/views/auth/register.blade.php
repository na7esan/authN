@extends('layouts.app')

@section('content')


    <h1>新規会員登録ページ</h1>

    <form action="#" method="post">
        @csrf

        <label>お名前:
            <input type="text" name="name">
        </label>

        <label>メールアドレス:
            <input type="email" name="email">
        </label>

        <label>パスワード:
            <input type="password" name="password">
        </label>

        <button type="submit">登録</button>
    </form>



@endsection

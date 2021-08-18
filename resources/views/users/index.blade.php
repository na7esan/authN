@extends('layouts.app')

@section('content')


    <h1>会員一覧ページ</h1>

    @foreach ($users as $user)

        <p>名前:{{ $user->name }}</p>

    @endforeach



@endsection

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>authN</title>
</head>

<body>

    <nav>
        <ul>

            <li>
                <a href="{{ route('top') }}">TOP</a>
            </li>

            @auth
                {{-- 認証済みナビ --}}
                <li>
                    <a href="#">会員一覧</a>
                </li>

                <li>
                    <form method="post" action="#">
                        @csrf
                        <button type="submit">ログアウト</button>
                    </form>
                </li>

            @else
                {{-- 非認証ナビ --}}
                <li>
                    <a href="#">ログイン</a>
                </li>

                <li>
                    <a href="{{ route('register') }}">会員登録</a>
                </li>

            @endauth
        </ul>
    </nav>


    @yield('content')


</body>

</html>

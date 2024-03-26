<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー一覧</title>
</head>
<body>
<h1>メニュー</h1>
@if (Auth::check())
    <p>ログイン中</p>
    @else
    <p>※ログインしていません。(<a href="/login">ログイン</a>
        <a href="/register">登録</a>)</p>
@endif
    <a href="/home">ログアウト</a>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @csrf

    <div>
        <form action="#">
            Mail:<input type="email" id="mail" name="mail" placeholder="メールアドレスを入力してください"><br>
            PW:<input type="password" id="password" name="password" placeholder="パスワードを入力してください"><br>
            <input type="submit" value="ログイン">
        </form>
    </div>
        <tr>
            <th>名前</th>
            <th>値段(税込)</th>
            <th>画像</th>
        </tr>
    
        @foreach($products as $product)
            <tr>
                <th>$product -> name</th>
                <th>$product -> price_tax</th>
                <th>$product -> image</th>
            </tr>
        @endforeach

        <footer>
        <div>
            <a href="" >
            <a href="" >
            <a href="" >
            <a href="" >
        </div>
        </footer> 

        
        
    
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


@csrf
    <header>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
    </header>
        <table border="1">
        <tr>
            <th>名前</th>
            <th>値段(税込)</th>
            <th>画像</th>
        </tr>
    
        @foreach($products as $product)
            <tr>
                <td>{{$product -> name}}</td>
                <td>{{$product -> price}}</td>
                <td class="img"><img src ="{{ asset('/img/' . $product -> image) }}" alt="pr_img"></td>
                <td><button onclick='addcart("{{$product -> name}}", {{$product -> price}})'>カートに入れる</button></td>
            </tr>
        @endforeach
        </table>
        <div id="cart" class="cart_a">
            
        </div>

        <div id="cart_total_price" class="ca_to_pr">

        </div>

        <footer>
        <div>
            <a href="#" ></a>
            <a href="#" ></a>
            <a href="#" ></a>
            <a href="#" ></a>
        </div>
        </footer> 
        <script src="{{ asset('js/addcart.js') }}"></script>
</body>
</html>
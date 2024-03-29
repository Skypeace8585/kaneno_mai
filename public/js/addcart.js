function addcart(name,price) {
    // クッキー分割
    let cookie_val = document.cookie.split("; ");
    // 初回実行確認フラグ
    let isFirst = true;

    // カートの中身表示用変数
    let now_name = "";
    let now_price = "";

    // 既存のクッキーを解析
    cookie_val.forEach(value => {
        let cookie = value.split("=");
        if(cookie[0] == "name"){
            tempname = cookie[1];
            isFirst = false;
        }
        if(cookie[0] == "price"){
            tempprice = cookie[1];
            isFirst = false;
        }
    });

    if(isFirst){
        now_name = name;
        now_price = price;
        document.cookie = "name=" + name;
        document.cookie = "price=" + price;
    } else {
        now_name = tempname + "," + name;
        now_price = tempprice + "," + price;
        document.cookie = "name=" + tempname + "," + name;
        document.cookie = "price=" + tempprice + "," + price;
    }

    // カート追加処理
    let cart = document.getElementById("cart");
    let cart_item = "<div>" + now_name + " : " + now_price + "</div>";
    cart.innerHTML = "";
    cart.insertAdjacentHTML("beforeend", cart_item);

    // 合計金額表示用
    let price_div = document.getElementById("cart_total_price");
    let sum = 0;
    
    price_div.innerHTML = "";

    // 初回以外実行
    if (isFirst) {
        sum += Number(now_price);
    } else {
        now_price = now_price.split(",")
        now_price.forEach(value => {
            sum += Number(value);
        })
    }
    sum = "<div>合計金額 : " + sum + "</div>";
    price_div.insertAdjacentHTML("beforeend", sum);
}
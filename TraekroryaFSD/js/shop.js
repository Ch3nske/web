var cart = {};

$('document').ready(function(){
    loadGoods();
    checkCart();
    showMiniCart();
});
function loadGoods() {
    //загружаю товары на страницу
    $.getJSON('goods.json', function (data) {
        //console.log(data);
        var out = '';
        for (var key in data){
            out+='<div class="single-goods">';
            out+='<h1 class="title_item">'+data[key]['name']+'</h1>';
            out+='<img class="shop-pic" src="'+data[key].image+'">';
            out+='<p class="item_text">Цена: '+data[key]['cost']+'</p>';
            out+='<button class="buy_but" data-art="'+key+'">Купить</button>';
            out+='</div>';
        }
        $('#goods').html(out);
        $('button.buy_but').on('click', addToCart);
    });
}

function addToCart() {
    //добавляем товар в корзину
    var articul = $(this).attr('data-art');
    if (cart[articul]!=undefined) {
        cart[articul]++;
        alert("Вы добавили товар в корзину");
    } else {
        cart[articul] = 1;
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    //console.log(cart);
    showMiniCart();
}
function checkCart(){
    //Проверка корзины.
    if(localStorage.getItem('cart')!=null){
        cart = JSON.parse(localStorage.getItem('cart'));
    }
}

function showMiniCart(){
    //Отображение содержимого корзинки.
    var out = 0;
    for (var key of Object.values(cart)){
        out += key;
    }
    $('#mini-cart').html(out);
}

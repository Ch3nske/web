var cart = {};
$.getJSON('../goods.json', function(data) {
    var goods = data;
    checkCart();
    showCart();

    function showCart() {
        var out = '';
        for (var key in cart) {
            out += '<div class="report_goods">';
            out += '<img class="report_pict" src="'+goods[key].image+'">';
            out += '<h1 class="report_title_text">'+goods[key]['name']+'</h1>';
            out += '<div class="report_summa">'+'По Цене: '+ cart[key]*goods[key].cost+'</div>';
            out += '<div class="amount">'+'Количество: '+ + cart[key]+ '</div>';
            out += '</div>';
        }
        $('#report_cart').html(out); //поиск id на .php
    }
});

function checkCart() {
    //проверяю наличие корзины в localStorage;
    if (localStorage.getItem('cart') != null) {
        cart = JSON.parse(localStorage.getItem('cart'));
    }
}

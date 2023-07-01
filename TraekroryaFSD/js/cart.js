var cart = {};

$.getJSON('goods.json', function(data){
    var goods = data;
    checkCart();
    //console.log(cart);
    showCart();
    /*Price();*/

    function showCart(){
        if ($.isEmptyObject(cart)) {
            //корзина пуста
            var out = '<h1 class="empty_cart">Корзина пуста. Добавьте товар в корзину <a href="shop.php"></br>Магазин</a><h1>';
            $('#my-cart').html(out);
        }
        else {
            var out = "";
            for (var key in cart){
                out += '<div class="cart-goods">';
                out += '<button class="delete" data-art="' + key + '">x</button>';
                out+='<img class="cart-pic" src="'+data[key].image+'">';
                out += '<h1 class="cart_title_text">'+goods[key]['name']+'</h1>';

                out += '<div class="Text_cart">'+ goods[key]['description']+'</div>';

                out += '<div class="navi_cart">';
                out += '<button class="minus" data-art="' + key + '">-</button>';
                out += cart[key];
                out += '<button class="plus" data-art="' + key + '">+</button>';

                out += '<div class="summa">'+'Цена: '+ cart[key]*goods[key].cost+'</div>';
                out += '</div>';
                out += '</div>';

            }
            $('#my-cart').html(out);
            $('.plus').on('click', plusGoods);
            $('.minus').on('click', minusGoods);
            $('.delete').on('click', deleteGoods);
        }
    }
    function plusGoods() {
        var articul = $(this).attr('data-art');
        cart[articul]++;
        saveCartToLS(); //сохраняю корзину в localStorage
        showCart();
    }

    function minusGoods() {
        var articul = $(this).attr('data-art');
        if (cart[articul] > 1) {
            cart[articul]--;
        }
        else {
            delete cart[articul];
        }
        saveCartToLS();//сохраняю корзину в localStorage
        showCart();
    }

    function deleteGoods() {
        var articul = $(this).attr('data-art');
        delete cart[articul];
        saveCartToLS();//сохраняю корзину в localStorage
        showCart();
    }

});
function checkCart(){
    //Проверка корзины.
    if(localStorage.getItem('cart')!=null){
        cart = JSON.parse(localStorage.getItem('cart'));
    }
}
function saveCartToLS() {
    localStorage.setItem('cart', JSON.stringify(cart));
}
function sendEmail(){
    var ename = $('#ename').val();
    var email = $('#email').val();
    var ephone = $('#ephone').val();
    if(ename !='' && email != '' && ephone != ''){
        if (!$.isEmptyObject(cart)){
            $.post(
                "core/mail.php",
                {
                    "ename" : ename,
                    "email" : email,
                    "ephone" : ephone,
                    "cart" : cart
                },
                function (data){
                    console.log(data);
                }
            )
        }else{
            alert('Корзина пуста!');
        }
    }else{
        alert('Заполните поля!');
    }
};
$(document).ready(function (){
    checkCart();
    $('.send_email').on('click', sendEmail);
});

/*function Price(){
    $total = 0
    $total = $total + cart*Goods['key']['cost'];
    $('#price').html(total);
}*/


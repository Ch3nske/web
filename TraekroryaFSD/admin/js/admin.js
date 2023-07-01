var cart = {}; 
$.getJSON('goods.json', function (data) {
    var goods = data; 
    checkCart();
    showCart(); 

    function showCart() {
        var out = '';
        for (var key in cart) {
            out += '<div class="adm_goods">';
            out += '<img class="adm_pict" src="'+goods[key].image+'">';
            out += '<h1 class="adm_title_text">'+goods[key]['name']+'</h1>';
            out += '<div class="summa">'+'По Цене: '+ cart[key]*goods[key].cost+'</div>';
            out += '<div class="amount">'+'Количество: '+ + cart[key]+ '</div>';
            out += '</div>';
        }
        $('#adm_cart').html(out); //поиск id на .php
    }
});

function checkCart() {
    //проверяю наличие корзины в localStorage;
    if (localStorage.getItem('cart') != null) {
        cart = JSON.parse(localStorage.getItem('cart'));
    }
}
/*Chart.js*/
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
        datasets: [{
            label: 'Количество посещений сайта',
            data: [28, 44, 56, 30, 59, 79, 100],
            backgroundColor: [
                'rgb(255, 215, 142)',
                'rgb(255, 215, 142)',
                'rgb(255, 215, 142)',
                'rgb(255, 215, 142)',
                'rgb(255, 215, 142)',
                'rgb(255, 215, 142)',
                'rgb(255, 215, 142)'
            ],
            borderColor: [
                'rgb(30, 33, 41)',
                'rgb(30, 33, 41)',
                'rgb(30, 33, 41)',
                'rgb(30, 33, 41)',
                'rgb(30, 33, 41)',
                'rgb(30, 33, 41)',
                'rgb(30, 33, 41)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    module: {
        loaders: [
            {
                test: /\.jsx?$/,
                exclude: /(node_modules)/,
                loader: 'babel-loader'
            }
        ]
    }
});
var ctx = document.getElementById('stats_1');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Скейт обвесы', 'Одежда', 'Обувь'],
        datasets: [{
            label: 'Количество купленых товаров',
            data: [28, 44, 56],
            backgroundColor: [
                'rgb(255, 0, 0)',
                'rgb(79, 48, 208)',
                'rgb(0, 186, 255)'
            ],
            borderColor: [
                'rgb(30, 33, 41)',
                'rgb(30, 33, 41)',
                'rgb(30, 33, 41)'
            ],
            borderWidth: 1,
            
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    module: {
        loaders: [
            {
                test: /\.jsx?$/,
                exclude: /(node_modules)/,
                loader: 'babel-loader'
            }
        ]
    }
});
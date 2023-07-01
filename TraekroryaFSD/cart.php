<?php
session_start();
//если рядовой пользователь не залогинился перекинет на осн. страницу
if(!$_SESSION['user']) {
    header('Location: index.html');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="src/favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">
    <script src="js/scripts.js" defer></script>
    <script src="js/headhesive.min.js"></script>
    <script src="js/cart.js" defer></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <meta charset="UTF-8">
    <title>Корзина</title>
</head>
<body class="cart_body">
<!--Прелоадер-->
<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!--Header-->
<header class="header">
    <div class="wrapper">
        <div class="row">
            <div class="logo"><a href="index.html"> <img class="logo_pic" src="src/logo.png" alt="Skate.CO"></a></div>
            <nav class="menu">
                <a href="index.html" class="menu_item">Сайт</a>
                <a href="shop.php" class="menu_item">Магазин</a>
                <a href="technical.php" class="menu_item">Форум</a>
            </nav>
            <div class="profile">
                <h4 class="greetings">Привет!  <?= $_SESSION['user']['login']?></h4>

                <div class="logout_but"><a href="vendor/logout.php" class="logout"><img class="exit_img" src="src/logout.png"></a></div>
            </div>
        </div>
    </div>
</header>
<div class="Card">
    <div class="cart_bar">
        <div class="cart_title">
            <h1>Корзина</h1>
        </div>
        <div class="wrap_buy">
            <div class="btn-box">
                <button type="button" class="btn btn-default" data-modal="modal_1">Оформить заказ</button>
            </div>
            <div class="overlay" data-close=""></div>
            <div id="modal_1" class="dlg-modal dlg-modal-slide">
                <span class="closer" data-close=""></span>
                <!--контент popup-->
                <div class="email_field">
                    <p>Ваше имя:<input type="text" id="ename"></p>
                    <p>Email:<input type="text" id="email"></p>
                    <p>Телефон:<input type="text" id="ephone"></p>
                    <P><button class="send_email">Заказать</button></P>
                </div>
            </div>
        </div>
        <!--<div class="text_price">
            <h1>Сумма покупок: </h1>
        </div>
        <div class="cart_price" id="price">

        </div>-->
    </div>
    <div class="container_cart">
        <div id="my-cart">

        </div>
    </div>
</div>
<footer>
    <div class="footer_wrap">
        <div class="term_list"><a href="technical.php">Условия использования сервиса</a> <a href="technical.php">Политика
            конфеденциальности</a>
            <a href="technical.php">Правила форума</a> <a href="technical.php">Лицензионное соглашение</a> <a
                    href="technical.php">Помощь</a></div>
        <div class="footer_raiting"><img src="src/footer_age_18.png" alt="18+"></div>
        <div class="footer_item">
            <a href="#"><img src="src/logo.png" alt="logo"></a>
            <p>Copyright (c) Skate Company All Rights Reserved</p>
        </div>
    </div>
</footer>
<script>var typeAnimate = 'slide';</script>
<script src="js/popup.function.js"></script>
<a href="#" class="scrollup">Наверх</a>
</body>
</html>
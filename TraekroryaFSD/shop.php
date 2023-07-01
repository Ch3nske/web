<?php
session_start();
//если рядовой пользователь не залогинился перекинет на осн. страницу
if(!$_SESSION['user']) {
    header('Location: index.html');
};
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="src/favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">
    <script src="js/scripts.js" defer></script>
    <script src="js/headhesive.min.js"></script>
    <script src="js/shop.js" defer></script>
    <title>Магазин Skate.CO</title>
</head>
<body>
    <!--Прелоадер-->
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!--Header-->
    <header class="header">
        <div class="wrapper">
            <div class="row">
                <div class="logo"><a href="index.html"> <img class="logo_pic" src="src/logo.png" alt="Skate.CO"></a> </div>
                <nav class="menu">
                    <a href="index.html" class="menu_item">Сайт</a>
                    <a href="cart.php" class="menu_item">Корзина</a>
                    <a href="technical.php" class="menu_item">Форум</a>
                </nav>
                <div class="profile">
                    <h4 class="greetings">Привет!  <?= $_SESSION['user']['login']?></h4>
                    <div class="logout_but"><a href="vendor/logout.php" class="logout"><img class="exit_img" src="src/logout.png"></a></div>
                </div>
            </div>
        </div>
    </header>
    <div class="shop_main">
        <h1>В корзине: <p id="mini-cart"></p></h1>

    </div>
    <div class="shop_area">
         <div>
            <div id="goods" class="shop">
             <!--Здесь выгрузка с json'a-->   
            </div>
        </div>
    </div>
    </div>
    <footer>
        <div class="footer_wrap">
            <div class="term_list"> <a href="technical.php">Условия использования сервиса</a> <a href="technical.php">Политика конфеденциальности</a> <a href="technical.php">Правила форума</a> <a href="technical.php">Лицензионное соглашение</a> <a href="technical.php">Помощь</a> </div>
            <div class="footer_raiting"><img src="src/footer_age_18.png" alt="18+"></div>
            <div class="footer_item">
                <a href="#"><img src="src/logo.png" alt="logo"></a>
                <p>Copyright (c) Skate Company All Rights Reserved</p>
            </div>
        </div>
    </footer> <a href="#" class="scrollup">Наверх</a>
    <script src="js/jquery-3.5.1.min.js" ></script>
</body>
</html>
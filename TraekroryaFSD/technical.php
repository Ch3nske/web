<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="src/favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="js/scripts.js" defer></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/headhesive.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <title>OOPS!</title>
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
                <div class="logo"><a href="index.html"> <img class="logo_pic" src="src/logo.png" alt="Skate.CO"> </a></div>
                <nav class="menu"> 
                <a href="technical.php" class="menu_item">Новости</a> 
                <a href="shop.php" class="menu_item">Магазин</a>
                <a href="technical.php" class="menu_item">Форум</a> </nav>
                <div class="profile">
                   <?php
                    if(isset($_SESSION['user'])) {
                        echo '<h4 class="greetings"> Привет!</h4>
                        <div class="logout_but"><a href="vendor/logout.php" class="logout"><img class="exit_img" src="src/logout.png"></a></div>';
                    } else {
                        echo '<div class="login">
                    <a class="login_button" href="login.php"> <span class="button__line button__line--top"></span> <span class="button__line button__line--right"></span> <span class="button__line button__line--bottom"></span> <span class="button__line button__line--left"></span> Login </a>
                    </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <!--Techinical works-->
    <div class="tech">
        <h2 class="tech_text">Ведутся технические работы на данной странице, просим вас подождать!</h2>
    </div>
    <!--footer-->
    <footer>
        <div class="footer_wrap">
            <div class="term_list"> <a href="#">Условия использования сервиса</a> <a href="#">Политика конфеденциальности</a> <a href="#">Правила форума</a> <a href="#">Лицензионное соглашение</a> <a href="#">Помощь</a> </div>
            <div class="footer_raiting"><img src="src/footer_age_18.png" alt="18+"></div>
            <div class="footer_item">
                <a href="#"><img src="src/logo.png" alt="logo"></a>
                <p>Copyright (c) Skate Company All Rights Reserved</p>
            </div>
        </div>
    </footer> <a href="#" class="scrollup">Наверх</a>
    <!--Кнопка скролла-->
</body>
</html>

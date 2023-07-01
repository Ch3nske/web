<?php
    session_start();
    if($_SESSION['user']) {
        header('Location: Authorized.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="src/favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <script src="js/scripts.js" defer></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/headhesive.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authorization on Skate.CO</title>
</head>
<body>
    <!--Прелоадер-->
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!--Хэдэр-->
    <header class="header">
        <div class="wrapper">
            <div class="row">
                <div class="logo">
                    <a href="index.html"> <img class="logo_pic" src="src/logo.png" alt="Skate.CO"></a>
                </div>
            </div>
        </div>
    </header>
    <!--Контейнер с формой-->
    <div class="container_f">
        <form class="form" method="post" action="vendor/signup.php">
            <h1>Регистрация</h1>
            <div class="input_form">
                <input type="email" placeholder="Ваш email" name="email"> </div>
            <div class="input_form">
                <input type="text" placeholder="Ваш логин" name="login"> </div>
            <div class="input_form">
                <input type="password" placeholder="Пароль" name="password"> </div>
            <div class="input_form">
                <input type="password" placeholder="Подтвердите пароль" name="password_confirm"> </div>
            <div class="input_form">
                <button class="but_submit" type="submit">Войти</button>
            </div>
                <a href="login.php" class="forget">Уже есть аккаунт?</a>
                <?php
                    if($_SESSION['message']){
                        echo '<p class="message">' . $_SESSION['message'] . '</p>';
                    }
                    unset($_SESSION['message']);
                ?>
        </form>
    </div>
    <!--footer-->
    <footer>
        <div class="footer_wrap">
            <div class="term_list"> <a href="#">Условия использования сервиса</a> <a href="#">Политика конфеденциальности</a> <a href="#">Правила форума</a> <a href="#">Лицензионное соглашение</a> <a href="#">Помощь</a> </div>
            <div class="footer_raiting"><img src="src/footer_age_18.png" alt="18+"></div>
            <div class="footer_item">
                <a href="#"><img src="src/logo.png" alt="logo"></a>
                <p>Copyright (c)Skate Company All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>

<?php
    session_start();
    //если рядовой пользователь не залогинился перекинет на осн. страницу
    if(!$_SESSION['user']) {
        header('Location: ../index.html');
    };
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>Skate.CO</title>
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
                <div class="logo"> <img class="logo_pic" src="src/logo.png" alt="Skate.CO"> </div>
                <nav class="menu"> 
                <a href="technical.php" class="menu_item">Новости</a>
                <a href="shop.php" class="menu_item">Магазин</a>
                <a href="technical.php" class="menu_item">Форум</a> </nav>
                <div class="profile">
                    <h4 class="greetings">Привет!  <?= $_SESSION['user']['login']?></h4>

                    <div class="logout_but"><a href="vendor/logout.php" class="logout"><img class="exit_img" src="src/logout.png"></a></div>
                </div>
            </div>
        </div>
    </header>
     <!--Intro-->
    <div class="intro">
        <div class="video">
            <video class="video_media" src="src/video/bg_video.mp4" autoplay loop muted></video>
        </div>
        <div class="intro_content">
            <div class="intro_container">
                <div class="intro_logo"><img class="displayed" src="src/head/logo1.png" alt="logo"></div>
                <h1 class="intro_title"> - <br><p class="intro_text"> Мы поможем скейтерам</p></h1> </div>
        </div>
    </div>
    <!--Новостная секция -->
    <div class="inner_sec">
        <div class="inner_content">
            <div class="inner_title"> Новости </div>
            <div class="news_area">
                <div class="owl-carousel owl-theme slide-one">
                    <div class="news_item">
                        <a href="technical.php">
                            <p class="label_area"> <span class="tag_label">Новости</span></p> <img src="src/inner_src_img/ollie.png" class="img_area" alt="Что-то">
                            <div class="title_area">
                                <p>How to ollie?</p>
                            </div>
                            <div class="desc_area">
                                <p>Мы можем вас научить этому!</p>
                            </div>
                            <div class="date">
                                <p>31.12.2020</p>
                            </div>
                        </a>
                    </div>
                    <div class="news_item">
                        <a href="technical.php">
                            <p class="label_area"> <span class="tag_label">Новости</span></p> <img src="src/inner_src_img/kickflip.jpg" class="img_area" alt="Что-то">
                            <div class="title_area">
                                <p>How to kickflip?</p>
                            </div>
                            <div class="desc_area">
                                <p>Мы можем вас научить этому!</p>
                            </div>
                            <div class="date">
                                <p>31.12.2020</p>
                            </div>
                        </a>
                    </div>
                    <div class="news_item">
                        <a href="technical.php">
                            <p class="label_area"> <span class="tag_label">Новости</span></p> <img src="src/inner_src_img/hellflip.jpg" class="img_area" alt="Что-то">
                            <div class="title_area">
                                <p>How to hillflip?</p>
                            </div>
                            <div class="desc_area">
                                <p>Мы можем вас научить этому!</p>
                            </div>
                            <div class="date">
                                <p>31.12.2020</p>
                            </div>
                        </a>
                    </div>
                    <div class="news_item">
                        <a href="technical.php">
                            <p class="label_area"> <span class="tag_label">Новости</span></p> <img src="src/inner_src_img/50-50.jpg" class="img_area" alt="Что-то">
                            <div class="title_area">
                                <p>How to 50-50?</p>
                            </div>
                            <div class="desc_area">
                                <p>Мы можем вас научить этому!</p>
                            </div>
                            <div class="date">
                                <p>31.12.2020</p>
                            </div>
                        </a>
                    </div>
                    <div class="news_item">
                        <a href="technical.php">
                            <p class="label_area"> <span class="tag_label">Новости</span></p> <img src="src/inner_src_img/ollie_1.png" class="img_area" alt="Что-то">
                            <div class="title_area">
                                <p>How to switch ollie?</p>
                            </div>
                            <div class="desc_area">
                                <p>Мы можем вас научить этому!</p>
                            </div>
                            <div class="date">
                                <p>31.12.2020</p>
                            </div>
                        </a>
                    </div>
                    <div class="news_item">
                        <a href="technical.php">
                            <p class="label_area"> <span class="tag_label">Новости</span></p> <img src="src/inner_src_img/treeflip.png" class="img_area" alt="Что-то">
                            <div class="title_area">
                                <p>How to 360-flip?</p>
                            </div>
                            <div class="desc_area">
                                <p>Мы можем вас научить этому!</p>
                            </div>
                            <div class="date">
                                <p>31.12.2020</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner -->
    <div class="banner">
        <div class="lessons"> <img class="les_pic" src="src/banner/Lessons/image.png" alt="Обучиение трюкам">
            <div class="lessons_title">
                <h4>Обучение катки на скейтборде!</h4>
                <p class="less_text">Узнайте как делать трюки
                    <br> благодаря нашим урокам!</p>
                <div class="n_b"> <a class="less_button" href="technical.php">Узнать</a> </div>
            </div>
        </div>
        <div class="shop_news mobile">
            <a href="technical.php">
                <div class="text_wrap">
                    <h4>Новинки от 25 ноября</h4>
                    <p class="shop_text">Узнайте о новинках
                        <br>и скидках на различные предметы!</p> <img class="shop_pic" src="src/banner/Shop/image.png" alt="Новинки в продаже"> </div>
            </a>
        </div>
    </div>
    <!-- обзор трюков с видео. -->
    <div class="trick_overview">
        <div class="owl-carousel slide-two">
            <div class="item">
                <div class="inner_trick">
                    <h3 class="title_trick">How to Ollie</h3>
                    <p class="trick_tip">Подсказка: <br>Вы можете свапать видео влево или вправо</p>
                </div>
                <video class="trick_video" src="src/trick_images/ollie.mov" autoplay loop controls></video>
            </div>
            <div class="item">
                <h3 class="title_tricks">How to 360-flip</h3>
                <video class="trick_video" src="src/trick_images/tree-flip.mov" autoplay loop controls></video>
            </div>
        </div>
    </div>
    <!--Мультимедия-->
    <div class="multimedia_wrap">
        <div class="multi_content">
            <div class="multi_title">Мультимедиа</div>
            <div class="multu_text">
                <p>Вы можете просмотреть и загрузить различные материалы:
                    <br> видео, влоги, «how to»-видео, которые стали доступны благодаря Scate.co</p>
            </div>
            <div class="multi_vid">
                <a href="src/video/multi_video.mp4"><img class="multi_img" src="src/multimedia/img.jpg" alt="Видео"></a>
                <img class="play_icon" src="src/play.png">
            </div>
        </div>
    </div>
    <!--footer-->
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
    <!--Кнопка скролла-->
</body>

</html>



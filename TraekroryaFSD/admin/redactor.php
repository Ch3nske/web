<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../src/favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/media.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редактировать товары.</title>
</head>
<body class="CRM">
<div class="adm_cont">
    <div class="pan_wrap">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <div class="menu__box">
                <li><a class="menu__item" href="admin.php">Главная</a></li>
                <li><a class="menu__item" href="report.php">Отчет покупки</a></li>
                <li><a class="menu__item" href="redactor.php">Редактор</a></li>
            </div>
        </div>
    </div>
    <!--Header -->
    <header class="adm_head">
        <div class="adm_wrap">
            <h1 class="adm_hd_tx">Редактирование базы данных</h1>
            <div class="profile_adm">
                <h4>Привет, админ!</h4>
                <div class="logout_adm">
                    <a href="../vendor/logout.php" class="logout"><img class="exit_img" src="../src/logout.png"></a>
                </div>
            </div>
        </div>
    </header>
    <div class="redactor">
        <div class="goods-out"></div>
        <div class="input_form"
            <div class="red_wrap">
                <div class="red_area">
                    <h3>Товар</h3>
                    <p>Имя: <input type="text" id="gname" placeholder="Название товара"></p>
                    <p>Стоймость: <input type="text" id="gcost" placeholder="Цена товара"></p>
                    <p>Описание: <textarea id="gdescr"></textarea placeholder="Описание товара"></p>
                    <p>Изоображение: <input type="text" id="gimg" placeholder="src/shop-image/"></p>
                    <p>Порядок: <input type="text" id="gorder" placeholder="Количество на Складе"></p>
                    <input type="hidden" id="gid">
                    <button class="add-to-db">Обновить</button>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/redactor.js"></script>
</body>
</html>

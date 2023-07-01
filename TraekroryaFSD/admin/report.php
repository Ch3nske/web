<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../src/favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/media.css" type="text/css">
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="js/report.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Отчеты по покупкам</title>
</head>
<body class="rep_body">
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
                <h1 class="adm_hd_tx">Заказы в ожидании</h1>
                <div class="profile_adm">
                   <h4>Привет, админ!</h4>
                    <div class="logout_adm">
                        <a href="../vendor/logout.php" class="logout"><img class="exit_img" src="../src/logout.png"></a>
                    </div>
                </div>
            </div>
        </header>
    
    <!--Основной контент-->
        <div class="main_ad_section">
               <div class="info_buy">
                   <div id="report_cart"></div>
               </div>
        </div>
    </div>
</body>
</html>
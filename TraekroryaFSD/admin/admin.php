<?php
    session_start();
    if(!$_SESSION['admin']){
        header('Location: index.html');
    };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../src/favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/media.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin on Skate.Co</title>
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
                <h1 class="adm_hd_tx">Главная</h1>
                <div class="profile_adm">
                   <h4>Привет, админ!</h4>
                    <div class="logout_adm">
                        <a href="../vendor/logout.php" class="logout"><img class="exit_img" src="../src/logout.png"></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="main_ad_section">
            <div class="statistic">
               <div class="stats">
                    <div class="stat">
                        <h1 class="title_stat">Количество покупателей онлайн</h1>
                        <div class="grafics">
                            <p class="graf_stat">2</p>
                        </div>
                    </div>
                    <div class="stat">
                        <h1 class="title_stat">Ожидают подтверждения</h1>
                        <div class="grafics">
                            <p class="graf_stat">4</p>
                        </div>
                    </div>
                    <div class="stat">
                        <h1 class="title_stat">В процессе доставки</h1>
                        <div class="grafics">
                            <p class="graf_stat">0</p>
                        </div>
                    </div>
                    <div class="stat">
                        <h1 class="title_stat">Доставлены, оплата получена</h1>
                        <div class="grafics">
                            <p class="graf_stat">15</p>
                        </div>
                    </div>
                </div>
                <div class="can_graf">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="can_graf">
                    <canvas id="stats_1"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/chart.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="js/admin.js"></script>
</body>

</html>
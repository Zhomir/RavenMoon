<?php
session_start();
if (!isset($_SESSION['user_id'])){
    header ("Location: autho.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/menuul.css">
    <link rel="stylesheet" href="css/area.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#ax1").click(function(){
                if($("#me1").css("display")=='none'){
                    $("#me1").slideDown(500);
                    $("#me2").slideUp(500);
                }
                else $("#me1").slideUp(500);
            });
        });

    </script>
    <title>Raven&Moon</title>
</head>
<body style='overflow-x:hidden;'>
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="navbar-collapsed" id="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="main.php">RAVEN&MOON</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapsed" id="" style="">
        <ul class="navbar-nav" style="">
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="main.php">ГЛАВНАЯ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="about.php">О НАС</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="info.php">КУРСЫ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="adminarea.php">СТЕНА</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id='ax1' data-value="about" href="#">ПРОФИЛЬ</a>
                <div class="menul" id="me1">
                    <a class="nav-link" href="autho.php">Сценарист</a>
                    <a class="nav-link" href="authop.php">Продюсер</a>
                    <a class="nav-link" href="authoa.php">Администратор</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="help.php">ПОМОЩЬ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="contacts.php">КОНТАКТЫ</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapsed" id="" style="">
        <ul class="navbar-nav" style="">
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="https://www.youtube.com/channel/UCloUR0ZmAF25M2UcQhPeiXw">Youtube</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="https://vk.com/club203435397">VK</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content">
    <?php
    include('config.php');
    include('unlog.php');
    $query = $connection->prepare("select * from `admin` where Id='".$_SESSION['user_id']."'");
    $query->execute();
    $rez = $query->fetch(PDO::FETCH_ASSOC);
    //var_dump($rez);
    echo('
                     <div class="box-profile" style="height: auto">
                                    <h1 class="namebar-center">Личный кабинет</h1>
                                    <h2 class="loginbar-center" style="margin-left: 45px">ФИО: ' . $rez["FIO"] . '</h2>
                                    <h2 class="loginbar-center" style="margin-left: 45px">Электронная почта: ' . $rez["Mail"] . '</h2>
                                    <h2 class="loginbar-center" style="margin-left: 45px">Логин: ' . $rez["Login"] . '</h2>
                                    <h2 class="loginbar-center" style="margin-left: 45px">Телефон: ' . $rez["Numberphone"] . '</h2>
                                    <h2 class="loginbar-center" style="margin-left: 45px">Спецификация: ' . $rez["Abilities"] . '</h2>
                                    <h1 class="namebar-center">Доступ к администрированию стены</h1>
                                    <a href="adminarea.php">
                                        <h2 class="zak-center" style="margin-left: 45px">Войти</h2>
                                    </a>
                                    <h1 class="namebar-center">Доступ к администрированию пользователей</h1>
                                    <a href="ausers.php">
                                        <h2 class="zak-center" style="margin-left: 45px">Войти</h2>
                                    </a>
                                    <a href="?exit">
                                        <h2 class="zak-center" style="margin-left: 45px">Выйти</h2>
                                    </a>
                                    
                                </div>
                                </div>

    ');
    ?>
</div>
</body>
</html>

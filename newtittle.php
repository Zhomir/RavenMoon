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
    <title>Raven&Moon</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menuul.css">
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
<form method="post" action="addtittle.php" name="signup-form">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="navbar-collapsed" id="">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="main.php">RAVEN&MOON</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapsed" id="">
            <ul class="navbar-nav mr-4">
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
                    <a class="nav-link" data-value="about" href="area.php">СТЕНА</a>
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
        <div class="navbar-collapsed" id="">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="https://www.youtube.com/channel/UCloUR0ZmAF25M2UcQhPeiXw">Youtube</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="https://vk.com/club203435397">VK</a>
                </li>
            </ul>

        </div>
    </nav>
    <form class="acontain">

    </div>
</form>
    <form action="addtittle.php" class="box-profile" method="post" enctype="multipart/form-data">
        <h1 class="namebar-center">Добавление записи</h1>
        <div class="field-content">
            <div class="area-box">
                <div class="areasearch">
                    <input type="file" id="areasearch" name="img" placeholder="Пожалуйста, введите название изображения">
                </div>
            </div>
            <div class="area-boxpassword">
                <div class="areasearch">
                    <input type="text" id="areasearch" name="atittle" placeholder="Введите заголовок записи">
                </div>
            </div>
            <div class="area-boxpassword">
                <div class="areasearch">
                    <input type="text" id="areasearch" name="atext" placeholder="Введите содержание записи">
                </div>
            </div>
            <div class="button">
                <button class="size" button type="submit" name="addtittle" value="addtittle">Создать</button>
            </div>
        </div>
    </form>
</body>

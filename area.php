<?php
include('config.php');
if (isset($_POST['query'])) {
    $text = $_POST['query'];
//    $search_result = search ($_POST['query']);
//    echo $search_result;
    $query = $connection->query("SELECT `atittle`, `atext`, `img`
                  FROM `newarea` WHERE `atext` LIKE '%$text%'
                  OR `atittle` LIKE '%$text%'");
    $rez = $query->fetchAll();
}else{
    $query = $connection->prepare("select * from `newarea`");
    $query->execute();
    $rez = $query->fetchAll(PDO::FETCH_ASSOC);
}
?>

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
    <link rel="stylesheet" href="css/area.css">
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
<nav class="navbar navbar-expand-lg fixed-top ">
    <div class="navbar-collapsed" id="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="main.php">RAVEN&MOON</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapsed" id="">
        <ul class="navbar-nav">
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
        <ul class="navbar-nav">
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
    <form name="search" method="post" action="">
        <div class="search-box">
            <div class="searchsteel2">
                <img class="icons" src="img/search.png">
                <input type="text" name="query" placeholder="Поиск по стене" style="width: 500px">
                <button type="submit">Найти</button>
            </div>
        </div>
    </form>
    <h1 style="font-size: 60px;color: #fff;">СТЕНА СЦЕНАРИСТОВ</h1>
    <div class="contentbox">
        <div class="holder">
            <a href="#">
                <?php
//                $query = $connection->prepare("select * from `newarea`");
//                $query->execute();
//                $rez = $query->fetchAll(PDO::FETCH_ASSOC);
                //var_dump($rez);
                foreach ($rez as $area){
                    echo('
                            <div class="block" style="margin-left: 5%">
                            <img src="img/'.$area["img"].'" alt="" width="70%" height="70%">
                            <p>'.$area["atittle"].'</p>
                            <p style="text - align: justify">
                                '.$area["atext"].'
                            </p>
                            </div>
                            ');
                }
                ?>

            </a>
        </div>
    </div>
</div>
</body>
</html>

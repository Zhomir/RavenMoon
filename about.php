<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
<div class="cdesc" style="margin-top: 75%;">
    <div class="aboutclass">
        <div class="aboutclass1">
            <img align="center" src="img/9afe0493484903.5e66500f8dea4.gif">
        </div>
        <div class="aboutclass2r" style="width: 500px">
            <h3>ДОБРО ПОЖАЛОВАТЬ В RAVEN&MOON</h3>
            <p style="font-size: 25px">
                Каждому творцу нужен свой ореол обитания. Этим местом могут быть социальные сети или просто комнате с
                ноутбуком, но достаточно ли этого?
            </p>
            <p style="font-size: 25px"> Но что если ему нужно место где он может услышать что-то новое для себя и сам
                быть услышанным?</p>
        </div>
    </div>
    <div class="aboutclass">
        <div class="aboutclass2l" style="margin-right: 15%">
            <h3>НАЧАЛО ПУТИ</h3>
            <p style="font-size: 25px">
                Именно для этого создавалась Raven&Moon, чтобы помочь становиться лучше и сделать лучшее. Мы обязуемся
                разбудить в вас то, что есть в каждом творческом человеке - страсть. Именно она двигает нас на нашем
                тернистом пути к творению.
            </p>
            <p style="font-size: 25px">
                Каждый в детстве любил слушать и возможно придумывать разнообразные истории. Истории о благородных
                рыцарях или гуляющем котенке.
                Raven&Moon постарается дать авторам историй место, которое принесет им только пользу и ничего другого.
                На тернистом пути
                создания творения может возникнуть множество проблем и мы надеемся, что станем их решением.
            </p>
        </div>
        <div class="aboutclass2r">
            <img align="center" src="img/dd867bbb49f0ff9badd417a44e830abe.gif">
        </div>
    </div>
    <div class="aboutclass">
        <div class="aboutclass1">
            <img align="center" src="img/075ade028580e551fc227649650c79d2.gif" style="width: 800px">
        </div>
        <div class="aboutclass2r">
            <h3>ОТКРОЙТЕСЬ</h3>
            <p style="font-size: 25px">
                Raven&Moon предлагает вам информацию по тому, как писать сценарий, чем стоит руководствоваться при
                написании и какие тонкости стоит учесть
            </p>
            <p style="font-size: 25px"> Также мы предлагаем авторам возможность разместить свой сценарий на нашей стене.
                Там вы сможете познакомить людей с вашей идеей и привлечь потенциального продюсера.</p>
        </div>
    </div>
</div>
</body>
</html
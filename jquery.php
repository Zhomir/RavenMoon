<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MagicBook</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("ax1").click(function(){
                if($("me1").css("display")=='none'){
                    $("#me1").slideDown(500);
                    $("#me2").slideUp(500);
            }
            else $("#me1").slideUp(500);
        });
        $("#ax2").click(function(){
            if($("#me2").css("display")=='none'){
                $("me2").slideDown(500);
                $("me1").slideUp(500);
            }
            else $("#me2").slideUp(500);
        });
    });
    </script>
</head>
<body>
<div class="header">
    <div class="login">
        <div class="box-login">
            <div class="box">
                <div class="upbar">
                    <div class="help">
                        <ul>
                            <li>
                                <a href="">
                                    <p><img class="png" src="img/contact.png" align="top">
                                        Контакты</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <p><img class="png" src="img/help.png" align="top">
                                        Помощь</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="loginbar">
                        <a href="profile.html">
                            <img class="icon" src="img/profile.png">
                            <p>Вход / Регистрация</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-box">
        <div class="contain">
            <div class="box">
                <div class="upbar">
                    <div class="logo">
                        <a href="index.html"><img src="img/logo.png" alt="" width="100%" height="100px"></a>
                    </div>
                    <div class="search-box">
                        <div class="search">
                            <img class="icons" src="img/search.png">
                            <input type="text" id="search" placeholder="Поиск по сайту">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu">
        <ul>
            <li><a href="catalog.html"><img class="icons" src="img/cataloge.png" alt="" align="top" id='ax1'>Каталог</a></li>
            <div id="menu" id='me1'>
                <li><a href="#">Меню1</a></li>
                <li><a href="#">Меню2</a></li>
                <li><a href="#">Меню3</a></li>
                <li><a href="#">Меню4</a></li>
            </div>
            <li><a href="prebuy.html"><img class="icons" src="img/prebuy.png" alt="" align="top">Предзаказ</a></li>
            <li><a href="magazines.html"><img class="icons" src="img/shop.png" alt="" align="top">Магазины</a></li>
            <li><a href=""><img class="icons" src="img/discount.png" alt="" align="top">Акции</a></li>
            <li><a href="news.html"><img class="icons" src="img/news.png" alt="" align="top" id='ax2'>Новости</a></li>
            <div id="menu" id='me2'>
                <li><a href="#">Меню1</a></li>
                <li><a href="#">Меню2</a></li>
                <li><a href="#">Меню3</a></li>
                <li><a href="#">Меню4</a></li>
            </div>
            <li><a href="buysector.html"> <img class="icons" src="img/buy.png" alt="" align="top">Корзина</a></li>
            
        </ul>
    </div>
    <div class="banner">
        <div class="wrapper">
            <input type="radio" name="point" id="slide1" checked>
            <input type="radio" name="point" id="slide2">
            <input type="radio" name="point" id="slide3">
            <div class="slider">
                <div class="slides slide1"></div>
                <div class="slides slide2"></div>
                <div class="slides slide3"></div>
            </div>
        </div>
    </div>
    <div class="content">
        <h1><a href="" style="color: black; text-decoration: none;">Популярное</a></h1>
        <div class="contentbox">
            <div class="holder">
                <a href="info1.html">
                    <div class="block">
                        <img  src="img/arthas.jpg" alt="" width="50%" height="80%">
                        <p>World of Warcraft: Артас. Восхождение Короля-лича</p>
                    </div>
                </a>

                <a href="info6.html">
                    <div class="block">
                        <img src="img/horde.jpg" alt="" width="95%" height="80%">
                        <p>World of Warcraft: Рождение Орды</p>
                    </div>
                </a>

                <a href="info3.html">
                    <div class="block">
                        <img src="img/batman.jpg" alt="" width="50%" height="80%">
                        <p>Бэтмен: Двор Сов</p>
                    </div>
                </a>

                <a href="info2.html">
                    <div class="block">
                        <img src="img/deathfam.jpg" alt="" width="95%" height="80%">
                        <p>Бэтмен: Смерть Семьи. Эндшпиль</p>
                    </div>
                </a>
            </div>
            <h1><a href="newbuy.html" style="color: black; text-decoration: none;">Новинки</a></h1>
            <div class="contentbox">
                <div class="holder">
                    <a href="info4.html">
                        <div class="block">
                            <img src="img/clockd.jpg" alt="" width="95%" height="80%">
                            <p>Часы Судного Дня. Книга 1</p>
                        </div>
                    </a>

                    <a href="info5.html">
                        <div class="block">
                            <img src="img/darkw.jpg" alt="" width="95%" height="80%">
                            <p>World of Warcraft: Темный Прилив</p>
                        </div>
                    </a>

                    <a href="info7.html">
                        <div class="block">
                            <img src="img/begins.jpg" alt="" width="95%" height="80%">
                            <p>Хранители. Начало: Комедиант. Роршах. Красный Корсар</p>
                        </div>
                    </a>

                    <a href="info3.html">
                        <div class="block">
                            <img src="img/batman.jpg" alt="" width="50%" height="80%">
                            <p>Бэтмен: Двор Сов</p>
                        </div>
                    </a>
                </div>
        </div>
    </div>
    
</body>
</html>
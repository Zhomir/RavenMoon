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
    <link rel="stylesheet" href="css/teditor.css">
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
    <script src="https://cdn.tiny.cloud/1/w6209qfn3h90200lo96a8nr9zr82jagqwv0vgy58mzresrf9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
        });
    </script><script src="https://cdn.tiny.cloud/1/w6209qfn3h90200lo96a8nr9zr82jagqwv0vgy58mzresrf9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
        });
    </script>
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
<div class="container mt-4 mb-4">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-8">
            <h1 class="h2 mb-4">Сценарный редактор</h1>
            <label>Начинайте создавать свой сценарий уже сейчас</label>
            <div class="form-group">
                <textarea id="editor"></textarea>
            </div>
            <button type="submit" onclick="saveTextAsFile()" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
</div>
<!--<div class="container mt-4 mb-4" style="padding-top: 5%">-->
<!--    <table>-->
<!--        <h1 class="h2 mb-4" style="color: black">Сценарный редактор</h1>-->
<!--        <tr>-->
<!--            <td colspan="3">-->
<!--                <textarea id="inputTextToSave" cols="80" rows="25"></textarea>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Название вашего файла:</td>-->
<!--            <td><input id="inputFileNameToSaveAs"></input></td>-->
<!--            <td><button onclick="saveTextAsFile()">Сохранить</button></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Обнаруженный файл:</td>-->
<!--            <td><input type="file" id="fileToLoad"></td>-->
<!--            <td><button onclick="loadFileAsText()">Загрузить файл</button><td>-->
<!--        </tr>-->
<!--    </table>-->

<script type="text/javascript">

    function saveTextAsFile()
    {
        var textToSave = document.querySelector("#editor_ifr").contentWindow.document.querySelector("#tinymce").textContent;
        var textToSaveAsBlob = new Blob([textToSave], {type:"application/msword"});
        var textToSaveAsURL = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(textToSave);
        console.log(textToSave)

        var downloadLink = document.createElement("a");
        downloadLink.download = "data.doc";
        downloadLink.innerHTML = "Download File";
        downloadLink.href = textToSaveAsURL;
        downloadLink.onclick = destroyClickedElement;
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);

        downloadLink.click();
    }

    function destroyClickedElement(event)
    {
        document.body.removeChild(event.target);
    }

    function loadFileAsText()
    {
        var fileToLoad = document.getElementById("fileToLoad").files[0];

        var fileReader = new FileReader();
        fileReader.onload = function(fileLoadedEvent)
        {
            var textFromFileLoaded = fileLoadedEvent.target.result;
            document.getElementById("inputTextToSave").value = textFromFileLoaded;
        };
        fileReader.readAsText(fileToLoad, "UTF-8");
    }

</script>
</div>
</body>
</html>
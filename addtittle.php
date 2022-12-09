<?php
session_start();
include('config.php');
if (isset($_POST['addtittle'])) {
    $img = @$_FILES['img'];
    $atittle = @$_POST['atittle'];
    $atext = @$_POST['atext'];
    $path = __DIR__.'/img/';

    $a = explode('.', $img['name']);
    $fileExt = end($a);

    $fileName = uniqid('image_') . "." . $fileExt;

        $query = $connection->prepare("INSERT INTO newarea(atext,atittle,img) VALUES (:atext, :atittle, :img)");
        $query->bindParam("img", $fileName, PDO::PARAM_STR);
        $query->bindParam("atittle", $atittle, PDO::PARAM_STR);
        $query->bindParam("atext", $atext, PDO::PARAM_STR);
        $result = $query->execute();

        $_POST["img"] = $fileName;
        move_uploaded_file($img['tmp_name'], $path.$fileName);
        if ($result) {
            echo '<p class="success">Запись добавлена успешно</p>';
            header ("Location: area.php");
        } else {
            echo '<p class="error">Неверные данные!</p>';
        }
    }
?>
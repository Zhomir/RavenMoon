<?php
session_start();
include('config.php');
if (isset($_POST['register'])) {
    $FIO = @$_POST['FIO'];
    $mail = @$_POST['mail'];
    $birthday = @$_POST['birthday'];
    $login = @$_POST['login'];
    $password = @$_POST['password'];
    $education = @$_POST['education'];
    $numberphone = @$_POST['numberphone'];
    $specification = @$_POST['specification'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT * FROM users WHERE mail=:mail");
    $query->bindParam("mail", $mail, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error">Этот адрес уже зарегистрирован!</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(FIO,Mail,Birthday,Login,Passw,EDUCATION,Numberphone,Specification) VALUES (:FIO,:mail,:birthday,:login, :password_hash,:education,:numberphone,:specification)");
        $query->bindParam("FIO", $FIO, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("mail", $mail, PDO::PARAM_STR);
        $query->bindParam("birthday", $birthday, PDO::PARAM_STR);
        $query->bindParam("login", $login, PDO::PARAM_STR);
        $query->bindParam("education", $education, PDO::PARAM_STR);
        $query->bindParam("numberphone", $numberphone, PDO::PARAM_STR);
        $query->bindParam("specification", $specification, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">Регистрация прошла успешно!</p>';
            header ("Location: autho.php");
        } else {
            echo '<p class="error">Неверные данные!</p>';
        }
    }
}
?>
<?php
session_start();
include('config.php');
if (isset($_POST['reformation'])) {
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
        echo '<p class="error">Этот адрес уже занят!</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("UPDATE users SET FIO = :FIO, Passw = :password_hash, Mail = :mail, Birthday = :birthday, Login = :login, EDUCATION = :education, Numberphone = :numberphone, Specification = :specification  where Id='" . $_SESSION['user_id'] . "'");
        //$query = $connection->prepare("UPDATE users SET FIO = :FIO where Id='" . $_SESSION['user_id'] . "'");
        $query->bindParam("FIO", $FIO);
        $query->bindParam("password_hash", $password_hash);
        $query->bindParam("mail", $mail);
        $query->bindParam("birthday", $birthday);
        $query->bindParam("login", $login);
        $query->bindParam("education", $education);
        $query->bindParam("numberphone", $numberphone);
        $query->bindParam("specification", $specification);
        var_dump($query);
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">Смена данных прошла успешно!</p>';
            header ("Location: profile.php");
        } else {
            echo '<p class="error">Неверные данные!</p>';
        }
    }
}
?>
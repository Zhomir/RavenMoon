<?php
session_start();
include('config.php');
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = $connection->prepare("SELECT * FROM userp WHERE login = :login");
    $query->bindParam("login", $login, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<p class="error">Неверный логин</p>';
    } else {
        var_dump($result);
        if (password_verify($password, $result['Passw'])) {
            $_SESSION['user_id'] = $result['Id'];
            header ("Location: producerprofile.php");
        } else {
            echo '<p class="error"> Неверный пароль</p>';
        }
    }
}
?>
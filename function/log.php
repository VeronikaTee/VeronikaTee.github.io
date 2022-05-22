<?php
$conect = mysqli_connect('localhost', 'root', '', 'praktika');
if (!$conect) {
    die('Ошибка');
}
session_start();


$pass = $_POST['pass_log'];
$pass = md5($pass);
$login = $_POST['login_log'];

$user = mysqli_query($conect, "SELECT COUNT(1) FROM `user` WHERE (`user`.`user_pass` LIKE \"$pass\" AND `user`.`user_login` LIKE \"$login\")");
$user = mysqli_fetch_array($user);

if ($user[0] == 1) {
    print_r("Вы авторизировались");
    $users = mysqli_query($conect, "SELECT * FROM `user` WHERE (`user`.`user_pass` LIKE \"$pass\" AND `user`.`user_login` LIKE \"$login\")");
    $users = mysqli_fetch_assoc($users);
    print_r($users['user_name']);
    $_SESSION['userlogin'] = $login;
    $_SESSION['username'] = $users['user_name'];
    $_SESSION['userphone'] = $users['user_phone'];
    $_SESSION['usermail'] = $users['user_mail'];
    $_SESSION['success'] = "You are now logged in";

    header('Location: /pages/lk.php');
} else{
    print_r("Нет такого пользователя");}

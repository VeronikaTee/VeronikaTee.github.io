<?php
$conect = mysqli_connect('localhost', 'root', '', 'praktika');
if (!$conect) {
    die('Ошибка');
}

$errors = array();
session_start();

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$pass = md5($pass);
$login = $_POST['login'];

if (empty($name)) {
    array_push($errors, "Поле имя пользователя обязательно к заполнению");
}

if (empty($mail)) {
    array_push($errors, "Поле email обязательно к заполнению");
}

if (empty($pass)) {
    array_push($errors, "Поле пароль пользователя обязательно к заполнению");
}

if (empty($login)) {
    array_push($errors, "Поле логин пользователя обязательно к заполнению");
}

if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo ('<p>' . $error . '</p>');
    }
} else {

    $user_check_query = mysqli_query($conect, "SELECT COUNT(1) FROM `user` WHERE (`user`.`user_login` LIKE \"$login\")");
    $user_check_query = mysqli_fetch_array($user_check_query);

    if ($user_check_query[0] == 1) {
        print_r("Пользователь с таким логином уже существует");
    } else {

        mysqli_query($conect, "INSERT INTO `user` (`user_id`, `user_name`, `user_phone`, `user_pass`, `user_login`, `user_mail`, `role_id`) VALUES (NULL, '$name', '$phone', '$pass', '$login', '$mail', '2')");
        $_SESSION['username'] = $name;
        $_SESSION['userlogin'] = $login;
        $_SESSION['userphone'] = $phone;
        $_SESSION['usermail'] = $mail;
        $_SESSION['success'] = "You are now logged in";

        header('Location: /pages/lk.php');
    }
}

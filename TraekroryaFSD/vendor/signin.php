<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

//Проверка авторизации пользователя.
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] =[
        "login" => $user['login']
    ];
    header('Location: ../Authorized.php');

} else {
    $_SESSION['message'] = 'Неверный логин или пароль!';
    header('Location: ../login.php');
};

//Проверка авторизации админа.
$check_admin = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = 'admin' AND `password` = '$password' ");
if(mysqli_num_rows($check_admin) > 0){
    $admin = mysqli_fetch_assoc($check_admin);
    $_SESSION['admin'] = [
        "login" => $admin['login']
    ];
    header('Location: ../admin/admin.php');
} else {
    $_SESSION['message'] = 'Неверный логин или пароль!';
    header('Location: ../login.php');
};
?>

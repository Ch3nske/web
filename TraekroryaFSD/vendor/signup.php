<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $password_confirm = $_POST['password_confirm'];

    if($password === $password_confirm){

        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `login`, `password`) VALUES (NULL, '$email', '$login', '$password')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../Authorized.php');

    }else{
        $_SESSION['message'] = 'Пароли не совпадают!';
        header('Location: ../register.php');
    }

?>


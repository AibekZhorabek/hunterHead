<?php
session_start();
require_once 'connect.php';

$fullName = $_POST['fullName'];
$login = $_POST['login'];
$email = $_POST['email'];
$password1 = $_POST['password'];
$password2 = $_POST['secondPassword'];
$avatar = $_FILES['avatar'];

if ($password1 === $password2) {
    if ($password1 === "") {
        $_SESSION['message'] = 'Введите пароль';
        header("Location: ../register.php");
    }
    $path = 'uploads/' .  time() . $_FILES['avatar']['name'];
    $from = $_FILES['avatar']['tmp_name'];//берем фотку с временного сервера 
    $to = '../' . $path; // и занесем его на нашу папку uploads через функцию move_uploaded_file();
    if (!move_uploaded_file($from, $to)) {
        $_SESSION['message'] = 'произошла ошибка, файл не загружен';
        header('Location: ../register.php');
    }
    $password = md5($password1);
    $sql = "INSERT INTO `users`(`full_name`, `login`, `email`, `password`, `avatar`) VALUES ('$fullName','$login','$email','$password','$path')";
    $query = mysqli_query($connect, $sql);
    if (!$query) {
        echo "sql query is not uploaded, some error occured";
    }
    else {
        echo "registration success";
        header('Location: ../index.php');
    }
    
}else if ($password1 != $password2) {
    $_SESSION['message'] = 'Пароли не совпадают попробуйте заново';
    header("Location: ../register.php");   
}
// header("Location: ../register.php");
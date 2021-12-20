<!-- 
    берем логин и пароль от формы 
    делаем запрос на базу данных, салыстырамыз, и отберем наш строку
    возвращаемая строки должны быть равны одному
    если ноль то юзер не найден!
    открываем сессию
    записываем на session наш юзер
    и переадрисуем на страницу profile
 -->

 <?php
require 'connect.php';
session_start();
var_dump($_POST);
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);
$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password`='$password'";
 
$query = mysqli_query($connect, $sql);
if (mysqli_num_rows($query) > 0) {
    $user = mysqli_fetch_assoc($query);
    echo '<pre>';
    print_r($user);
    echo '</pre>';
    $_SESSION['user'] = [
        'id' => $user['id'],
        'fullName' => $user['full_name'],
        'usertype' => $user['usertype'],
        'email' => $user['email'],
        'login' => $user['login'],
        'avatar' => $user['avatar'],
        'created_time' => $user['created_time']
    ];
    header("Location: ../../didYouPassTest.php");
    // header("Location: ../profile/profile.php");
}else {
    $_SESSION['message'] = 'Неправильный логин или пароль';
    header("Location: ../index.php");

}



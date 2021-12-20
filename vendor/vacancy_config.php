<?php 
session_start();
include '../authorization/vendor/connect.php';


$owner = $_SESSION['user']['fullName'];
$vacancy_name = $_POST['name'];
$salary = $_POST['salary'];
$company_name = $_POST['company_name'];
$address = $_POST['address'];
$req_skill = $_POST['req_skill'];
$description = $_POST['description'];
$requirements = $_POST['requirements'];
$sql = "INSERT INTO `vacancy`(`owner`, `name`, `salary`, `company_name`, `address`, `req_skill`, `description`, `requirements`)
    VALUES ('$owner','$vacancy_name','$salary','$company_name','$address','$req_skill','$description','$requirements')";
$query = mysqli_query($connect, $sql);
var_dump($query);
if (!$query) {
    echo 'query is not imported';
}else {
    header("Location: ../main.php");
}


// $sql = "INSERT INTO `vacancy`(`owner`, `name`, `salary`, `company_name`, `address`, `req_skill`, `description`, `requirements`) 
// VALUES ('$_SESSION["user"]["fullName"]','html css developer','300000','One Technology','Рядом с Медео','4','Разработаем полезные приложении, сайты, а также игры','Должен знать Ruby, Java')"
?>

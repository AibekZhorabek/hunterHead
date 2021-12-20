<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: authorization/index.php");
    }
    $id = $_POST['id'];
    require 'authorization/vendor/connect.php';
    $sql_select = "SELECT * FROM vacancy WHERE id='$id'";
    $query = mysqli_query($connect, $sql_select);
    $vacancy = mysqli_fetch_assoc($query);
    // var_dump($vacancy);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>Main page</title>
</head>
<body>
<header class="site-header">
  <div class="site-identity">
    <h1><a href="main.php">Main</a></h1>
  </div>  
  <nav class="site-navigation">
    <ul class="nav">
      <li><a href="#">About</a></li> 
      <li><a href="#">News</a></li>
      <li><a href="#"><?php echo strtoupper($_SESSION['user']['fullName']) ?></a></li> 
    </ul>
  </nav>
</header>

<div id="mainInfo">
  <p>Здравствуй <?php echo strtoupper($_SESSION['user']['fullName']) ?>, добро пожаловать на нашу вакансию</p>
  <h2><?= $vacancy['name']; ?></h2>
  <h5><?php 
      if ($vacancy['salary'] === '0') {
          echo 'Зарплата не указано';
      }else{
          echo $vacancy['salary'] . 'KZT на руки';
      }
  ?></h5>
  <a href="#">TOO <?= $vacancy['company_name'] ?></a>
  <address><?= $vacancy['address'] ?></address>
  <button>Откликнутся</button>
  <p class="requirementExperience"> Требуемый опыт работы: <b>
      <?php 
          if ($vacancy['req_skill'] == '0') {
              echo 'Опыт работы не требуется';
          }else {
              echo $vacancy['req_skill'] . 'года';
          }
      ?>
  </b></p>

  <p class="description">
  <small>Описание: </small> <br>    
      <?= $vacancy['description'] ?>
  </p>

  <small>Требование: </small>
  <pre class="requirements">
  <?= $vacancy['requirements'] ?>
  </pre>
</div>

<div class="container"></div>
<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="#"> <a href = "main.php">--back to Main</a></h2>
      <ul>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Careers</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Resources</h2>
      <ul>
        <li><a href="#">Docs</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">eBooks</a></li>
        <li><a href="#">Webinars</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Contact</h2>
      <ul>
        <li><a href="#">Help</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Advertise</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Stay Updated</h2>
      <p>Get free updates before others do!</p>
    </div>
  </section>

  <!-- Footer social -->
  <section class="ft-social">
    <ul class="ft-social-list">
      <li><a href="#"><i class="fab fa-facebook"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-github"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
  </section>

  <!-- Footer legal -->
  <section class="ft-legal">
    <ul class="ft-legal-list">
      <li><a href="#">Terms &amp; Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li>&copy; 2021 by Meow Media, LLC</li>
    </ul>
  </section>
</footer>
</body>
<style>
#mainInfo {
  border: 1px solid black;
  margin: 50px;
  padding : 40px;
}
#mainInfo > * {
  margin: 10px;
  margin-left : 10%;
  justify-content: center;
}
#mainInfo > a {
  margin-left : 10%;
}
#mainInfo > button {
  margin-left : 10%;
  background-color: green;
}
#mainInfo > h2 {
  color : red;
}
</style>
</html>
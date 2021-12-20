<?php 
session_start();

if (isset($_SESSION['user'])) {
  header("Location: profile/profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Document</title>
</head>
<body>
<header class="site-header">
  <div class="site-identity">
    <h1><a href="../../main.php">Main</a></h1>
  </div>  
  <nav class="site-navigation">
    <ul class="nav">
      <li><a href="#">About</a></li> 
      <li><a href="#">News</a></li> 
      <li><a href="#"><?php 
        if (isset($_SESSION['user'])) {
          echo strtoupper($_SESSION['user']['fullName']);
        }
      ?></a></li> 
    </ul>
  </nav>
</header>
<br>
<br>  
<div class="container">
<form action="vendor/signIn.php" method = "POST">
  <div class="form-group">
    <label for="login">Логин</label>
    <input type="login" name = "login" class="form-control" aria-describedby="emailHelp" placeholder="Введите логин">
  </div>
  <div class="form-group">
    <label for="password">Пароль</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Войти</button>
  <?php
    if (isset($_SESSION['message'])) {
        echo '<div class="msg"><p style="color:red">' . $_SESSION['message'] . '</p></div>';
        unset($_SESSION['message']);
    }
  ?>
  <p>
      У вас нет аккаунта ? - <a href="register.php">Зарегистрируйтесь</a>
  </p>
</form>
</div>

<div class="container"></div>
<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">About</h2>
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
</html>
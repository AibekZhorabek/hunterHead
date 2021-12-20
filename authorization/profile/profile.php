<?php
session_start();
if (!$_SESSION['user']) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/header.css">
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
      <li><a href="#"><?php echo strtoupper($_SESSION['user']['fullName']) ?></a></li> 
    </ul>
  </nav>
</header>

<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src=<?php echo '../' . $_SESSION['user']['avatar']; ?> height="100" width="100" /></button> 
            <span class="name mt-3"><?php echo $_SESSION['user']['fullName']?></span> <span class="idd"><?php echo $_SESSION['user']['email'] ?></span>
            <div class="text mt-3"> <span><?php echo "welcome " . $_SESSION['user']['usertype'] ?> <br><br>  </span> </div>
            <div><a href="https://www.gallup.com/cliftonstrengths/en/home.aspx">Вам сперва следует пройти Гэллап тест </a> если вы еще не прошли</div>
            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
            <div>Здесь вы можете посмотреть все вакансии зарегистрированные на нашем сайте, <a href="../../main.php">Вакансии</a></div>
            <!-- if user is admin here will be a link for creation a vacancy -->
            <div>Можете найти свою профессию здесь : <a href="../../professions.php">Профессии</a></div>
            <?php
                if ($_SESSION['user']['usertype'] === 'admin') { ?>
                    <form action="../../create_vacancy.php" method="post">
                        <input type="hidden" name="id" value=<?=$_SESSION['user']['id'] ?>>
                        <button type="submit"><a href="../../create_vacancy.php">Add a vacancy</a></button>
                    </form>
                <?php
                }
                ?>
                    
            <div class=" px-2 rounded mt-4 date "> <span class="join">You created your account at :  <?php echo  $_SESSION['user']['created_time'] ?></span> </div>
        </div>
        <a class="logOutLink" href="../vendor/logOut.php">Выйти</a>
    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

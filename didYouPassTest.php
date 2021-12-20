<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: authorization/register.php');
    }
    if ($_SESSION['user']['usertype'] === "admin") {
        header("Location: authorization/profile/profile.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>Вы уже прошли тест ? </title>
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
      <li><a href="#"><?php 
        if (isset($_SESSION['user'])) {
          echo strtoupper($_SESSION['user']['fullName']);
        }
      ?></a></li> 
    </ul>
  </nav>
</header>
<br><br>
    <div class="mainDiv">

        <h1 class="welcome">Приветствуем вас <?php echo $_SESSION['user']['fullName'] ?> , Тест Gallup Strengthsfinder</h1>
        <h2>О Gallup / Clifton Strengthsfinder</h2>
        <p>
            Это профессиональная методология определения талантов и выявления способностей.
            Именно на ней построена база знаний курса «Включай таланты!».
        </p>
        <br>
        <img src="img/images.jfif" alt="фото не загружен">
        <br><br>
        <p>
        Вы проходите тест, получаете иерархию своих талантов и работаете над принятием, развитием и применением их в деятельности.
        </p>
        <p>
        В результате – приходите к высокой степени профессиональной реализации. У вас получается обрести в деле уверенность, профессионализм, достойную оплату и благодарность.
        </p>
        <p>
        Тестирование Gallup в мире прошло уже более 30 млн человек. Оно считается самым надежным из всех известных инструментов по определению сильных сторон.
        </p>
    </div>
    <div class="mainDiv">
    <h1>Если вы еще не прошли тест, то вам следует <a href="https://www.gallup.com/cliftonstrengths/en/home.aspx"> перейти по этой ссылке</a></h1>
    <h1>Если уже прошли тест и знаете свои сильные стороны, то вам <a href="authorization/profile/profile.php"> сюда</a></h1>
    </div>
    <div class="mainDiv">
        <img src="img/gallupUniversity.jpg" class="photo2" alt="ошибка, фото не загружен">
    </div>
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


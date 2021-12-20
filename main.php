<?php 
session_start();
include 'authorization/vendor/connect.php';
if (!isset($_SESSION['user'])){
    header("Location: authorization/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Main page</title>
</head>
<body>
<header class="site-header">
  <div class="site-identity">
    <h1><a href="#">Main</a></h1>
  </div>  
  <nav class="site-navigation">
    <ul class="nav">
      <li><a href="#">About</a></li> 
      <li><a href="#">News</a></li>
      <li><a href="#"><?php echo strtoupper($_SESSION['user']['fullName']) ?></a></li> 
    </ul>
  </nav>
</header>
    <?php
    $sql = 'SELECT * FROM vacancy';
    $query = mysqli_query($connect, $sql);
    if (mysqli_num_rows($query)) {
        $vacancies = mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
    ?>
    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
          <?php 
          foreach ($vacancies as $vacancy) {
          ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <h3><?php echo $vacancy['name'] ?></h3><hr>
                  <p class="card-text"><?=$vacancy['description']; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <form action="vacancy.php" method="post">
                        <input type="hidden" name="id" value=<?=$vacancy['id'] ?>>
                        <button class="btn btn-danger" id=<?= $vacancy['id'] ?> name="btn-view">View</button>
                      </form>
                    </div>
                    <small class="text-muted">Created at: <?= $vacancy['created_time']; ?></small>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
    </div>

    <footer>
      <?php
        if ($_SESSION['user']['usertype'] === 'admin') {
          echo '<a href="create_vacancy.php"> <-- Создать вакансию</a><br>';
        }
        echo '<a href="authorization/profile/profile.php"> <--Моя страница</a>';
      ?>
    </footer>
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
<?php 
    session_start();
    if (!$_SESSION['user']) {
        header("Location: authorization/index.php");
    }
    include 'authorization/vendor/connect.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/create_vacancy.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Create a vacancy</title>
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
<form class="form-style-4" method="post" action="vendor/vacancy_config.php">
    <h2>PM PROJECT</h2>
    <label for="name">
    <span>Имя вакансии : </span><input type="text" name="name" required="true" />
    </label>
    <label for="salary">
    <span>Зарплата : </span><input type="number" name="salary" required="true" />
    </label>
    <label for="company name">
    <span>Имя компании</span><input type="text" name="company name" required="true" />
    </label>
    <label for="address">
    <span>Место положении</span><input type="text" name="address" required="true" />
    </label>
    <label for="req_skills">
    <span>Требуемый опыт работы : (в годах)</span><input type="number" name="req_skills" required="true" />
    </label>
    <label for="description">
    <span>Описание вакансии: </span><textarea name="description" onkeyup="adjust_textarea(this)" required="true"></textarea>
    </label>
    <label for="requirements">
    <span>Требование от сотрудника :</span><textarea name="requirements" onkeyup="adjust_textarea(this)" required="true"></textarea>
    </label>
    <label>
    <span> </span><input id="submit" type="submit" value="Добавить" />
    </label>
    <span><a href="authorization/profile/profile.php"><-- назад в Профиль</a></span>
</form>
<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
</body>
</html>
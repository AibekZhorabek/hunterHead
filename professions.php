
<?php

// include_once('parser/simple_html_dom.php'); 
// include_once('authorization/vendor/connect.php');
// function curl_get($url, $referer = 'http://www.google.com'){
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_HEADER, 0);
//     curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36');
//     curl_setopt($ch, CURLOPT_REFERER, $referer);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $data = curl_exec($ch);
//     curl_close($ch);
//     return $data;
// }
// //парсируем сайт чтобы брать данные о профессии
// $nPage = 0;
// $resultArray = [];
// while ($nPage <= 100) {
//     $getNav = '?s=';
//     $mainUrl = 'https://www.ucheba.ru/prof/search' . $getNav . $nPage;
//     $html = curl_get($mainUrl);
//     $dom = str_get_html($html);

//     // берем со ссылками чтобы потом было на что направить на нашем сайте
//     $links = $dom->find('.pl-img');
//     // здесь можно было и использовать preg_match функцию, но я решил по простому
//     // создал переменную, внутри который начальный домен сайта, чтобы потом конкатинировать с router
//     $url = 'https://www.ucheba.ru';
//     $arrayData = [];
//     foreach ($links as $link) {
//         $arrayData[] = [
//             'innerText' => $link->title,
//             'href' => $url . $link->href,
//         ];
//     }
//     $resultArray = array_merge($resultArray, $arrayData);

//     $nPage+=20;
// }
// // echo '<pre>';
// // var_dump($resultArray);
// // echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/professions.css">
    
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
    </ul>
  </nav>
</header>
<div>
<div><p>BTL-менеджер</p><p>ERP-программист</p><p>Event-менеджер</p><p>HTML-верстальщик</p><p>PR-специалист</p><p>SEO-специалист</p><p>Web-дизайнер</p><p>Авиадиспетчер</p><p>Авиаинженер</p><p>Автомеханик</p><p>Автослесарь</p><p>Агент по туризму</p><p>Агроном</p><p>Адвокат</p><p>Административный директор</p><p>Администратор гостиницы</p><p>Администратор ресторана</p><p>Администратор сайта</p><p>Актер</p><p>Актуарий</p><p>Аналитик</p><p>Аниматор</p><p>Антикризисный управляющий</p><p>Арт-директор</p><p>Архивариус</p><p>Архитектор</p><p>Архитектор-проектировщик</p><p>Астроном</p><p>Аудитор</p><p>Байер</p><p>Банкир</p><p>Банковский кассир-операционист</p><p>Бармен</p><p>Бизнес-аналитик</p><p>Бизнес-тренер</p><p>Биоинженер</p><p>Биолог</p><p>Биотехнолог</p><p>Блогер</p><p>Брейдер</p><p>Брокер</p><p>Бухгалтер</p><p>Веб-программист</p><p>Верстальщик</p><p>Ветеринар</p><p>Визажист</p><p>Винодел</p><p>Воспитатель детского сада</p><p>Востоковед</p><p>Врач</p><p>Врач скорой помощи</p><p>Врач-онколог</p><p>Генетик</p><p>Генный инженер</p><p>Геодезист</p><p>Геолог</p><p>Геофизик</p><p>Геоэколог</p><p>Гид</p><p>Гид-переводчик</p><p>Гинеколог</p><p>Главный бухгалтер</p><p>Главный инженер в строительстве</p><p>Главный редактор</p><p>Графический дизайнер</p><p>Гример</p><p>Грумер</p><p>Дегустатор</p><p>Диджей</p><p>Диетолог</p><p>Дизайнер</p><p>Дизайнер интерьера</p><p>Дизайнер рекламы</p><p>Дизайнер-модельер</p><p>Дипломат</p><p>Директор</p><p>Журналист</p><p>Звукооператор</p><p>Звукорежиссер</p><p>Зубной техник</p><p>Имиджмейкер</p><p>Инженер</p><p>Инженер по бурению</p><p>Инженер по оборудованию</p><p>Инженер по охране труда</p><p>Инженер по технике безопасности</p><p>Инженер по транспорту</p><p>Инженер по эксплуатации</p><p>Инженер по&nbsp;телекоммуникациям и&nbsp;связи</p><p>Инженер связи</p><p>Инженер-конструктор</p><p>Инженер-проектировщик</p><p>Инженер-сметчик</p><p>Инженер-строитель</p><p>Инженер-технолог по качеству</p><p>Инженер-эколог</p><p>Инженер-электрик</p><p>Инженер-энергетик</p><p>Инструктор по вождению</p><p>Интервьюер</p><p>Искусствовед</p><p>Картограф</p><p>Киновед</p><p>Кинолог</p><p>Кинооператор</p><p>Клипмейкер</p><p>Кондитер</p><p>Консультант по туризму</p><p>Контент-менеджер</p><p>Копирайтер</p><p>Корректор</p><p>Косметолог</p><p>Коуч</p><p>Криминалист</p><p>Критик</p><p>Культуролог</p><p>Ландшафтный дизайнер</p><p>Лингвист</p><p>Лоббист (GR-специалист)</p><p>Логист</p></div>
</div>
<a href="authorization/profile/profile.php"><-- назад в профиль</a>
<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <a href="authorization/profile/profile.php">Back to profile</a>
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




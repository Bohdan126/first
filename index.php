<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Мій php сайт</title>
  <link href="/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
  <header>
    <div id="logo">
      <a href="/" title="Перейти на головну"><span>Н</span>овини</a>
    </div>
    <div id="menuHead">
      <a href="/about.php">
          <div style="margin-right: 5%">Про нас</div>
      </a>
      <a href="/feedback.php">
          <div>Зворотній зв'язок</div>
      </a>
    </div>
    <div id="regAuth">
      <a href="/reg.php">Регістрація</a>  |  <a href="auth.php">Авторизація</a>
    </div>
  </header>

  <div id="wrapper">
      <div id="leftCol">

      </div>
      <div id="rightCol">
        <div class="banner">
            <img src="/img/banner_1.jpg" alt="Баннер 1" title="Баннер 1">
        </div>
        <div class="banner">
            <img src="/img/banner_2.jpg" alt="Баннер 2" title="Баннер 2">
        </div>
      </div>
  </div>

  <footer>
    <div id="social">
        <a href="https://www.facebook.com/profile.php?id=100017334785880" title="Профіль в Facebook" target="_blank">
           <img src="/img/facebook.png" alt="Facebook" title="Facebook">
        </a>
        <a href="https://www.linkedin.com/in/bohdan-mykhalchuk-81bb00158" title="Профіль в Linkedin" target="_blank">
            <img src="/img/linkedin.png" alt="Linkedin" title="Linkedin">
        </a>
        <a href="https://twitter.com/b_mykhalchuk" title="Профіль в Twitter" target="_blank">
            <img src="/img/twitter.png" alt="Twitter" title="Twitter">
        </a>
    </div>
    <div id="rights">
        Всі права захищені &copy; <?=date('Y')?><br>
        Made by <div id="author">Rollins</div>
    </div>
  </footer>
</body>
</html>
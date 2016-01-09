<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active">
      <img src="/images/background1.jpg" alt="...">
      <div class="carousel-caption">
        <h1>Limea.ru</h1>
        <p>самый простой способ проффессионально настроить рекламную кампанию.</p>
        <?
        // Проверяем, пусты ли переменные логина и id пользователя
        if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
        // Если пусты, то мы не выводим ссылку
        echo "Вы вошли на сайт, как гость" ?>
          <p><a class="btn btn-lg btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal2">Регистрация</a></p>


          <?

        }
        else {
        // Если не пусты, то мы выводим ссылку
        echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
        ?>

          <br><br>
          <a    href='/page'>Моя страница</a>|<a    href='/'>Главная страница</a>|<a    href='/all_user'>Список пользователей</a>|<a    href='/exit'>Выход</a><br><br>

          <?

        }


        ?>
      </div>
    </div>
<!--
    <div class="item ">
      <img src="/images/img2.png" alt="...">
      <div class="carousel-caption">
        <h1>Добро пожаловать!</h1>
        <p>Note: If you're viewing this page via a URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
      </div>
    </div>
    <div class="item ">
      <img src="/images/img2.png" alt="...">
      <div class="carousel-caption">
        <h1>Добро пожаловать!</h1>
        <p>Note: If you're viewing this page via a URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>

        <div class="btn-group contaner-btn-send-keywords">
          <button type="button" class="btn btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal1">Войти</button>
          <button type="button" class="btn btn btn-lg btn-default" data-toggle="modal" data-target="#myModal2">Регистрация</button>
        </div>
      </div>
    </div>
  -->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
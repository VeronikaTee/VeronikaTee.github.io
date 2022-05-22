<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$title = "Личный кабинет";
include_once "$root/modules/header.php";
$name = $_SESSION[$name];
?>


<br>
<h4><a href="/pages/orders.php">Мои заказы</a></h4><br>

<div class="aut">
<div class="reg">
  <h3>Регистация</h3>
  <form action="/function/reg.php" method="post" required class="needs-validation" novalidate>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">@</span>
      <input name="name" type="text" id="validationTooltip01" class="form-control" placeholder="Имя" aria-label="Username" aria-describedby="basic-addon1">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>

    <div class="input-group mb-3">
      <input name="mail" type="text" class="form-control" placeholder="Почта" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>

    <label for="basic-url" class="form-label">Телефон</label>
    <div class="input-group mb-3">
      <input name="phone" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
      <input name="login" type="text" class="form-control" placeholder="Логин" aria-label="Username">
      <span class="input-group-text">/</span>
      <input name="pass" type="text" class="form-control" placeholder="Пароль" aria-label="Server">
    </div>
    <button type="submit" class="btn btn-info">Зарегистрироваться</button>
  </form>
</div>

<div class="log">
  <h3>Войти</h3>
  <form action="/function/log.php" method="post">
    <div class="input-group mb-3">
      <input name="login_log" type="text" class="form-control" placeholder="Логин" aria-label="Username">
      <span class="input-group-text">/</span>
      <input name="pass_log" type="text" class="form-control" placeholder="Пароль" aria-label="Server">
    </div>
    <button type="submit" class="btn btn-info">Войти</button>
  </form>
</div>
</div>

<div class="inner">
<div class="lk" style="display: flex; flex-direction: row;">
        <a class="nav-link butt_lk" href="/pages/lk.php"><button type="button" class="btn btn-outline-light">Личный кабинет</button></a>
        <a class="nav-link  butt_lk" href="/pages/lk.php"><button type="button" class="btn btn-outline-light"><?= $_SESSION['username']?></button></a>
        <img src="/img/cart.png" alt="cart" class="cart_open" height="35px" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer; padding-top: 11px; padding-right: 10px;">
      </div>
     
           <div class="lk" style="display: flex; flex-direction: row;">
        <a class="nav-link butt_lk" href="/pages/lk.php"><button type="button" class="btn btn-outline-light">Личный кабинет</button></a>
        <a class="nav-link  butt_lk" href="/pages/lk.php"><button type="button" class="btn btn-outline-light"><?= $_SESSION['username']?></button></a>
        <img src="/img/cart.png" alt="cart" class="cart_open" height="35px" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer; padding-top: 11px; padding-right: 10px;">
      </div>
      <div class="lk" style="display: flex; flex-direction: row;">
        <a class="nav-link butt_lk" href="/pages/lk.php"><button type="button" class="btn btn-outline-light">Личный кабинет</button></a>
        <a class="nav-link  butt_lk" href="/pages/lk.php"><button type="button" class="btn btn-outline-light"><?= $_SESSION['username']?></button></a>
        <img src="/img/cart.png" alt="cart" class="cart_open" height="35px" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer; padding-top: 11px; padding-right: 10px;">
      </div>
<?= $_SESSION['username']?></p>
  <p>Логин: <?= $_SESSION['userlogin']?></p>
  <p>Телефон: <?= $_SESSION['userphone']?></p>
  <p>Почта: <?= $_SESSION['usermail']?></p>
<form action="/function/outner.php"><button type="submit" class="btn btn-outline-danger">Выйти</button></form>
</div>
<?php
include_once "$root/modules/footer.php"
?>
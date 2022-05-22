<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/style.css">
  <script defer src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script defer src="/js/script.js"></script>
  <?php
  session_start();
  $conect = mysqli_connect('localhost', 'root', '', 'praktika') or die("Ошибка" . mysqli_error($conect));
  $id_product = $_GET['id_product'];
  $carts = mysqli_query($conect, "SELECT * FROM `goods` WHERE `goods_id` = '$id_product'");
  $carts = mysqli_fetch_assoc($carts);

  if ($_SESSION['username'] == "") {
    $display = "block";
    $display2 =  "none";
  } else {
    $display =  "none";
    $display2 = "block";
  }
  ?>
  <style>
    .aut {
      display: <?= $display ?>;
    }

    .inner {
      display: <?= $display2 ?>;
    }

    .butt_lk {
      display: <?= $display ?>;
    }

    .butt_user {
      display: <?= $display2 ?>;
    }
  </style>
</head>

<body>
  <!-- Header -->

  <header>

    <!-- Навигация -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav nav nav-tabs">
          <a class="nav-link" href="/index.php">Главная</a>
          <a class="nav-link" href="/pages/catalog.php">Каталог</a>
          <a class="nav-link" href="/pages/contacts.php">Контакты</a>
        </div>
      </div>
      <div class="lk" style="display: flex; flex-direction: row;">
        <a class="nav-link butt_lk" href="/pages/lk.php"><button type="button" class="btn btn-outline-light">Личный кабинет</button></a>
        <a class="nav-link  butt_user" href="/pages/lk.php"><button type="button" class="btn btn-outline-light"><?= $_SESSION['username'] ?></button></a>
        <img src="/img/cart.png" alt="cart" class="cart_open" height="35px" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer; padding-top: 11px; padding-right: 10px;">
      </div>

    </nav>
  </header>

  <!-- Cart -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <td>Img</td>
                <td>Desk</td>
                <td>Price</td>
                <td>Quant</td>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach ($_SESSION as $carts_item){
                echo ('
                 <tr>
                <td>'.$_SESSION['productname'].'</td>
                <th><img src="'.$_SESSION['productimg'].'" height="150px"/></th>
                <td>'.$_SESSION['productdesk'].'</td>
                <td>'.$_SESSION['productprice'].'</td>
                <td>'. $_SESSION['productqual'].'</td>
              </tr>
                ');
              }
              
              ?>
             
            </tbody>
            <tfoot>

            </tfoot>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <main>
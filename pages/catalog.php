<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$title = "Каталог";
include_once "$root/modules/header.php";

$conect = mysqli_connect('localhost', 'root', '', 'praktika') or die("Ошибка" . mysqli_error($conect));
$goods = mysqli_query($conect, "SELECT * FROM `goods`");
$goods = mysqli_fetch_all($goods);
?>

<br><h3>Каталог</h3>

<!-- Фильтры -->


<ul class="nav justify-content-center nav_catalog">
    <li class="nav-item">
        <a class="nav-link" href="#">Электронные</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">На ремне</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">На цепи</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Карманные</a>
    </li>
</ul>


<div class="catalog">

    <!-- Карточка -->


    <?php

    include "$root/modules/card.php ";

    ?>


</div>

<form action="/function/outner.php"><button type="submit" class="btn btn-outline-danger">Выйти</button></form>



<?php
include_once "$root/modules/footer.php"
?>
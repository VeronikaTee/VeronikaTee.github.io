<?php
session_start();
$conect = mysqli_connect('localhost', 'root', '', 'praktika');
if (!$conect) {
    die('Ошибка');
};
$id_product = $_GET['id_product'];
$products = mysqli_query($conect, "SELECT * FROM `goods` WHERE `goods_id` = '$id_product'");
$products = mysqli_fetch_assoc($products);
$cart = mysqli_query($conect, "SELECT * FROM `cart`");
$cart = mysqli_fetch_all($cart);
// print_r($cart);
// print_r($products);

session_start();

$name = $products['goods_name'];
print_r($name);
$desk = $products['goods_desk'];
print_r($desk);
$img = $products['goods_img'];
print_r($img);
$price = $products['goods_price'];
print_r($price);
$qual = 1;

$cart_check_query = mysqli_query($conect, "SELECT COUNT(1) FROM `cart` WHERE (`cart`.`name_cart` LIKE \"$name\")");
$cart_check_query = mysqli_fetch_array($cart_check_query);

// foreach ();

if ($cart_check_query[0] == 1) {
    $qual = $qual + 1;
    print_r("все плохо");
} else {
    mysqli_query($conect, "INSERT INTO `cart` (`cart_id`, `name_cart`, `img_cart`, `desk_cart`, `price_cart`) VALUES (NULL, '$name', '$img', '$desk', '$price')");
    $_SESSION['products'] = $qual;
    $_SESSION['productname'] = $name;
    $_SESSION['productdesk'] = $desk;
    $_SESSION['productimg'] = $img;
    $_SESSION['productprice'] = $price;
    $_SESSION['productqual'] = $qual;
    // print_r($_SESSION['productname']);
    // print_r($_SESSION['productqual']);
    // print_r($_SESSION['productimg']);
    // print_r($_SESSION['productprice']);
    // print_r($_SESSION['productdesk']);

    // header('Location: /pages/catalog.php');
};

?>


<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$title = "Товар";
include_once "$root/modules/header.php";
$conect = mysqli_connect('localhost', 'root', '', 'praktika') or die("Ошибка" . mysqli_error($conect));
$id = $_GET['id'];
$goods = mysqli_query($conect, "SELECT * FROM `goods` WHERE `goods_id`='$id'");
$goods = mysqli_fetch_assoc($goods);
$category_id = $goods['category_id'];
$category =  mysqli_query($conect, "SELECT * FROM `category` WHERE `category_id`='$category_id'");
$category = mysqli_fetch_assoc($category);
?>
<!-- Товар -->

<div class="cart">
    <div class="goods_img">
        <img src="<?= $goods['goods_img'] ?>" alt="watch">
    </div>
    <div class="desk">
        <div class="name">
        <?= $goods['goods_name'] ?>
        </div>
        <div class="ds">Описание</div>
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th scope="row">Категория</th>
                    <td><?= $category['category_name'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Стоимость</th>
                    <td><?= $goods['goods_price'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Осталось</th>
                    <td><?= $goods['goods_qunt'] ?></td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-dark">Заказать</button>
    </div>
</div>
</div>

<!-- Описание -->

<div class="name">
    Описание
</div>
<p class="p_desk">
<?= $goods['goods_desk'] ?>
</p>

<?php
include_once "$root/modules/footer.php"
?>
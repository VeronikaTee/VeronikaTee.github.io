<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$title = "Name";
include_once "$root/modules/header.php"
?>

<div class="content">

    <!-- Слайдер -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slide_img">
                    <img src="/img/1.jpg" class="d-block w-100" alt="slide" height="400px" width="auto">
                </div>
            </div>
            <div class="carousel-item">
                <div class="slide_img">
                    <img src="/img/2.png" class="d-block w-100" alt="slide" height="400px" width="auto">
                </div>
            </div>
            <div class="carousel-item">
                <div class="slide_img">
                    <img src="/img/3.jpg" class="d-block w-100" alt="slide" height="400px" width="auto">
                </div>
            </div>
            <div class="carousel-item">
                <div class="slide_img">
                    <img src="/img/4.jpg" class="d-block w-100" alt="slide" height="400px" width="auto">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<h3>О нас</h3>
<div class="about"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maxime assumenda dignissimos nihil saepe debitis illum, cumque quo atque placeat facilis ut. Omnis expedita minima veniam laboriosam eaque a ducimus!
    Culpa velit non harum quidem eligendi ad odio quos aspernatur, ratione repudiandae aliquam fugiat tempore recusandae! Doloribus quo voluptate dolor nemo iste, saepe vel enim, inventore dignissimos, perspiciatis ea magnam?
    Fuga, dolorem quia. Adipisci fuga sunt veniam omnis repellat in, consectetur dicta rem, nemo minima id! Veniam nobis quis delectus aspernatur quo, ab aperiam iusto cupiditate provident repellat, nihil ducimus?
    Beatae itaque harum dolores eveniet eum repellendus inventore amet perferendis magni. Voluptatibus similique modi fugiat esse provident facilis tempore earum porro incidunt, repellendus unde doloremque reprehenderit, obcaecati laudantium cum corrupti.</div>

<?php
include_once "$root/modules/footer.php"
?>
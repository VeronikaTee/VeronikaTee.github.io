<?php



foreach ($goods as $el) {
    echo ('
        <div class="card" style="width: 18rem;">
        <div class="img_good"><img height="200px" src="' . $el[5] . '" alt="good"></div>
        <div class="card-body">
            <h5 class="card-title">' . $el[1] . '</h5>
            <p class="card-text">' . $el[3] . '</p>
            <div><p>Стоимость: ' . $el[2] . '</p><p>Осталось: ' . $el[4] . '</p></div>
            <a class="btn btn-success" href="/pages/good.php?id= '. $el[0] . '">Подробнее</a>
            <a class="btn btn-outline-success" href="/function/cart.php?id_product= '. $el[0] . '">В корзину</a>
        </div>
    </div>
        ');
};

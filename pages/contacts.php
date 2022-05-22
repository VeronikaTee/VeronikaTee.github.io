<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$title = "Контакты";
include_once "$root/modules/header.php"
?>


<!-- Контакты -->

<h4>Связаться с нами</h4>
<div class="contacts">
    <div class="contact">
        <div class="img"></div>
        <h5>Name</h6>
            <p><i>Должность</i></p>
            <button type="button" class="btn btn-danger btn-lg btn-block">Связаться по @mail</button>
    </div>
    <div class="contact">
        <div class="img"></div>
        <h5>Name</h6>
            <p><i>Должность</i></p>
            <button type="button" class="btn btn-danger btn-lg btn-block">Связаться по @mail</button>
    </div>
    <div class="contact">
        <div class="img"></div>
        <h5>Name</h6>
            <p><i>Должность</i></p>
            <button type="button" class="btn btn-danger btn-lg btn-block">Связаться по @mail</button>
    </div>
</div>

<!-- Карта -->

<div class="map">
    <iframe id="inlineFrameExample" title="Inline Frame Example" width="1100" height="500" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&layer=mapnik">
    </iframe>
</div>

<?php
include_once "$root/modules/footer.php"
?>
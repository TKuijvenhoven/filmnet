<!DOCTYPE html>
<html>
    <?php
    include_once('defaults/head.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/banner.php');
    if(!empty($message)): ?>
        <div class="alert alert-success" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
    <body>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/side101.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">CONTACT US</h5>
                        <p class="card-text">
                            Tinwerf 16, 2544 ED Den Haag
                            <br>
                            info@filmnet.com
                            <br>
                            +31 71 755 8228
                            <br>
                            +31 71 311 2921
                    </div>
                </div>
                <div class="col-md">
                    <br>
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2453.9641434060536!2d4.247177815842578!3d52.043965979726835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b171dc29bb33%3A0x4b8945005086f903!2sROC%20Mondriaan%20Tinwerf!5e0!3m2!1sen!2snl!4v1674419494929!5m2!1sen!2snl" width="350" height="200" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                        </div>
                </div>
            </div>
        </div>
        <?php include_once ('defaults/footer.php'); ?>
    </body>
</html>

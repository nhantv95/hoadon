<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Công Ty Nước Hà Đông</title>
    <?php $this->head() ?>
	<?= Html::csrfMetaTags() ?>
	<script src="jquery/jquery-1.8.2.min.js"></script>
	<script src="js/highcharts.js"></script><!-- JS Global Compulsory -->
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body class="header-fixed header-fixed-space">
<?php $this->beginBody() ?>

<div class="wrapper page-option-v1">
    <?php
		 echo $this->render('header'); 
    ?>

    <div class="container content">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <?php
		 echo $this->render('footer'); 
    ?>
</footer>
 <script>
    $(function () {
        $('#password').password().on('show.bs.password', function (e) {
            $('#methods').prop('checked', true);
        }).on('hide.bs.password', function (e) {
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function () {
            $('#password').password('toggle');
        });
    });
    </script>
    <script type="text/javascript">
        
        //$('.dropdown-menu').find('form').click(function (e) {
        //    e.stopPropagation();
        //});

        jQuery(document).ready(function () {
            App.init();
            App.initParallaxBg();
            FancyBox.initFancybox();
            OwlCarousel.initOwlCarousel();
            RevolutionSlider.initRSfullWidth();

            var $grower = jQuery('.skill_one');
            setInterval(function () {
                $grower.delay(200).animate({
                    width: "100%",
                }, 1200, function () {
                    $grower.removeAttr("style");
                });
            }, 1800);

            //jQuery('.dropdown.keep-open').on({
            //    "shown.bs.dropdown": function () { this.closable = false; },
            //    "click": function () { this.closable = true;},
            //    "hide.bs.dropdown": function () { return this.closable; }
            //});
        });
    </script>
    <!--[if lt IE 9]>
        <script src="assets/plugins/respond.js"></script>
        <script src="assets/plugins/html5shiv.js"></script>
        <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->
   
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

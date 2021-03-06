<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<div id = "toTop" > <span class="glyphicon glyphicon-circle-arrow-up"></span> </div>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' =>  Html::img('@web/images/logo.png', ['alt'=>Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top'
        ],
    ]);


//(function(){$("html, body").animate({scrollTop: document.location.href=document.location.href + "#metka-1"}, 1500)})();
//             ("html, body").animate({scrollTop: "#yak"}, 1000);
//document.location.href=document.location.href + '#metka-1'  



    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Услуги', 'url' => false, 'options' => ['onclick' => '(function(){$("html, body").animate({scrollTop: $("#uslugi").offset().top}, 800)})();'],],
            ['label' => 'Портфолио', 'url' => false, 'options' => ['onclick' => '(function(){$("html, body").animate({scrollTop: $("#portfolio").offset().top}, 800)})();'],],
            ['label' => 'Достоинства', 'url' => false, 'options' => ['onclick' => '(function(){$("html, body").animate({scrollTop: $("#dostoinstva").offset().top}, 800)})();'],],
            ['label' => 'Контакты', 'url' => false, 'options' => ['onclick' => '(function(){$("html, body").animate({scrollTop: $("#kontakty").offset().top}, 800)})();'],],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; INITIUM <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script>
    $(function() {

        $(window).scroll(function() {

            if($(this).scrollTop() != 0) {

                $('#toTop').fadeIn();

            } else {

                $('#toTop').fadeOut();

            }

        });

        $('#toTop').click(function() {

            $('body,html').animate({scrollTop:0},800);

        });
    });
</script>
<script>
    ['label' => 'Главная', 'url' => false, 'options' => [ 'onclick' => '(function(){$("html, body").animate({scrollTop: "2920px"}, 1500) })();'],],
</script>

<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use app\widgets\BottomAboutWidget;
use app\widgets\BottomMenuWidget;
use app\widgets\LogoWidget;
use app\widgets\BottomContactWidget;
use app\widgets\NavWidget;
use app\widgets\SliderMainWidget;
use http\Url;
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
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?=$this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?=$this->head() ?>
</head>
<body class="<?=(Yii::$app->controller->getRoute() == 'site/index'?:'single-page')?>">
<?=$this->beginBody();?>
<header class="site-header">
    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <?=LogoWidget::widget();?>
                    <?=NavWidget::widget()?>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->
    <?if(Yii::$app->controller->getRoute() == 'site/index'):?>
        <?=SliderMainWidget::widget();?>
    <?else:?>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'homeLink' => [
                'label' => 'Главная ',
                'url' => Yii::$app->homeUrl,
            ],
            'itemTemplate' => "<li> {link}/ </li>\n"
         ]) ?>
    <?endif;?>
</header>

<?= Alert::widget() ?>
<?= $content ?>
<div class="subscribe-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <h2>Подпишись на наши новости</h2>
                <form id="subscribe_bunner" >
                    <input type="email" placeholder="E-mail address">
                    <input class="button gradient-bg" type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <?=BottomAboutWidget::widget()?>
                <?=BottomContactWidget::widget();?>
                <?=BottomMenuWidget::widget();?>

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-widgets -->
</footer><!-- .site-footer -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
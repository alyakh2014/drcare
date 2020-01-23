<?
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="site-branding d-flex align-items-center">
    <a class="d-block" href="<?=Url::home();?>" rel="home">
        <?=Html::img('@web/images/logo.png', ['alt'=>'Главная страница', 'class'=>'d-block'])?>
    </a>
</div>

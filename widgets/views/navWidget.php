<?
use yii\helpers\Html;
use yii\helpers\Url;
?>

<nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
        <li class="current-menu-item"><a href="<?=Url::home()?>">Главная</a></li>
        <li><a href="<?=Url::toRoute('site/about')?>">О нас</a></li>
        <li><a href="<?=Url::toRoute('site/services')?>">Услуги</a></li>
        <li><a href="<?=Url::toRoute('site/news')?>">Новости</a></li>
        <li><a href="<?=Url::toRoute('site/contacts')?>">Контакты</a></li>

        <li class="call-btn button gradient-bg mt-3 mt-md-0">
            <a class="d-flex justify-content-center align-items-center" href="#"><?=Html::img('@web/images/emergency-call.png')?> +7(999)888-77-66</a>
        </li>
    </ul>
</nav>

<div class="hamburger-menu d-lg-none">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

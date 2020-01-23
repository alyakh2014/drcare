<?
use yii\helpers\Url;
?>

<div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
    <div class="foot-links">
        <h2>Полезные ссылки</h2>

        <ul class="p-0 m-0">
            <li><a href="<?=Url::toRoute('site/home')?>">Главная</a></li>
            <li><a href="<?=Url::toRoute('site/about')?>">О нас</a></li>
            <li><a href="<?=Url::toRoute('site/departments')?>">Отделения</a></li>
            <li><a href="<?=Url::toRoute('site/contacts')?>">Контакты</a></li>
            <li><a href="<?=Url::toRoute('site/faq')?>">FAQ</a></li>
        </ul>
    </div><!-- .foot-links -->
</div><!-- .col -->
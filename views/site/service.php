<?php

use yii\helpers\Html;

?>
<h4><?=$model->name?></h4>
    <div class="services-list__item-img-category">(<?=$model->services_category->name?>)</div>
    <?=Html::img('@web/images/doctors.png', ['class'=>'services-list__item-img'])?>
    <div>Цена: <?=Html::img('@web/images/smile.png', ['class'=>'services-list__item-img-price'])?> X <?=$model->price?></div>


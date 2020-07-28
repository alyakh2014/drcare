<?php

use yii\helpers\Html;
?>
    <tr>
        <td class=""><h4><?=$model->name?></h4></td>
        <td class=""><h4><?=$model->services_category->name?></h4></td>
        <td class="text-right"><?=$model->price?> X <?=Html::img('@web/images/smile.png', ['class'=>'services-list__item-img-price'])?> </td>
    </tr>

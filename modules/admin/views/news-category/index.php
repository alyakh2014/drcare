<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории новостей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-category-index">

    <p>
        <?= Html::a('Добавить категорию новостей', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            'nickname',
            'active',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

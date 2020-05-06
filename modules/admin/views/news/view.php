<?php

use app\modules\admin\models\NewsCategory;
use app\modules\admin\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

//Get category for model
$model->category_id = NewsCategory::findOne($model->category_id)->title;
//Get author
$model->author = User::findIdentity(Yii::$app->getUser()->getIdentity()->getId())->username;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('К списку новостей', '/admin/news', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Обновить новость', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить новость', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'preview_text:html',
            'detail_text:html',
            'category_id',
            'data_create',
            'author',
            'active'
        ],
    ]) ?>

</div>

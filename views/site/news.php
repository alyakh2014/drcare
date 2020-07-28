<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title = "Новости";
$this->params['breadcrumbs'][] = $this->title;
?>
<?Pjax::begin(['timeout'=>3000])?>

<?echo ListView::widget([
    'dataProvider' => $news,
    'itemView' => '_news',
    'options' => [
        'tag' => 'div',
/*        'class' => 'col-sm-12',
        'id' => 'services-list',*/
    ],
    'layout' => "{summary}\n<div class='services-list__items row'>{items}</div>\n{pager}",
    'summary' => '',
    'itemOptions' => [
        'tag' => 'div',
        'class' => 'col-sm-12 col-md-6 services-list__item',
    ],
    'emptyText' => 'Список пуст',
]);
?>
<?Pjax::end()?>

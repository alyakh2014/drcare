<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use http\Url;
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title = "Услуги";
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile(
    '@web/js/main.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>
<div class="quality-services">
        <div class="row">
            <div class="col-12">
                <h2>Only Top Quality Services</h2>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem ma ximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, malesuada viverra accumsan leo.</p>
                    </div>

                    <div class="col-12 col-md-6">
                        <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                    </div>
                </div>

                <div class="w-100 text-center mt-5">
                    <a class="button gradient-bg" href="#">Read More</a>
                </div>
            </div>
        </div>
</div>


    <div class="row">
        <div class="col-sm-12">
        <?Pjax::begin(['timeout'=>3000])?>
        <ul class="tabs-nav d-flex flex-wrap services-list__categories">
            <?foreach($categories as $category):?>
                <li class="tab-nav d-flex justify-content-center align-items-center">
                    <a href="<?=\yii\helpers\Url::to('/services?type='.$category['id'])?>"><?=strtolower($category['name'])?>
                    </a>
                </li>
            <?endforeach;?>
        </ul>

        <?$tableHead = '<table class="table table-responsive-sm table-striped"><thead><tr><th class="text-left"> Наименование услуги<th class="text-left"> Наименование услуги<th class="text-right"> Цена, в улыбках</tr></thead><tbody>'?>
        <?$tableBottom ='</tbody></table>'?>

        <?echo ListView::widget([
                'dataProvider' => $services,
                'itemView' => 'service',
                'options' => [
                    'tag' => 'div',
                    //'class' => 'col-sm-12',
                    'id' => 'services-list',
                ],
                'layout' => "{summary}\n<div class='services-list__items'>".$tableHead."{items}".$tableBottom."</div>\n{pager}",
                'summary' => '',
                'itemOptions' => [
                  //  'tag' => 'div',
                   // 'class' => 'col-sm-12 services-list__item',
                ],
                'emptyText' => 'Список пуст',
            ]);
        ?>

        <?Pjax::end()?>
        </div>
    </div>




<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title = "Услуги";
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="quality-services">
    <div class="container">
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
</div>

<!--<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="our-departments-wrap">
                <h2>Our Departments</h2>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="our-departments-cont">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <img src="images/cardiogram.png" alt="">

                                <h3>Cardioology</h3>
                            </header>

                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
                            </div>

                            <footer class="entry-footer">
                                <a href="#">read more</a>
                            </footer>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="our-departments-cont">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <img src="images/stomach-2.png" alt="">

                                <h3>Gastroenterology</h3>
                            </header>

                            <div class="entry-content">
                                <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                            </div>

                            <footer class="entry-footer">
                                <a href="#">read more</a>
                            </footer>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="our-departments-cont">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <img src="images/blood-sample-2.png" alt="">

                                <h3>Medical Lab</h3>
                            </header>

                            <div class="entry-content">
                                <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                            </div>

                            <footer class="entry-footer">
                                <a href="#">read more</a>
                            </footer>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="our-departments-cont">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <img src="images/teeth.png" alt="">

                                <h3>Dental Care</h3>
                            </header>

                            <div class="entry-content">
                                <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                            </div>

                            <footer class="entry-footer">
                                <a href="#">read more</a>
                            </footer>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="our-departments-cont">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <img src="images/stretcher.png" alt="">

                                <h3>Surgery</h3>
                            </header>

                            <div class="entry-content">
                                <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                            </div>

                            <footer class="entry-footer">
                                <a href="#">read more</a>
                            </footer>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="our-departments-cont">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <img src="images/scanner.png" alt="">

                                <h3>Neurology</h3>
                            </header>

                            <div class="entry-content">
                                <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                            </div>

                            <footer class="entry-footer">
                                <a href="#">read more</a>
                            </footer>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-md-0">
                        <div class="our-departments-cont">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <img src="images/bones.png" alt="">

                                <h3>Orthopaedy</h3>
                            </header>

                            <div class="entry-content">
                                <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                            </div>

                            <footer class="entry-footer">
                                <a href="#">read more</a>
                            </footer>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-lg-0">
                        <div class="our-departments-cont">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <img src="images/blood-donation-2.png" alt="">

                                <h3>Pediatry</h3>
                            </header>

                            <div class="entry-content">
                                <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                            </div>

                            <footer class="entry-footer">
                                <a href="#">read more</a>
                            </footer>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-0">
                        <div class="our-departments-cont">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <img src="images/glasses.png" alt="">

                                <h3>Ophthalmology</h3>
                            </header>

                            <div class="entry-content">
                                <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                            </div>

                            <footer class="entry-footer">
                                <a href="#">read more</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container">
    <div class="row">
        <?Pjax::begin(['timeout'=>3000])?>
        <ul class="tabs-nav d-flex flex-wrap services-list__categories">
            <?foreach($categories as $category):?>
                <li class="tab-nav d-flex justify-content-center align-items-center"><?=strtolower($category['name'])?></li>
            <?endforeach;?>
        </ul>
        <?echo ListView::widget([
                'dataProvider' => $services,
                'itemView' => 'service',
                'options' => [
                    'tag' => 'div',
                    'class' => 'col-sm-12',
                    'id' => 'services-list',
                ],
                'layout' => "{summary}\n<div class='services-list__items row'>{items}</div>\n{pager}",
                'summary' => '',
                'itemOptions' => [
                    'tag' => 'div',
                    'class' => 'col-sm-12 col-md-4 services-list__item',
                ],
                'emptyText' => 'Список пуст',
            ]);
        ?>
        <?Pjax::end()?>
    </div>
</div>



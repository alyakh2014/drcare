<?php

use app\modules\admin\models\User;
use yii\helpers\Html;
$user = User::findIdentity(Yii::$app->getUser()->getIdentity()->getId());
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=Yii::$app->getUser()->getIdentity()->getImage()->getUrl()?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=$user->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Меню услуг', 'icon' => 'shopping-cart', 'url' => ['#'],
                        'items'=>[
                                ['label' => 'Категории услуг', 'icon' => '', 'url' => ['/admin/services-category/']],
                                ['label' => 'Услуги', 'icon' => '', 'url' => ['/admin/services/']]
                            ]
                    ],
                    ['label' => 'Меню новостей', 'icon' => 'newspaper-o', 'url' => ['#'],
                        'items'=>[
                            ['label' => 'Категории новостей', 'icon' => '', 'url' => ['/admin/news-category/']],
                            ['label' => 'Новости', 'icon' => '', 'url' => ['/admin/news/']]
                        ]
                    ],
                    ['label' => 'Пользователи', 'icon' => 'user', 'url' => ['/admin/user/']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//                    [
//                        'label' => 'Управление контентом',
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
                ],
            ]
        ) ?>

    </section>

</aside>

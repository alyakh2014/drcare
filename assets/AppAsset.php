<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/site.css',
        'css/style.css',
        'css/swiper.min.css'

    ];
    public $js = [
        'js/jquery.js',
        'js/bootstrap.js',
        'js/jquery.collapsible.min.js',
        'js/swiper.js',
        'js/jquery.countdown.min.js',
        'js/circle-progress.min.js',
        'js/jquery.barfiller.js',
        'js/jquery.countTo.min.js',
        'js/custom.js'
    ];

    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}

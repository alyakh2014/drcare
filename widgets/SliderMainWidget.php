<?php


namespace app\widgets;

use yii\base\Widget;
use Yii;

class SliderMainWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('sliderMainWidget', []);
    }
}
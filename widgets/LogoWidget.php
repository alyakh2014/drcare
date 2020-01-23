<?php


namespace app\widgets;

use yii\base\Widget;
use Yii;

class LogoWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('logoWidget', []);
    }

}
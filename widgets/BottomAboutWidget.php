<?php


namespace app\widgets;


use yii\base\Widget;

class BottomAboutWidget extends Widget
{
    public function init(){
        return parent::init();
    }

    public function run(){
        return $this->render('bottomAboutWidget',[]);
    }
}
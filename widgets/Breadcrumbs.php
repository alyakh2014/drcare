<?php


namespace app\widgets;


use yii\bootstrap\Widget;

class Breadcrumbs extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('breadcrumbsWidget', []);
    }
}
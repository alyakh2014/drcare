<?php

use yii\helpers\Html;
use yii\helpers\Url;

class HomeCest
{
    public function ensureThatHomePageWorks(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/index'));        
        $I->see('Здоровые зубы!');
        
        $I->seeLink('О нас');
        $I->amGoingTo(Url::to('/about'));
        $I->see('О нас');
    }
}

<?php


namespace app\models;


use yii\db\ActiveRecord;

class Services extends ActiveRecord
{
    public static function tableName()
    {
        return 'services';
    }

    public function getServices_category(){
        return $this->hasOne(ServicesCategory::className(), ['id' => 'category_id']);
    }
}
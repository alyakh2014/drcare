<?php


namespace app\models;


use yii\db\ActiveRecord;

class ServicesCategory extends ActiveRecord
{
    public static function tableName()
    {
        return 'services_category';
    }

    public function getServices(){
        return $this->hasMany(Services::className(), ['category_id'=>'id']);
    }

}
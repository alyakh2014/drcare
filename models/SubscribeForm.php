<?php


namespace app\models;


use yii\db\ActiveRecord;


class SubscribeForm extends ActiveRecord
{
    public function rules()
    {
        return [
          ['email', 'required', 'message'=>'Поле обязательно к заполнению'],
          ['email', 'email']
        ];
    }

    public static function tableName()
    {
        return 'subscribe';
    }

    public function attributeLabels()
    {
        return [
            'email'=>''
        ];
    }

}
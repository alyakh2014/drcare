<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id Auto increment
 * @property string $name Name of service
 * @property int $category_id Id of category 
 * @property int $price Price of service
 * @property string|null $description Description of service
 * @property string|null $image Image for service
 * @property int|null $hit Is hit
 * @property int|null $new Is new
 * @property int|null $sale Is sale
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'price'], 'required'],
            [['category_id', 'price', 'hit', 'new', 'sale'], 'integer'],
            [['description'], 'string'],
            [['name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Id'),
            'name' => Yii::t('app', 'Название услуги'),
            'category_id' => Yii::t('app', 'Id категории'),
            'price' => Yii::t('app', 'Стоимость услуги'),
            'description' => Yii::t('app', 'Описание'),
            'image' => Yii::t('app', 'Изображение'),
            'hit' => Yii::t('app', 'Хит'),
            'new' => Yii::t('app', 'Новинка'),
            'sale' => Yii::t('app', 'Распродажа'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ServicesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ServicesQuery(get_called_class());
    }

    public function getServices_category(){
        return $this->hasOne(ServicesCategory::className(), ['id' => 'category_id']);
    }
}

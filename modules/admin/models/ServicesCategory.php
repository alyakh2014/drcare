<?php

namespace app\modules\admin\models;


use Yii;

/**
 * This is the model class for table "services-category".
 *
 * @property int $id Auto increment
 * @property string $name Name of category
 * @property int|null $parent id of parent category
 * @property string|null $description description of category
 */
class ServicesCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Id'),
            'name' => Yii::t('app', 'Название категории'),
            'parent' => Yii::t('app', 'id родительской категории'),
            'description' => Yii::t('app', 'Описание'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ServicesCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ServicesCategoryQuery(get_called_class());
    }

    public function getServices(){
        return $this->hasMany(Services::className(), ['category_id'=>'id']);
    }
}

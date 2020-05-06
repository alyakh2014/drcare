<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "news_category".
 *
 * @property int $id
 * @property string $title title of category of news
 * @property string $nickname nickname of category of news
 *
 * @property News[] $news
 */
class NewsCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'nickname'], 'required', 'message'=> "Поле не может быть пустым"],
            [['title', 'nickname'], 'string', 'max' => 50],
            [['title'], 'unique', 'message'=> "Категория с таким именем уже существует"],
            ['active', 'boolean'],
            [['nickname'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'nickname' => 'Nickname',
            'active' => 'Активность'
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['category_id' => 'id']);
    }
}

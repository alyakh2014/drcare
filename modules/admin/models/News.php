<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title Title of news
 * @property string $preview_text Preview text
 * @property string $detail_text Text of news
 * @property int $category_id Category of news
 * @property string|null $data_create Data create
 * @property int|null $author id of user who crated news
 *
 * @property NewsCategory $category
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'preview_text', 'detail_text', 'category_id'], 'required', 'message'=> "Поле не может быть пустым"],
            [['detail_text', 'preview_text'], 'string'],
            [['category_id', 'author'], 'integer'],
            [['data_create'], 'datetime', 'format'=>'php:Y-m-d H:i:s'],
            ['active', 'boolean'],
            [['title'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => NewsCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'preview_text' => 'Текст для предпросмотра',
            'detail_text' => 'Полный текст новости',
            'category_id' => 'Категория',
            'data_create' => 'Дата создания',
            'author' => 'Автор',
            'active' => 'Активность'
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(NewsCategory::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
    }
}

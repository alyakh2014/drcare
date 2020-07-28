<?php

namespace app\modules\admin\models;

use app\modules\admin\models\UserQuery;
use Yii;
use yii\base\Exception;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "user".
 *
 * @property int $id Primary_key
 * @property string $username Name of user
 * @property string $password User password
 * @property string|null $email Email of user
 * @property string|null $auth_key Auth key of user
 */
class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    public $image;

    public $gallery;

    public function behaviors()
    {
        return [
            'image' => [
                "class" =>"rico\yii2images\behaviors\ImageBehave",
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password', 'email', 'auth_key'], 'string', 'max' => 255],
            [['image'], 'file',  'extensions' => 'png, jpg, jpeg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Id'),
            'username' => Yii::t('app', 'Имя'),
            'password' => Yii::t('app', 'Пароль'),
            'email' => Yii::t('app', 'Email'),
            'auth_key' => Yii::t('app', 'Ключ авторизации пользователя'),
            'image'=> "Фото"
        ];
    }

    /**
     * {@inheritdoc}
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }

    public function upload(){
        if($this->validate()){
            $path = 'upload/store/'. $this->image->baseName.".".$this->image->extension;
                if($this->getImage()){
                    $this->removeImage($this->getImage());
                }
                $this->image->saveAs($path);
                $this->attachImage(Yii::$app->request->hostInfo."/web/".$path);
                @unlink($path);
                return true;
            }else return false;

    }


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        //Do not use
        //return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return \app\models\User|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['author' => 'id']);
    }
 }
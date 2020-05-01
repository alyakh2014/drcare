<?php

namespace app\controllers;


use app\modules\admin\models\ServicesCategory;
use app\models\SubscribeForm;
use app\modules\admin\models\Services;
use app\widgets\SubscribeWidget;
use yii\data\ArrayDataProvider;
use yii\db\Exception;
use yii\httpclient\Client;;
use Yii;
use yii\filters\AccessControl;
use yii\log\Logger;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContacts()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contacts', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    public function actionServices()
    {

        $provider = Services::find()->with('services_category')->all();
        $services = new ArrayDataProvider([
            'allModels' => $provider,
            'pagination' => [
                'pageSize' => 6,
            ],
            'sort' => [
                'attributes' => ['id', 'name'],
            ],
        ]);
        //GetCategories
        $categories = ServicesCategory::find()->all();
        return $this->render('services', compact('services', 'categories'));
    }

    public function actionNews()
    {
       $client = new Client();
       $data = [];
/*       $response = $client->createRequest()
            ->setMethod('post')
            ->setFormat(Client::FORMAT_JSON)
            ->addHeaders(['Content-Type'=> 'application/json'])
            ->setUrl(\Yii::$app->params['api']['host'])
            ->send($data);

       $res = json_decode($response->getContent(), true);*/
       return $this->render('news', compact('data'));
    }

    public function actionSubscribe(){

        $model = new SubscribeForm();
        if(Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())){
            $emaildb = Yii::$app->db->createCommand('SELECT id, active FROM {{subscribe}} WHERE email=:email')
                ->bindValue(':email', $model->email)
                ->queryOne();
            if(!$emaildb){
                try{
                    Yii::$app->db->createCommand()->insert('subscribe', [
                        'email' => $model->email,
                        'active' => true,
                    ])->execute();
                    $result = "Теперь Вы будете знать наши последние новости!";
                }catch (Exception $e){
                    $result = $this->logError($e->getMessage());
                }
            }elseif($emaildb && $emaildb['active']){
                $result = 'Вы уже подписаны на рассылку';
            }elseif($emaildb && !$emaildb['active']){
                try{
                    Yii::$app->db->createCommand()->update('subscribe', ['active' => true], 'id ='.$emaildb['id'])->execute();
                    $result = "Подписка удачно была активирована снова!";
                }catch(Exception $e){
                    $result = $this->logError($e->getMessage());
                }
            }
        }

        return SubscribeWidget::widget(['result'=>$result]);
    }

    /**
     * @param $msg
     * @return string
     */
    private function logError($msg):string
    {
        Yii::getLogger()->log($msg, Logger::LEVEL_ERROR);
        return 'Произошла ошибка. Повторите попытку позже';
    }
}

<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\User;
use app\models\PlansForm;
use app\models\ContactForm;
//use app\models\Plans\Maket;
//use yii\helpers\ArrayHelper;

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
                    'logout' => ['post'],
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
      if (!Yii::$app->user->isGuest) {
        //$id_o = Yii::$app->user->identity->id_otdela;
        $model = new PlansForm();
        $model->getMakets();
        //$model->maket=ArrayHelper::map(Maket::find()->where(['id_otdela' => $id_o])->all(), 'maket','id_maket');

        return $this->render('index',['model' => $model]);
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
     * Login action.
     *
     * @return Response|string
     */
    /*public function actionLogin()
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
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
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

	public function actionVacations()
    {
        return $this->render('vacations');
    }

	public function actionEvents()
    {
        return $this->render('events');
    }
/*
  	public function actionGallery()
      {

          return $this->render('gallery');
      }*/



      public function actionSignup(){
       if (!Yii::$app->user->isGuest) {
         return $this->goHome();
       }

         $model = new SignupForm();
         $id_otd = (new \yii\db\Query())->select(['id_otdela','name'])->from('otdel')->all();
         $model->otdel=ArrayHelper::map($id_otd, 'id_otdela','name');

       if($model->load(\Yii::$app->request->post()) && $model->validate()){
         $user = new User();
         $user->username = $model->username;
         $user->password = \Yii::$app->security->generatePasswordHash($model->password);
         $user->id_otdela = $model->otdel;
         //echo '<pre>'; print_r($user->id_otdela);die;

         if($user->save()){
           return $this->goHome();
         }
       }

       return $this->render('signup', compact('model'));
      }
}

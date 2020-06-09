<?php

namespace app\controllers;
use yii\helpers\ArrayHelper;
use Yii;
use yii\web\Controller;
use app\models\Plans\Maket;
use app\models\Region;
class PlanController extends Controller{

  public function actionLists($id) {
    echo "<option value=''>-- Выберите регион --</option>";
    $name=Maket::find()->where(['id_maket'=>$id])->one();
    if ($name){
      $m = (new \yii\db\Query())
       ->select('nod')
       ->from($name->maket)
       ->groupBy('nod')
       ->all();
       // echo '<pre>'; print_r($id); die;
      foreach ($m as $row){
        echo "<option value='".$row['nod']."'>".$row['nod']."</option>";
      }
    }
  }
  public function actionStation($id) {
    //echo '<pre>'; print_r($id); die;
    //echo "<option></option>";
    $m = (new \yii\db\Query())
       ->select('id_station')
       ->from('station')
       ->where(['id_region'=>$id])
       ->all();
       foreach ($m as $row){
         echo "<option value='".$row['id_station']."'>".$row['id_station']."</option>";
       }

  }
  public function actionShow_tables()  {
    $post = $request = Yii::$app->request;
    $model = new Maket();
    if ($model->load($post->post(),'')){
    // ...и проверяем эти данные
      if ( ! $model->validate()) {
        // данные не прошли валидацию, отмечаем этот факт
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$model->getErrors());

        return $this->renderAjax('errors',[
          'model'=> $model,
        ]);
      } else {
        //Yii::$app->session->setFlash('validate', true);
        $model->maket = $post->post('maket');
        $model->GetData($post->post('nod'),$post->post('date'));
        return $this->renderAjax($model->maket,[
          'model'=> $model,
        ]);

      }
    }
  }
  public function actionSend() {
    $post = $request = Yii::$app->request;
    date_default_timezone_set('Europe/Moscow');
    $m ='app\models\Plans\\'.$post->post('maket');
    if ($post->post('ESR')) $plan =  $m::find()->where(['ESR'=>$post->post('ESR'), 'NOD'=>$post->post('NOD'), 'DATE' => date('Y-m-d')])->one();
    else $plan =  $m::find()->where(['NOD'=>$post->post('NOD'), 'DATE' => date('Y-m-d')])->one();
    if (!$plan) $plan = new $m;

    // если пришли post-данные, загружаем их в модель...
    if ($plan->load($post->post(),'')){
    // ...и проверяем эти данные
      if ( ! $plan->validate()) {
        // данные не прошли валидацию, отмечаем этот факт
        Yii::$app->session->setFlash('validate', false );
        Yii::$app->session->setFlash('form-errors',$plan->getErrors());
      } else {
        // данные прошли валидацию, отмечаем этот факт
        Yii::$app->session->setFlash('validate', true);

        $plan->attributes = $post;
        $plan->DATE = date('Y-m-d');
        $plan->save();//сохранение в БД
      }
    }
    $model = new Maket();
    $model->maket = $post->post('maket');
    $model->GetData('','');
    return $this->renderAjax($model->maket, ['model' => $model]);

  }

}

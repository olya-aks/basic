<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Plans\Maket;
use yii\helpers\ArrayHelper;
/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class PlansForm extends Model
{
    public $maket;
    public $region;
    public $date;

    /*
    * @return array attribute labels (name => label).
    */
    public function attributeLabels()
    {
      return [
        'maket' => 'Макет:',
        'region' => 'Регион:',
        'date' => 'Дата:'

      ];
    }

    public function getMakets(){
      $id_o = Yii::$app->user->identity->id_otdela;
      $this->maket=ArrayHelper::map(Maket::find()->where(['id_otdela' => $id_o])->all(), 'maket','id_maket');
    }

}

<?php

namespace app\models;

use Yii;
use yii\base\Model;

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

}

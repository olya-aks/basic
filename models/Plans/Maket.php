<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class Maket  extends ActiveRecord
{
  //public $maket;
  public $data;

    public function GetData($nod,$date){
      $m='app\models\Plans\\'.$this->maket;
      $sql = $m::find();
      if ($nod){
        if($date) { $sql=$sql->where(['nod'=>$nod, 'date'=>$date]); }
        else {      $sql = $sql->where(['nod'=>$nod]);  }
      }
      else{ if ($date){ $sql = $sql->where(['date'=>$date]);  } }
      $sql=$sql->orderBy(['DATE'=> SORT_DESC, 'NOD' => SORT_ASC])->all();
      if (isset($sql)){
        $this->data =$sql;
      }
      else{
        return "Таблица пуста";
      }
    }
    public static function tableName()
    {
        return '{{maket}}';
    }

    public function rules()
    {
      return [
        //['maket', 'compare', 'compareValue' => '-- Выберите макет --', 'operator' => '!=', 'message' => 'Выберите макет из списка!'],
        [['maket'],'required', 'message' => 'Выберите макет из списка!'],

      ];
    }
}

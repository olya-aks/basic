<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0320_VIGROB_  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'ДОРОГА',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'VIGVS' => 'ВЫГРУЗКА ВСЕГО',
        'VIGKR' => 'ВЫГРУЗКА КРЫТЫХ',
        'VIGPL' => 'ВЫГРУЗКА ПЛАТФОРМ',
        'VIGPV' => 'ВЫГРУЗКА ПОЛУВАГОНОВ',
        'VIGZR' => 'ВЫГРУЗКА ЗЕРНОВОЗОВ',
        'VIGRF' => 'ВЫГРУЗКА РЕФРЕЖЕРАТОРОВ',
        'VIGPR' => 'ВЫГРУЗКА ПРОЧИХ',
        'VIGCM' => 'ВЫГРУЗКА ЦЕМЕНТОВОЗОВ',
        'VIGCS' => 'ВЫГРУЗКА ЦИСТЕРН',
        'OBVS' => 'ОБОРОТ ОБЩИЙ ВСЕГО',
        'OBMVS' => 'ОБОРОТ МЕСТНЫЙ ВСЕГО',
        'OBKR' => 'ОБОРОТ ОБЩИЙ KP',
        'OBMKR' => 'ОБОРОТ МЕСТНЫЙ КРЫТЫХ',
        'OBPL' => 'ОБОРОТ ОБЩИЙ ПЛАТФОРМ',
        'OBMPL' => 'ОБОРОТ МЕСТНЫЙ ПЛАТФОРМ',
        'OBPV' => 'ОБОРОТ ОБЩИЙ ПОЛУВАГОНОВ',
        'OBMPV' => 'ОБОРОТ МЕСТНЫЙ ПОЛУВАГОНОВ',
        'OBZR' => 'ОБОРОТ ОБЩИЙ ЗЕРНОВОЗОВ',
        'OBMZR' => 'ОБОРОТ МЕСТНЫЙ ЗЕРНОВОЗОВ',
        'OBRF' => 'ОБОРОТ ОБЩИЙ РЕФРЕЖЕРАТОРОВ',
        'OBMRF' => 'ОБОРОТ МЕСТНЫЙ РЕФРЕЖЕРАТОРОВ',
        'OBPR' => 'ОБОРОТ ОБЩИЙ ПРОЧИХ',
        'OBMPR' => 'ОБОРОТ МЕСТНЫЙ ПРОЧИХ',
        'OBCM' => 'ОБОРОТ ОБЩИЙ ЦЕМЕНТОВОЗОВВ',
        'OBMCM' => 'ОБОРОТ МЕСТНЫЙ ЦЕМЕНТОВОЗОВВ',
        'OBCS' => 'ОБОРОТ ОБЩИЙ ЦИСТЕРН',
        'OBMCS' => 'ОБОРОТ МЕСТНЫЙ ЦИСТЕРН',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      [['NOD','VIGVS','VIGKR','VIGPL','VIGPV','VIGZR','VIGRF','VIGPR','VIGCM','VIGCS','OBVS','OBMVS','OBKR','OBMKR','OBPL','OBMPL',
      'OBPV','OBMPV','OBZR','OBMZR','OBRF','OBMRF','OBPR','OBMPR','OBCM','OBMCM','OBCS','OBMCS'],'required',
      'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','VIGVS','VIGKR','VIGPL','VIGPV','VIGZR','VIGRF','VIGPR','VIGCM','VIGCS','OBVS','OBMVS','OBKR','OBMKR','OBPL','OBMPL',
      'OBPV','OBMPV','OBZR','OBMZR','OBRF','OBMRF','OBPR','OBMPR','OBCM','OBMCM','OBCS','OBMCS'], 'integer',
       'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {$max}-х знаков'],

      [['NOD','VIGVS','VIGKR','VIGPL','VIGPV','VIGZR','VIGRF','VIGPR','VIGCM','VIGCS','OBVS','OBMVS','OBKR','OBMKR','OBPL','OBMPL',
      'OBPV','OBMPV','OBZR','OBMZR','OBRF','OBMRF','OBPR','OBMPR','OBCM','OBMCM','OBCS','OBMCS'],'number', 'min'=> 0,
       'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],

       [['VIGVS'], 'validateV'],
       [['OBVS'], 'validateOO'],
       [['OBMVS'], 'validateOM'],

    ];
  }

  public function validateV(){
    if ($this->VIGVS!=($this->VIGKR+$this->VIGPL+$this->VIGPV+$this->VIGZR+$this->VIGRF+$this->VIGPR+$this->VIGCM+$this->VIGCS)){
      $this->addError('VIGVS','Поле ВЫГРУЗКА ВСЕГО не соответствует сумме полей');
    }
  }
  public function validateOO(){
    if ($this->OBVS!=($this->OBKR+$this->OBPL+$this->OBPV+$this->OBZR+$this->OBRF+$this->OBPR+$this->OBCM+$this->OBCS)){
      $this->addError('OBVS','Поле ОБОРОТ ОБЩИЙ ВСЕГО не соответствует сумме полей');
    }
  }
  public function validateOM(){
    if ($this->OBMVS!=($this->OBMKR+$this->OBMPL+$this->OBMPV+$this->OBMZR+$this->OBMRF+$this->OBMPR+$this->OBMCM+$this->OBMCS)){
      $this->addError('OBMVS','Поле ОБОРОТ МЕСТНЫЙ ВСЕГО не соответствует сумме полей');
    }
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0320_VIGROB_}}';
    }
}
?>

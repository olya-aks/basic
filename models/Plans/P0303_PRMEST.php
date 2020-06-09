<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0303_PRMEST  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'PRIVS' => 'ПРИЕМ МЕСТН.ВСЕГО',
        'POGVS' => 'ПОГРУЗКА МЕСТН.ВСЕГО',
        'PRIKR' => 'ПРИЕМ МЕСТНОГО КРЫТЫХ',
        'POGKR' => 'ПОГРУЗКА МЕСТНОГО КРЫТЫХ',
        'PRIPL' => 'ПРИЕМ МЕСТНОГО ПЛАТФОРМ',
        'POGPL' => 'ПОГРУЗКА МЕСТНОГО ПЛАТФОРМ',
        'PRIPV' => 'ПРИЕМ МЕСТНОГО ПОЛУВАГОНОВ',
        'POGPV' => 'ПОГРУЗКА МЕСТНОГО ПОЛУВАГОНОВ',
        'PRIZR' => 'ПРИЕМ МЕСТНОГО ЗЕРНОВОЗОВ',
        'POGZR' => 'ПОГРУЗКА МЕСТНОГО ЗЕРНОВОЗОВ',
        'PRIRF' => 'ПРИЕМ МЕСТНОГО РЕФРЕЖЕРАТОРОВ',
        'POGRF' => 'ПОГРУЗКА МЕСТНОГО РЕФРЕЖЕРАТОРОВ',
        'PRIPR' => 'ПРИЕМ МЕСТНОГО ПРОЧИХ',
        'POGPR' => 'ПОГРУЗКА МЕСТНОГО ПРОЧИХ',
        'PRICM' => 'ПРИЕМ МЕСТНОГО ЦЕМЕНТОВОЗОВ',
        'POGCM' => 'ПОГРУЗКА МЕСТНОГО ЦЕМЕНТОВОЗОВ',
        'PRICS' => 'ПРИЕМ МЕСТНОГО ЦИСТЕРН',
        'POGCS' => 'ПОГРУЗКА МЕСТНОГО ЦИСТЕРН',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['NOD','PRIVS','POGVS','PRIKR','POGKR','PRIPL','POGPL','PRIPV','POGPV','PRIZR','POGZR',
      'PRIRF','POGRF','PRIPR','POGPR','PRICM','POGCM','PRICS','POGCS'],'required',
      'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','PRIVS','POGVS','PRIKR','POGKR','PRIPL','POGPL','PRIPV','POGPV','PRIZR','POGZR',
      'PRIRF','POGRF','PRIPR','POGPR','PRICM','POGCM','PRICS','POGCS'], 'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['NOD','PRIVS','POGVS','PRIKR','POGKR','PRIPL','POGPL','PRIPV','POGPV','PRIZR','POGZR',
      'PRIRF','POGRF','PRIPR','POGPR','PRICM','POGCM','PRICS','POGCS'],'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],

      [['PRIVS'], 'validatepriem'],
      [['POGVS'], 'validatepogruz'],
    ];
  }
  public function validatepriem(){
    if ($this->PRIVS!=($this->PRIKR+$this->PRIPL+$this->PRIPV+$this->PRIZR+$this->PRIRF+$this->PRIPR+$this->PRICM+$this->PRICS)){
      $this->addError('PRIVS','Поле ПРИЕМ ВСЕГО не соответствует сумме полей');
    }
  }
  public function validatepogruz(){
    if ($this->POGVS!=($this->POGKR+$this->POGPL+$this->POGPV+$this->POGZR+$this->POGRF+$this->POGPR+$this->POGCM+$this->POGCS)){
      $this->addError('POGVS','Поле ПОГРУЗКА ВСЕГО не соответствует сумме полей');
    }
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0303_PRMEST}}';
    }
}
?>

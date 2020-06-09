<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0302_SDACHA_  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'SDVS' => 'СДАЧА ВСЕГО',
        'SDGRU' => 'СДАЧА ГРУЖЕНЫХ ВСЕГО',
        'SDGRKR' => 'СДАЧА ГРУЖЕНЫХ КРЫТЫХ',
        'SDGRPL' => 'СДАЧА ГРУЖЕНЫХ ПЛАТФОРМ',
        'SDGRPV' => 'СДАЧА ГРУЖЕНЫХ ПОЛУВАГОНОВ',
        'SDGRZR' => 'СДАЧА ГРУЖЕНЫХ ЗЕРНОВОЗОВ',
        'SDGRPF' => 'СДАЧА ГРУЖЕНЫХ РЕФРЕЖЕРАТОРОВ',
        'SDGRPR' => 'СДАЧА ГРУЖЕНЫХ ПРОЧИХ',
        'SDGRCM' => 'СДАЧА ГРУЖЕНЫХ ЦЕМЕНТОВОЗОВ',
        'SDGRCS' => 'СДАЧА ГРУЖЕНЫХ ЦИСТЕРН',
        'SDPOR' => 'СДАЧА ПОРОЖНИХ ВСЕГО',
        'SDPRKR' => 'СДАЧА ПОРОЖНИХ КРЫТЫХ',
        'SDPRPL' => 'СДАЧА ПОРОЖНИХ ПЛАТФОРМ',
        'SDPRPV' => 'СДАЧА ПОРОЖНИХ ПОЛУВАГОНОВ',
        'SDPRZR' => 'СДАЧА ПОРОЖНИХ ЗЕРНОВОЗОВ',
        'SDPRRF' => 'СДАЧА ПОРОЖНИХ РЕФРЕЖЕРАТОРОВ',
        'SDPRPR' => 'СДАЧА ПОРОЖНИХ ПРОЧИХ',
        'SDPRCM' => 'СДАЧА ПОРОЖНИХ ЕМЕНТОВОЗОВ',
        'SDPRCS' => 'СДАЧА ПОРОЖНИХ ЦИСТЕРН',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      [['NOD','SDVS','SDGRU','SDGRKR','SDGRPL','SDGRPV','SDGRZR','SDGRPF','SDGRPR','SDGRCM','SDGRCS','SDPOR','SDPRKR','SDPRPL',
      'SDPRPV','SDPRZR','SDPRRF','SDPRPR','SDPRCM','SDPRCS'],'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','SDVS','SDGRU','SDGRKR','SDGRPL','SDGRPV','SDGRZR','SDGRPF','SDGRPR','SDGRCM','SDGRCS','SDPOR','SDPRKR','SDPRPL',
      'SDPRPV','SDPRZR','SDPRRF','SDPRPR','SDPRCM','SDPRCS'],'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле НОД должно иметь не более 2-х знаков'],

      [['NOD','SDVS','SDGRU','SDGRKR','SDGRPL','SDGRPV','SDGRZR','SDGRPF','SDGRPR','SDGRCM','SDGRCS','SDPOR','SDPRKR','SDPRPL',
      'SDPRPV','SDPRZR','SDPRRF','SDPRPR','SDPRCM','SDPRCS'],'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],

      [['SDVS'], 'validateV'],
      [['SDGRU'], 'validateGV'],
      [['SDPOR'], 'validatePV'],
    ];
  }
  public function validateGV(){
    if ($this->SDGRU!=($this->SDGRKR+$this->SDGRPL+$this->SDGRPV+$this->SDGRZR+$this->SDGRPF+$this->SDGRPR+$this->SDGRCM+$this->SDGRCS)){
      $this->addError('SDGRU','Поле СДАЧА ГРУЖЕНЫХ ВСЕГО не соответствует сумме полей');
    }
  }
  public function validatePV(){
    if ($this->SDPOR!=($this->SDPRKR+$this->SDPRPL+$this->SDPRPV+$this->SDPRZR+$this->SDPRRF+$this->SDPRPR+$this->SDPRCM+$this->SDPRCS)){
      $this->addError('SDPOR','Поле СДАЧА ПОРОЖНИХ ВСЕГО не соответствует сумме полей');
    }
  }
  public function validateV(){
    if ($this->SDVS!=($this->SDGRU+$this->SDPOR)){
      $this->addError('SDVS','Поле СДАЧА ВСЕГО не соответствует сумме полей');
    }
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0302_SDACHA_}}';
    }
}
?>

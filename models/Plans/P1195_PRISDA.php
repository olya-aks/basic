<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P1195_PRISDA  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'ESR' => 'КОД СТАНЦИИ',
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'PRKR' => 'ПРИЕМ ПОРОЖНИХ КРЫТЫХ',
        'PRPL' => 'ПРИЕМ ПОРОЖНИХ ПЛАТФОРМ',
        'PRPV' => 'ПРИЕМ ПОРОЖНИХ ПОЛУВАГОНОВ',
        'PRCS' => 'ПРИЕМ ПОРОЖНИХ ЦИСТЕРН',
        'PRRF' => 'ПРИЕМ ПОРОЖНИХ РЕФРЕЖЕРАТОРОВ',
        'PRZR' => 'ПРИЕМ ПОРОЖНИХ ЗЕРНОВОЗОВ',
        'SDKR' => 'СДАЧА ПОРОЖНИХ КРЫТЫХ',
        'SDPL' => 'CДАЧА ПОРОЖНИХ ПЛАТФОРМ',
        'SDPV' => 'СДАЧА ПОРОЖНИХ ПОЛУВАГОНОВ',
        'SDCS' => 'СДАЧА ПОРОЖНИХ ЦИСТЕРН',
        'SDRF' => 'СДАЧА ПОРОЖНИХ РЕФРЕЖЕРАТОРОВ',
        'SDZR' => 'СДАЧА ПОРОЖНИХ ЗЕРНОВОЗОВ',
        'PRVS' => 'ПРИЕМ ВСЕГО',
        'SDVS' => 'СДАЧА ВСЕГО',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      [['ESR','NOD','PRKR','PRPL','PRPV','PRCS','PRRF','PRZR','SDKR','SDPL','SDPV','SDCS','SDRF','SDZR','PRVS','SDVS'],'required',
       'message' => 'Поле {attribute} обязательно для заполнения'],

      [['ESR','NOD','PRKR','PRPL','PRPV','PRCS','PRRF','PRZR','SDKR','SDPL','SDPV','SDCS','SDRF','SDZR','PRVS','SDVS'], 'integer',
       'message' => 'Поле {attribute} должно быть целочисленным'],

      ['ESR', 'string', 'max' => 6, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-ти знаков'],
      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['ESR','NOD','PRKR','PRPL','PRPV','PRCS','PRRF','PRZR','SDKR','SDPL','SDPV','SDCS','SDRF','SDZR','PRVS','SDVS'],'number',
       'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],

      [['PRVS'], 'validatePriem'],
      [['SDVS'], 'validateSd'],
    ];
  }

  public function validatePriem(){
    if ($this->PRVS != ($this->PRKR + $this->PRPL + $this->PRPV + $this->PRCS + $this->PRRF + $this->PRZR)) {
      $this->addError('PRVS','Поле ПРИЕМ ВСЕГО не соответствует сумме полей');
    }
  }

  public function validateSd(){
    if ($this->SDVS!= ($this->SDKR + $this->SDPL + $this->SDPV + $this->SDCS + $this->SDRF + $this->SDZR)) {
      $this->addError('SDVS','Поле СДАЧА ВСЕГО не соответствует сумме полей');
    }
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P1195_PRISDA}}';
    }
}
?>

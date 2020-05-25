<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P3130_NEFT_PG  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'ESR' => 'КОД СТАНЦИИ',
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'GRUZ' => 'КОД ГРУЗА',
        'PLAN' => 'ПЛАН',
        'TEHNORM' => 'ТЕХ. НОРМА',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['ESR','NOD','GRUZ','PLAN','TEHNORM'],'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      [['ESR','NOD','GRUZ','PLAN','TEHNORM'], 'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['ESR', 'string', 'max' => 5, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-ти знаков'],

      [['NOD','GRUZ'], 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['ESR','NOD','GRUZ','PLAN','TEHNORM'],'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],


    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P3130_NEFT_PG}}';
    }
}
?>

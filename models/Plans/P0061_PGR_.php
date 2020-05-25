<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0061_PGR_  extends ActiveRecord
{
  public function attributeLabels() {
      return [
          'ESR' => 'КОД СТАНЦИИ',
          'NOD' => 'НОД',
          'DATE' => 'РАСЧЕТНАЯ ДАТА',
          'PLNVAG' => 'ПЛАН СУТОЧНОЙ ПОГРУЗКИ ВАГОНОВ',
          'PLNTON' => 'ПЛАН СУТОЧНОЙ ПОГРУЗКИ ТОНН',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['ESR','NOD','PLNVAG','PLNTON'],'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      [['ESR','NOD','PLNTON'], 'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],
      ['ESR', 'string', 'max' => 6, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-ти знаков'],
      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],
      [['PLNVAG'], 'double', 'message' => 'Поле {attribute} должно быть числовым'],

      [['ESR','NOD','PLNVAG','PLNTON'],'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],


    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0061_PGR_}}';
    }
}
?>

<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0350_LOKOM  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'VESPE' => 'BEC ПOEЗДA ЭЛЕКТРОВОЗА',
        'PROIE' => 'ПPOИЗBOДИTЕЛЬНОСТЬ ЭЛЕКТРОВОЗА',
        'PROBE' => 'ПPOБEГ ЭЛЕКТРОВОЗА',
        'VESPT' => 'BEC ПOEЗДA TЕПЛОВОЗА',
        'PROIT' => 'ПPOИЗBOДИTЕЛЬНОСТЬ TЕПЛОВОЗА',
        'PROBT' => 'ПPOБEГ TЕПЛОВОЗА',
        'VESPV' => 'BEC ПOEЗДA БЕЗ ПЕРЕДАТОЧЫХ И ВЫВОЗНЫХ',
        'PROIV' => 'ПPOИЗBOДИTЕЛЬНОСТЬ БЕЗ ПЕРЕДАТОЧЫХ И ВЫВОЗНЫХ',
        'PROBV' => 'ПPOБEГ БЕЗ ПЕРЕДАТОЧЫХ И ВЫВОЗНЫХ',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['NOD','VESPE','PROIE','PROBE','VESPT','PROIT','PROBT','VESPV','PROIV','PROBV'],'required',
      'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','VESPE','PROIE','PROBE','VESPT','PROIT','PROBT','VESPV','PROIV','PROBV'], 'integer',
       'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['NOD','VESPE','PROIE','PROBE','VESPT','PROIT','PROBT','VESPV','PROIV','PROBV'],
      'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],


    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0350_LOKOM}}';
    }
}
?>

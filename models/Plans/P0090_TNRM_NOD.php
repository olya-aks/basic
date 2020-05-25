<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0090_TNRM_NOD  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'ESR' => 'СТАНЦИЯ',
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'PRKRAB' => 'РАБ/ПАРК ВСЕГО',
        'PRKPOR' => 'ПАРК ПОРОЖНИХ',
        'PRST1' => 'ПРОСТОЙ ПОД ОДНОЙ ГРУЗОВОЙ ОПЕРАЦИЕЙ',
        'VIGR' => 'ВЫГРУЗКА',
        'PRSTBEZ' => 'ПРОСТОЙ БЕЗ ПЕРЕАБОТКИ(ТОЛЬКО ДЛЯ НОД-1)',
        'PRSTPER' => 'ПРОСТОЙ С ПЕРЕАБОТКОЙ (ТОЛЬКО ДЛЯ НОД-1)',
        'PRSTOB' => 'ПРОСТОЙ ОБЩИЙ (ТОЛЬКО ДЛЯ НОД-1)',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['ESR','NOD','PRKRAB','PRKPOR','PRST1','VIGR','PRSTBEZ','PRSTPER','PRSTOB'],'required',
       'message' => 'Поле {attribute} обязательно для заполнения'],

      [['ESR','NOD','PRKRAB','PRKPOR','PRST1','VIGR','PRSTBEZ','PRSTPER','PRSTOB'],
       'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],
      ['ESR', 'string', 'max' => 5, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-ти знаков'],
      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['ESR','NOD','PRKRAB','PRKPOR','PRST1','VIGR','PRSTBEZ','PRSTPER','PRSTOB'],'number', 'min'=> 0,
       'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],

    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0090_TNRM_NOD}}';
    }
}
?>

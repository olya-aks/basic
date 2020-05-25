<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P4751_TKMN_  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'REG' => 'РЕГИОН',
        'TKMN' => 'Т-КМ НЕТТО',
        'GRUZOOBM' => 'МЕСЯЦ: ГРУЗООБОРОТ С УЧЕТОМ СОБСТВЕННЫХ ВАГОНОВ В ПОРОЖНЕМ СОСТОЯНИИ',
        'TARIFM' => 'МЕСЯЦ: В Т. Ч. ТАРИФНЫЙ ГРУЗООБОРОТ',
        'GRSBPM' => 'МЕСЯЦ: ГРУЗООБОРОТ СОБСТВЕННЫХ ВАГОНОВ В ПОРОЖНЕМ СОСТОЯНИИ',
        'GRUZOOBK' => 'КВАРТАЛ: ГРУЗООБОРОТ С УЧЕТОМ СОБСТВЕННЫХ ВАГОНОВ В ПОРОЖНЕМ СОСТОЯНИИ',
        'TARIFK' => 'КВАРТАЛ: В Т. Ч. ТАРИФНЫЙ ГРУЗООБОРОТ',
        'GRSBPK' => 'КВАРТАЛ: ГРУЗООБОРОТ СОБСТВЕННЫХ ВАГОНОВ В ПОРОЖНЕМ СОСТОЯНИИ',
        'GRUZOOBG' => 'ГОД: ГРУЗООБОРОТ С УЧЕТОМ СОБСТВЕННЫХ ВАГОНОВ В ПОРОЖНЕМ СОСТОЯНИИ',
        'TARIFG' => 'ГОД: В Т. Ч. ТАРИФНЫЙ ГРУЗООБОРОТ',
        'GRSBPG' => 'ГОД: ГРУЗООБОРОТ СОБСТВЕННЫХ ВАГОНОВ В ПОРОЖНЕМ СОСТОЯНИИ',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['REG','TKMN','GRUZOOBM','TARIFM','GRSBPM','GRUZOOBK','TARIFK','GRSBPK','GRUZOOBG','TARIFG','GRSBPG'],
      'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      ['REG', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более 2-х знаков'],
      [['REG','TKMN'], 'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      [['GRUZOOBM','TARIFM','GRSBPM','GRUZOOBK','TARIFK','GRSBPK','GRUZOOBG','TARIFG','GRSBPG'],
       'double', 'message' => 'Поле {attribute} должно быть числовым'],

       [['REG','TKMN','GRUZOOBM','TARIFM','GRSBPM','GRUZOOBK','TARIFK','GRSBPK','GRUZOOBG','TARIFG','GRSBPG'],
       'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],



    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P4751_TKMN_}}';
    }
}
?>

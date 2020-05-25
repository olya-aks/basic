<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0203_RPGRU_  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'KVVS' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ ВСЕГО',
        'KVKR' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ КРЫТЫХ',
        'KVPL' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ ПЛАТФОРМ',
        'KVPV' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ ПОЛУВАГОНОВ',
        'KVCS' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ ЦИСТЕРН',
        'KVZR' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ ЗЕРНОВОЗОВ',
        'KVRF' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ РЕФРЕЖЕРАТОРОВ',
        'KVCG' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ ЦИСТЕРН РЖД',
        'KVPR' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ ПРОЧИХ',
        'KVCM' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ ЦЕМЕНТОВОЗОВ',
        'KVMV' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ МИНЕРАЛОВОЗОВ',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      [['NOD','KVVS','KVKR','KVPL','KVPV','KVCS','KVZR','KVRF','KVCG','KVPR','KVCM','KVMV'],'required',
       'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','KVVS','KVKR','KVPL','KVPV','KVCS','KVZR','KVRF','KVCG','KVPR','KVCM','KVMV'],'integer',
       'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более 2-х знаков'],
      [['NOD','KVVS','KVKR','KVPL','KVPV','KVCS','KVZR','KVRF','KVCG','KVPR','KVCM','KVMV'],'number', 'min'=> 0,
       'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],



    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0203_RPGRU_}}';
    }
}
?>

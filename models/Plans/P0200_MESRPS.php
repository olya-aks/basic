<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0200_MESRPS  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'KVKR' => 'CУТКИ МЕСТНЫЙ ГРУЗ КРЫТЫХ',
        'KVPL' => 'CУТКИ МЕСТНЫЙ ГРУЗ ПЛАТФОРМ',
        'KVPV' => 'CУТКИ МЕСТНЫЙ ГРУЗ ПОЛУВАГОНОВ',
        'KVCS' => 'CУТКИ МЕСТНЫЙ ГРУЗ ЦИСТЕРН',
        'KVZR' => 'CУТКИ МЕСТНЫЙ ГРУЗ ЗЕРНОВОЗОВ',
        'KVRF' => 'CУТКИ МЕСТНЫЙ ГРУЗ РЕФРЕЖЕРАТОРОВ',
        'KVCM' => 'CУТКИ МЕСТНЫЙ ГРУЗ ЦЕМЕНТОВОЗОВ',
        'KVPR' => 'CУТКИ МЕСТНЫЙ ГРУЗ ПРОЧИХ',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['NOD','KVKR','KVPL','KVPV','KVCS','KVZR','KVRF','KVCM','KVPR'],
      'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','KVKR','KVPL','KVPV','KVCS','KVZR','KVRF','KVCM','KVPR'], 'integer',
       'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['NOD','KVKR','KVPL','KVPV','KVCS','KVZR','KVRF','KVCM','KVPR'],'number',
       'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],

    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0200_MESRPS}}';
    }
}
?>

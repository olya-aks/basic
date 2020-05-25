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
        'SDGRU' => 'СДАЧА ГРУЖЕНЫХ',
        'SDGRKR' => 'СДАЧА ГРУЖЕНЫХ КРЫТЫХ',
        'SDGRPL' => 'СДАЧА ГРУЖЕНЫХ ПЛАТФОРМ',
        'SDGRPV' => 'СДАЧА ГРУЖЕНЫХ ПОЛУВАГОНОВ',
        'SDGRZR' => 'СДАЧА ГРУЖЕНЫХ ЗЕРНОВОЗОВ',
        'SDGRPF' => 'СДАЧА ГРУЖЕНЫХ РЕФРЕЖЕРАТОРОВ',
        'SDGRPR' => 'СДАЧА ГРУЖЕНЫХ ПРОЧИХ',
        'SDGRCM' => 'СДАЧА ГРУЖЕНЫХ ЦЕМЕНТОВОЗОВ',
        'SDGRCS' => 'СДАЧА ГРУЖЕНЫХ ЦИСТЕРН',
        'SDPOR' => 'СДАЧА ПОРОЖНИХ',
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

    ];
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

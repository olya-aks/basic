<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0404_BUDZ  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'SKORU' => 'БЮДЖЕТНАЯ УЧАСТКОВАЯ СКОРОСТЬ',
        'SKORT' => 'БЮДЖЕТНАЯ ТЕХНИЧЕСКАЯ СКОРОСТЬ (РАСЧИТЫВАЕТСЯ ОТ УЧАСТКОВОЙ)',
        'VESSR' => 'БЮДЖЕТНЫЙ СРЕДНИЙ ВЕС ПОЕЗДА',
        'PROIZV' => 'БЮДЖЕТНАЯ ПРОИЗВОДИТЕЛЬНОСТЬ ЛОКОМОТИВА',
        'PROIZVEKS' => 'БЮДЖЕТНАЯ ПРОИЗВОДИТЕЛЬНОСТЬ ЛОКОМОТИВА ЭКПЛУАТИРУЕМОГО ПАРКА',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['NOD','SKORU','SKORT','VESSR','PROIZV','PROIZVEKS'],'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','SKORU','SKORT','VESSR','PROIZV','PROIZVEKS'], 'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['NOD','SKORU','SKORT','VESSR','PROIZV','PROIZVEKS'],'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],


    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0404_BUDZ}}';
    }
}
?>

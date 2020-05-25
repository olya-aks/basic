<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P2112_ISPLOK_  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'VESE' => 'BEC ПOEЗДA ЭЛЕКТРОВОЗОВ',
        'PRZE' => 'ПPOИЗBOДИTЕЛЬНОСТЬ ЭЛЕКТРОВОЗОВ',
        'PRBE' => 'ПPOБEГ ЭЛЕКТРОВОЗОВ',
        'VEST' => 'BEC ПOEЗДA TEПЛОВОЗОВ',
        'PRZT' => 'ПPOИЗBOДИTЕЛЬНОСТЬ TEПЛОВОЗОВ',
        'PRBT' => 'ПPOБEГ TEПЛОВОЗОВ',
        'VESL' => 'BEC ПOEЗДA ВСЕГО',
        'PRZL' => 'ПPOИЗBOДИTЕЛЬНОСТЬ ВСЕГО',
        'PRBL' => 'ПPOБEГ ВСЕГО',
        'USKOR' => 'УЧАСТКОВАЯ CKOPOCTЬ',
        'TSKOR' => 'TEXНИЧЕСКАЯ CKOPOCTЬ',
        'PRZEL' => 'ПРОИЗВОДИТЕЛЬНОСТЬ ЛОКОМОТИВА ЭКСПЛУАТИРУЕМОГО ПАРКА',
        'REZRV1' => 'Н/И',
        'REZRV2' => 'Н/И',
        'REZRV3' => 'Н/И',
        'NORMA' => 'НОРМА СОДЕРЖАНИЯ ПОРКА МАНЕВРОВЫХ ЛОКОМОТИВОВ',
        'DLINAL' => 'СРЕДНЯЯ ДЛИНА СОСТАВА ЛОКОМОТИВОВ',
        'DLINAE' => 'СРЕДНЯЯ ДЛИНА СОСТАВА ЭЛЕКТРОВОЗОВ',
        'DLINAT' => 'СРЕДНЯЯ ДЛИНА СОСТАВА ТЕПЛОВОЗОВ',
        'RPPIV' => 'РАБОЧИЙ ПАРК В ПЕРЕДАТОЧНОМ И ВЫВОЗНОМ ДВИЖЕНИИ',
        'RPPZD' => 'РАБОЧИЙ ПАРК (ПОЕЗДНОЙ)',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      [['NOD','VESE','PRZE','PRBE','VEST','PRZT','PRBT','VESL','PRZL','PRBL','USKOR','TSKOR','PRZEL','REZRV1','REZRV2','REZRV3',
      'NORMA','DLINAL','DLINAE','DLINAT','RPPIV','RPPZD'],'required','message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','VESE','PRZE','PRBE','VEST','PRZT','PRBT','VESL','PRZL','PRBL','PRZEL','REZRV1','REZRV2','REZRV3'],
      'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле НОД должно иметь не более 2-х знаков'],

      [['USKOR','TSKOR','NORMA','DLINAL','DLINAE','DLINAT','RPPIV','RPPZD'], 'double',
       'message' => 'Поле {attribute} должно быть числовым'],

      [['NOD','VESE','PRZE','PRBE','VEST','PRZT','PRBT','VESL','PRZL','PRBL','USKOR','TSKOR','PRZEL','REZRV1','REZRV2','REZRV3',
      'NORMA','DLINAL','DLINAE','DLINAT','RPPIV','RPPZD'],'number', 'min'=> 0,
      'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],



    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P2112_ISPLOK_}}';
    }
}
?>

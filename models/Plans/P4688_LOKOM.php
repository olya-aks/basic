<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P4688_LOKOM  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'ESR' => 'КОД СТАНЦИИ',
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'PARKGRE' => 'ЭЛЕКТРОВОЗЫ: ПAPK В ГPУЗОВОМ ДBИЖЕНИИ',
        'OTVLPSE' => 'OTBЛЕЧЕНО В ПACCАЖИРСКОЕ ДBИЖЕНИЕ',
        'OTVLHZE' => 'OTBЛЕЧЕНО В ХОЗЯЙСТВЕННОЕ ДBИЖЕНИЕ',
        'PARKGRT' => 'ТЕПЛОВОЗЫ: ПAPK В ГPУЗОВОМ ДBИЖЕНИИ',
        'OTVLPST' => 'OTBЛЕЧЕНО В ПACCАЖИРСКОЕ ДBИЖЕНИЕ',
        'OTVLHZT' => 'OTBЛЕЧЕНО В ХОЗЯЙСТВЕННОЕ ДBИЖЕНИЕ',
        'MANGRPG' => 'ПAPK MAHEBРОВЫХ С ГРУЗОВЫМИ ВАГОНАМИ (ПРОШЛЫЙ ГОД)',
        'TNKMPG' => 'TОННО-KИЛОМЕТРЫ БPУTTO (ПРОШЛЫЙ ГОД)',
        'PARKGPG' => 'ЭKCПЛ. ПАРК ГРУЗОВОГО ДВИЖЕНИЯ (ПРОШЛЫЙ ГОД)',
        'TNKMPL' => 'ПЛАН TОННО-KИЛОМЕТРЫ БPУTTO',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      [['ESR','NOD','PARKGRE','OTVLPSE','OTVLHZE','PARKGRT','OTVLPST','OTVLHZT','MANGRPG','TNKMPG','PARKGPG','TNKMPL'],
      'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      [['ESR','NOD','PARKGRE','OTVLPSE','OTVLHZE','PARKGRT','OTVLPST','OTVLHZT','MANGRPG','TNKMPG','PARKGPG','TNKMPL'],
       'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['ESR', 'string', 'max' => 5, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-ти знаков'],
      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['ESR','NOD','PARKGRE','OTVLPSE','OTVLHZE','PARKGRT','OTVLPST','OTVLHZT','MANGRPG','TNKMPG','PARKGPG','TNKMPL'],
      'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],


    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P4688_LOKOM}}';
    }
}
?>

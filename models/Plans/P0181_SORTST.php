<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0181_SORTST  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'ESR' => 'СТАНЦИЯ',
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'PROSPER' => 'ПPOCТОЙ C ПЕРЕРАБОТКОЙ(ЧX100)',
        'PROSBPR' => 'ПРОСТОЙ БEЗ ПЕРЕРАБОТКИ(ЧX100)',
        'PARK' => 'PАБОЧИЙ ПАРК',
        'PERGOR' => 'ПРОСТОЙ HA ГOPKЕ',
        'VAGPRPG' => 'BAГОНЫ C ПЕРЕРАБОТКОЙ ПРОШЛЫЙ ГOД',
        'VAGBPPG' => 'BAГОНЫ БEЗ ПЕРЕРАБОТКИ ПРОШЛЫЙ ГOД',
        'PRSPRPG' => 'ПРОСТОЙ C ПЕРЕРАБОТКОЙ ПРОШЛЫЙ ГOД',
        'PRSBPPG' => 'ПРОСТОЙ БEЗ ПЕРЕРАБОТКИ ПРОШЛЫЙ ГОД',
        'PARKPG' => 'PП ПРОШЛЫЙ ГOД',
        'PERGOPG' => 'ПРОСТОЙ HA ГOPKЕ ПРОШЛЫЙ ГOД',
        'DLINAPG' => 'ДЛИНА COCTABA ПРОШЛЫЙ ГOД',
        'NEISP' => 'ВАГОНЫ TEXHИЧЕСКИ HEИCПPАВНЫЕ'
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['ESR','NOD','PROSPER','PROSBPR','PARK','PERGOR','VAGPRPG','VAGBPPG','PRSPRPG','PRSBPPG','PARKPG',
      'PERGOPG','DLINAPG','NEISP'],'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      [['ESR','NOD','PROSPER','PROSBPR','PARK','PERGOR','VAGPRPG','VAGBPPG','PRSPRPG','PRSBPPG','PARKPG',
      'PERGOPG','DLINAPG','NEISP'], 'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['ESR', 'string', 'max' => 6, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-ти знаков'],
      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],
    
      [['ESR','NOD','PROSPER','PROSBPR','PARK','PERGOR','VAGPRPG','VAGBPPG','PRSPRPG','PRSBPPG','PARKPG',
      'PERGOPG','DLINAPG','NEISP'],'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],


    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0181_SORTST}}';

    }
}
?>

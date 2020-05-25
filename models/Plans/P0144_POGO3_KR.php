<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0144_POGO3_KR  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'RPS' => 'КОД РПС',
        'VS' => 'ВСЕГО НА ВСЕ',
        'OKT' => 'ОКТЯБРСК',
        'KLN' => 'КАЛИНИНГ',
        'BEL' => 'БЕЛОРУСС',
        'MSK' => 'МОСКОВСК',
        'GRK' => 'ГОРЬКОВС',
        'SEV' => 'СЕВЕРНУЮ',
        'UZP' => 'ЮГО-ЗАПАД',
        'LVV' => 'ЛЬВОВСКУЮ',
        'MLD' => 'МОЛДАВСК',
        'ODS' => 'ОДЕССКУЮ',
        'UGN' => 'ЮЖНУЮ',
        'PRD' => 'ПРИДНЕПР',
        'DON' => 'ДОНЕЦКУЮ',
        'SKV' => 'СЕВ-КАВКЗ',
        'AZR' => 'АЗЕРБАЙДЖ',
        'ARM' => 'АРМЯНСКУЮ',
        'UVS' => 'ЮГО-ВОСТЧ',
        'PRV' => 'ПРИВОЛЖС',
        'KUB' => 'КУЙБЫШЕВ',
        'ZKZ' => 'ЗАП-КАЗАХ',
        'CLN' => 'ЦЕЛИННУЮ',
        'ALM' => 'АЛМА-АТИН',
        'SAZ' => 'СР-АЗИАТС',
        'SVR' => 'СВЕРДЛОВС',
        'JUR' => 'ЮЖНО-УРАЛ',
        'ZSB' => 'ЗАП-СИБИР',
        'KRS' => 'КРАСНОЯРС',
        'VSB' => 'ВОС-СИБИР',
        'ZAB' => 'ЗАБАЙКАЛ',
        'DVS' => 'Д-ВОСТОЧ',
        'TRK' => 'ТУРКМЕНС',
        'GRZ' => 'ГРУЗИНСК',
        'KRG' => 'КИРГИЗСК',
        'TDG' => 'ТАДЖИКСК',
        'SAH' => 'САХАЛИНС',
        'EST' => 'ЭСТОНСК',
        'LAT' => 'ЛАТВИЙС',
        'LIT' => 'ЛИТОВСК',
        'YKT' => 'Ж.Д. ЯКУТИИ',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [

      [['NOD','RPS','VS','OKT','KLN','BEL','MSK','GRK','SEV','UZP','LVV','MLD','ODS','UGN','PRD','DON','SKV','AZR','ARM','UVS',
      'PRV','KUB','ZKZ','CLN','ALM','SAZ','SVR','JUR','ZSB','KRS','VSB','ZAB','DVS','TRK','GRZ','KRG','TDG','SAH','EST','LAT',
      'LIT'], 'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','RPS','VS','OKT','KLN','BEL','MSK','GRK','SEV','UZP','LVV','MLD','ODS','UGN','PRD','DON','SKV','AZR','ARM','UVS',
      'PRV','KUB','ZKZ','CLN','ALM','SAZ','SVR','JUR','ZSB','KRS','VSB','ZAB','DVS','TRK','GRZ','KRG','TDG','SAH','EST','LAT',
      'LIT','YKT'], 'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более 2-х знаков'],

      [['YKT'], 'default', 'value' => 0],

      [['NOD','RPS','VS','OKT','KLN','BEL','MSK','GRK','SEV','UZP','LVV','MLD','ODS','UGN','PRD','DON','SKV','AZR','ARM','UVS',
      'PRV','KUB','ZKZ','CLN','ALM','SAZ','SVR','JUR','ZSB','KRS','VSB','ZAB','DVS','TRK','GRZ','KRG','TDG','SAH','EST','LAT',
      'LIT','YKT'], 'number', 'min'=>0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],

    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0144_POGO3_KR}}';
    }
}
?>

<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0327_STAT  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'STATNAGR' => 'ЗАДАНИЕ ПО СТАТНАГРУЗКЕ',
        'OSTSORT' => 'ОСТАТОК ПОД СОРТИРОВКУ',
        'OBORTRZ' => 'ОБОРОТ ТРАНЗИТНОГО ВАГОНА',
        'SD499' => 'СДАЧА ГРУЗОВЫХ ВАГОНОВ ПО КОЭФФИЦИЕНТУ ЗА МЕСЯЦ ПРОШЛОГО ГОДА',
        'SD470' => 'КОЭФФИЦИЕНТ СДАЧИ ГРУЖЕНЫХ ЦИСТЕРН',
        'SD420' => 'КОЭФФИЦИЕНТ СДАЧИ ПО КРЫТЫМ',
        'SD440' => 'КОЭФФИЦИЕНТ СДАЧИ ПО ПЛАТФОРМАМ',
        'SD460' => 'КОЭФФИЦИЕНТ СДАЧИ ПО ПОЛУВАГОНАМ',
        'SD490' => 'КОЭФФИЦИЕНТ СДАЧИ ПО ПРОЧИМ',
        'SD493' => 'КОЭФФИЦИЕНТ СДАЧИ ПО ЦЕМЕНТОВОЗАМ',
        'SD495' => 'КОЭФФИЦИЕНТ СДАЧИ ПО ЗЕРНОВОЗАМ',
        'REZERV1' => 'РЕЗЕРВ',
        'REZERV2' => 'РЕЗЕРВ',
        'REZERV3' => 'РЕЗЕРВ',
        'OBOR99' => 'ОБОРОТ ПОРОЖНИХ ВАГОНОВ',
        'OBOR20' => 'ОБОРОТ КРЫТЫХ',
        'OBOR40' => 'ОБОРОТ ПЛАТФОРМ',
        'OBOR60' => 'ОБОРОТ ПОЛУВАГОНОВ',
        'OBOR70' => 'ОБОРОТ ЦИСТЕРН',
        'OBOR90' => 'ОБОРОТ ПРОЧИХ',
        'OBOR93' => 'ОБОРОТ ЦЕМЕНТОВОЗОВ',
        'OBOR95' => 'ОБОРОТ ЗЕРНОВОЗОВ',
        'REZERV4' => 'РЕЗЕРВ',
        'REZERV5' => 'РЕЗЕРВ',
        'REZERV6' => 'РЕЗЕРВ',
        'SORT20' => 'СОРТИРОВКА КРЫТЫХ',
        'SORT40' => 'СОРТИРОВКА ПЛАТФОРМ',
        'SORT60' => 'СОРТИРОВКА ПОЛУВАГОНОВ',
        'SORT70' => 'СОРТИРОВКА ЦИСТЕРН',
        'SORT87' => 'СОРТИРОВКА РЕФРЕЖЕРАТОРОВ',
        'SORT93' => 'СОРТИРОВКА ЦЕМЕНТОВОЗОВ',
        'SORT95' => 'СОРТИРОВКА ЗЕРНОВОЗОВ',
        'SORT96' => 'СОРТИРОВКА ФИТИНГОВЫХ',
        'SORT94' => 'СОРТИРОВКА ОКАТЫШЕВОЗОВ',
        'SORT92' => 'СОРТИРОВКА МИНЕРАЛОВОЗОВ',
        'SORT90' => 'СОРТИРОВКА ПРОЧИХ',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      [['NOD','STATNAGR','OSTSORT','OBORTRZ','SD499','SD470','SD420','SD440','SD460','SD490','SD493','SD495','REZERV1','REZERV2','REZERV3','OBOR99',
      'OBOR20','OBOR40','OBOR60','OBOR70', 'OBOR90','OBOR93','OBOR95','REZERV4','REZERV5','REZERV6','SORT20','SORT40','SORT60','SORT70','SORT87',
      'SORT93','SORT95','SORT96','SORT94','SORT92','SORT90'],'required','message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','STATNAGR','OSTSORT','OBORTRZ','SD499','SD470','SD420','SD440','SD460','SD490','SD493','SD495','REZERV1','REZERV2','REZERV3','OBOR99',
      'OBOR20','OBOR40','OBOR60','OBOR70','OBOR90','OBOR93','OBOR95','REZERV4','REZERV5','REZERV6','SORT20','SORT40','SORT60','SORT70','SORT87',
      'SORT93','SORT95','SORT96','SORT94','SORT92','SORT90'], 'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['NOD','STATNAGR','OSTSORT','OBORTRZ','SD499','SD470','SD420','SD440','SD460','SD490','SD493','SD495','REZERV1','REZERV2','REZERV3','OBOR99',
      'OBOR20','OBOR40','OBOR60','OBOR70','OBOR90','OBOR93','OBOR95','REZERV4','REZERV5','REZERV6','SORT20','SORT40','SORT60','SORT70','SORT87',
      'SORT93','SORT95','SORT96','SORT94','SORT92','SORT90'],'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],


    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0327_STAT}}';
    }
}
?>

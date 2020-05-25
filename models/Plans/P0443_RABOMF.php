<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0443_RABOMF  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'POGRO' => 'ПОГРУЗКА ОКАТЫШЕВЕВОЗОВ',
        'VIGRO' => 'ВЫГРУЗКА ОКАТЫШЕВЕВОЗОВ',
        'REGLO' => 'РЕГУЛИРОВКА ОКАТЫШЕВЕВОЗОВ',
        'PRIO' => 'ПРИЕМ ВСЕГО ОКАТЫШЕВЕВОЗОВ',
        'PRGRO' => 'ПРИЕМ ГРУЖЕНЫХ ОКАТЫШЕВЕВОЗОВ',
        'PRPRO' => 'ПРИЕМ ПОРОЖНИХ ОКАТЫШЕВЕВОЗОВ',
        'SDAO' => 'СДАЧА ВСЕГО ОКАТЫШЕВЕВОЗОВ',
        'SDGRO' => 'СДАЧА ГРУЖЕНЫХ ОКАТЫШЕВЕВОЗОВ',
        'SDPRO' => 'СДАЧА ПОРОЖНИХ ОКАТЫШЕВЕВОЗОВ',
        'PARKO' => 'РП ОКАТЫШЕВЕВОЗОВ',
        'PPORO' => 'РП ПОРОЖНИХ ОКАТЫШЕВЕВОЗОВ',
        'TRANO' => 'ТРАНЗИТ ОКАТЫШЕВЕВОЗОВ',
        'MESGRO' => 'МЕСТНЫЕ ОКАТЫШЕВЕВОЗЫ',
        'MESSBO' => 'МЕСТНЫЕ ДЛЯ СЕБЯ ОКАТЫШЕВЕВОЗЫ',
        'OBORTO' => 'ОБОРОТ РАБ. ВАГОНОВ ОКАТЫШЕВЕВОЗОВ',
        'OBRMESO' => 'ОБОРОТ МЕСТНЫХ ВАГОНОВ ОКАТЫШЕВЕВОЗОВ',
        'POGRM' => 'ПОГРУЗКА МИНЕРАЛОВОЗОВ',
        'VIGRM' => 'ВЫГРУЗКА МИНЕРАЛОВОЗОВ',
        'REGLM' => 'РЕГУЛИРОВКА МИНЕРАЛОВОЗОВ',
        'PRIM' => 'ПРИЕМ ВСЕГО МИНЕРАЛОВОЗОВ',
        'PRGRM' => 'ПРИЕМ ГРУЖЕНЫХ МИНЕРАЛОВОЗОВ',
        'PRPRM' => 'ПРИЕМ ПОРОЖНИХ МИНЕРАЛОВОЗОВ',
        'SDAM' => 'СДАЧА ВСЕГО МИНЕРАЛОВОЗОВ',
        'SDGRM' => 'СДАЧА ГРУЖЕНЫХ МИНЕРАЛОВОЗОВ',
        'SDPRM' => 'СДАЧА ПОРОЖНИХ МИНЕРАЛОВОЗОВ',
        'PARKM' => 'РП  МИНЕРАЛОВОЗОВ',
        'PPORM' => 'РП ПОРОЖНИХ МИНЕРАЛОВОЗОВ',
        'TRANM' => 'ТРАНЗИТ МИНЕРАЛОВОЗОВ',
        'MESGRM' => 'МЕСТНЫЕ МИНЕРАЛОВОЗЫ',
        'MESSBM' => 'МЕСТНЫЕ ДЛЯ СЕБЯ  МИНЕРАЛОВОЗЫ',
        'OBORTM' => 'ОБОРОТ РАБ.ВАГ. МИНЕРАЛОВОЗОВ',
        'OBRMESM' => 'ОБОРОТ МЕСТНЫХ ВАГОНОВ МИНЕРАЛОВОЗОВ',
        'POGRF' => 'ПОГРУЗКА ФИТИНГОВЫХ',
        'VIGRF' => 'ВЫГРУЗКА ФИТИНГОВЫХ',
        'REGLF' => 'РЕГУЛИРОВКА ФИТИНГОВЫХ',
        'PRIF' => 'ПРИЕМ ВСЕГО ФИТИНГОВЫХ',
        'PRGRF' => 'ПРИЕМ ГРУЖЕНЫХ ФИТИНГОВЫХ',
        'PRPRF' => 'ПРИЕМ ПОРОЖНИХ ФИТИНГОВЫХ',
        'SDAF' => 'СДАЧА ВСЕГО ФИТИНГОВЫХ',
        'SDGRF' => 'СДАЧА ГРУЖЕНЫХ ФИТИНГОВЫХ',
        'SDPRF' => 'СДАЧА ПОРОЖНИХ ФИТИНГОВЫХ',
        'PARKF' => 'РП ФИТИНГОВЫХ',
        'PPORF' => 'РП ПОРОЖНИХ ФИТИНГОВЫХ',
        'TRANF' => 'ТРАНЗИТ ФИТИНГОВЫХ',
        'MESGRF' => 'МЕСТНЫЕ ФИТИНГОВЫЕ',
        'MESSBF' => 'МЕСТНЫЕ ДЛЯ СЕБЯ ФИТИНГОВЫЕ',
        'OBORTF' => 'ОБОРОТ РАБ. ВАГОНОВ ФИТИНГОВЫХ',
        'OBRMESF' => 'ОБОРОТ МЕСТНЫХ ВАГОНОВ ФИТИНГОВЫХ',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      [['NOD','POGRO','VIGRO','REGLO','PRIO','PRGRO','PRPRO','SDAO','SDGRO','SDPRO','PARKO','PPORO','TRANO','MESGRO','MESSBO','OBORTO','OBRMESO','POGRM',
      'VIGRM','REGLM','PRIM','PRGRM','PRPRM','SDAM','SDGRM','SDPRM','PARKM','PPORM','TRANM','MESGRM','MESSBM','OBORTM','OBRMESM','POGRF','VIGRF','REGLF',
      'PRIF','PRGRF','PRPRF','SDAF','SDGRF','SDPRF','PARKF','PPORF','TRANF','MESGRF','MESSBF','OBORTF','OBRMESF'],'required',
       'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','POGRO','VIGRO','REGLO','PRIO','PRGRO','PRPRO','SDAO','SDGRO','SDPRO','PARKO','PPORO','TRANO','MESGRO','MESSBO','OBORTO','OBRMESO','POGRM',
      'VIGRM','REGLM','PRIM','PRGRM','PRPRM','SDAM','SDGRM','SDPRM','PARKM','PPORM','TRANM','MESGRM','MESSBM','OBORTM','OBRMESM','POGRF','VIGRF','REGLF',
      'PRIF','PRGRF','PRPRF','SDAF','SDGRF','SDPRF','PARKF','PPORF','TRANF','MESGRF','MESSBF','OBORTF','OBRMESF'], 'integer',
       'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['NOD','POGRO','VIGRO','REGLO','PRIO','PRGRO','PRPRO','SDAO','SDGRO','SDPRO','PARKO','PPORO','TRANO','MESGRO','MESSBO','OBORTO','OBRMESO','POGRM',
      'VIGRM','REGLM','PRIM','PRGRM','PRPRM','SDAM','SDGRM','SDPRM','PARKM','PPORM','TRANM','MESGRM','MESSBM','OBORTM','OBRMESM','POGRF','VIGRF','REGLF',
      'PRIF','PRGRF','PRPRF','SDAF','SDGRF','SDPRF','PARKF','PPORF','TRANF','MESGRF','MESSBF','OBORTF','OBRMESF'],'number',
       'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],


    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0443_RABOMF}}';
    }
}
?>

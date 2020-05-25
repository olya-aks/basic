<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0336_NORM_KF  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'NEISPR' => 'КОЛИЧЕСТВО НЕИСПРАВНЫХ',
        'KSDVS' => 'КОЭФФИЦИЕНТ СДАЧИ ПО ДОРОГЕ',
        'ZAN20' => 'ЗАНЯТО КРЫТЫХ',
        'ZAN40' => 'ЗАНЯТО ПЛАТФОРМ',
        'ZAN60' => 'ЗАНЯТО ПОЛУВАГОНОВ',
        'ZAN90' => 'ЗАНЯТО ПРОЧИХ',
        'OSV20' => 'ОСВОБОЖДЕНО КРЫТЫХ',
        'OSV40' => 'ОСВОБОЖДЕНО ПЛАТФОРМ',
        'OSV60' => 'ОСВОБОЖДЕНО ПОЛУВАГОНОВ',
        'OSV90' => 'ОСВОБОЖДЕНО ПРОЧИХ',
        'NSP60' => 'НЕИСПРАВНЫХ ПОЛУВАГОНОВ',
        'NSP70' => 'НЕИСПРАВНЫХ ЦИСТЕРН',
        'M70VS' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦИСТЕРНЫ НА ДОРОГУ',
        'M7001' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦИСТЕРНЫ НА НОД-01',
        'M7002' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦИСТЕРНЫ НА НОД-02',
        'M7006' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦИСТЕРНЫ НА НОД-03',
        'M7007' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦИСТЕРНЫ НА НОД-04',
        'M7008' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦИСТЕРНЫ НА НОД-05',
        'M7013' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦИСТЕРНЫ НА НОД-06',
        'M7015' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦИСТЕРНЫ НА НОД-07',
        'M87VS' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ РЕФРЕЖЕРАТОРЫ НА ДОРОГУ',
        'M8701' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ РЕФРЕЖЕРАТОРЫ НА НОД-01',
        'M8702' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ РЕФРЕЖЕРАТОРЫ НА НОД-02',
        'M8706' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ РЕФРЕЖЕРАТОРЫ НА НОД-03',
        'M8707' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ РЕФРЕЖЕРАТОРЫ НА НОД-04',
        'M8708' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ РЕФРЕЖЕРАТОРЫ НА НОД-05',
        'M8713' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ РЕФРЕЖЕРАТОРЫ НА НОД-06',
        'M8715' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ РЕФРЕЖЕРАТОРЫ НА НОД-07',
        'M90VS' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ПРОЧИЕ НА ДОРОГУ',
        'M9001' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ПРОЧИЕ НА НОД-01',
        'M9002' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ПРОЧИЕ НА НОД-02',
        'M9006' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ПРОЧИЕ НА НОД-03',
        'M9007' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ПРОЧИЕ НА НОД-04',
        'M9008' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ПРОЧИЕ НА НОД-05',
        'M9013' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ПРОЧИЕ НА НОД-06',
        'M9015' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ПРОЧИЕ НА НОД-07',
        'M93VS' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦЕМЕНТОВОЗЫ НА ДОРОГУ',
        'M9301' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦЕМЕНТОВОЗЫ НА НОД-01',
        'M9302' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦЕМЕНТОВОЗЫ НА НОД-02',
        'M9306' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦЕМЕНТОВОЗЫ НА НОД-03',
        'M9307' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦЕМЕНТОВОЗЫ НА НОД-04',
        'M9308' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦЕМЕНТОВОЗЫ НА НОД-05',
        'M9313' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦЕМЕНТОВОЗЫ НА НОД-06',
        'M9315' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЦЕМЕНТОВОЗЫ НА НОД-07',
        'M95VS' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЗЕРНОВОЗЫ НА ДОРОГУ',
        'M9501' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЗЕРНОВОЗЫ НА НОД-01',
        'M9502' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЗЕРНОВОЗЫ НА НОД-02',
        'M9506' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЗЕРНОВОЗЫ НА НОД-03',
        'M9507' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЗЕРНОВОЗЫ НА НОД-04',
        'M9508' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЗЕРНОВОЗЫ НА НОД-05',
        'M9513' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЗЕРНОВОЗЫ НА НОД-06',
        'M9515' => 'МЕСТНЫЙ ГРУЗ ПОД ВЫГРУЗКУ ЗЕРНОВОЗЫ НА НОД-07',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      //[['ESR', 'NOD','PLNVAG','PLNTON'], 'trim'],
      [['NOD','NEISPR','KSDVS','ZAN20','ZAN40','ZAN60','ZAN90','OSV20','OSV40','OSV60','OSV90','NSP60','NSP70','M70VS','M7001','M7002','M7006','M7007',
      'M7008','M7013','M7015','M87VS','M8701','M8702','M8706','M8707','M8708','M8713','M8715','M90VS','M9001','M9002','M9006','M9007','M9008','M9013',
      'M9015','M93VS','M9301','M9302','M9306','M9307','M9308','M9313','M9315','M95VS','M9501','M9502','M9506','M9507','M9508','M9513','M9515'],
      'required', 'message' => 'Поле {attribute} обязательно для заполнения'],

      [['NOD','NEISPR','KSDVS','ZAN20','ZAN40','ZAN60','ZAN90','OSV20','OSV40','OSV60','OSV90','NSP60','NSP70','M70VS','M7001','M7002','M7006','M7007',
      'M7008','M7013','M7015','M87VS','M8701','M8702','M8706','M8707','M8708','M8713','M8715','M90VS','M9001','M9002','M9006','M9007','M9008','M9013',
      'M9015','M93VS','M9301','M9302','M9306','M9307','M9308','M9313','M9315','M95VS','M9501','M9502','M9506','M9507','M9508','M9513','M9515'],
       'integer', 'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более {max}-х знаков'],

      [['NOD','NEISPR','KSDVS','ZAN20','ZAN40','ZAN60','ZAN90','OSV20','OSV40','OSV60','OSV90','NSP60','NSP70','M70VS','M7001','M7002','M7006','M7007',
      'M7008','M7013','M7015','M87VS','M8701','M8702','M8706','M8707','M8708','M8713','M8715','M90VS','M9001','M9002','M9006','M9007','M9008','M9013',
      'M9015','M93VS','M9301','M9302','M9306','M9307','M9308','M9313','M9315','M95VS','M9501','M9502','M9506','M9507','M9508','M9513','M9515'],
      'number', 'min'=> 0, 'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],


    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0336_NORM_KF}}';
    }
}
?>
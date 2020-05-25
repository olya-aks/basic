<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0191_MESTRN_  extends ActiveRecord
{
  public function attributeLabels() {
      return [
        'NOD' => 'НОД',
        'DATE' => 'РАСЧЕТНАЯ ДАТА',
        'KVKR' => 'МЕСТНЫЙ ГРУЗ КРЫТЫЕ',
        'KVPL' => 'МЕСТНЫЙ ГРУЗ ПЛАТФОРМЫ',
        'KVPV' => 'МЕСТНЫЙ ГРУЗ ПОЛУВАГОНЫ',
        'PARKV' => 'РАБОЧИЙ ПАРК ВСЕГО',
        'PARKGR' => 'РАБОЧИЙ ПАРК ГРУЖЕНЫХ',
        'PARKPR' => 'РАБОЧИЙ ПАРК ПОРОЖНИХ',
        'PORKR' => 'РАБОЧИЙ ПАРК ПОРОЖНИХ КРЫТЫЕ',
        'PORPL' => 'РАБОЧИЙ ПАРК ПОРОЖНИХ ПЛАТФОРМЫ',
        'PORPV' => 'РАБОЧИЙ ПАРК ПОРОЖНИХ ПОЛУВАГОНЫ',
        'PORCS' => 'РАБОЧИЙ ПАРК ПОРОЖНИХ ЦИЧТЕРНЫ',
        'PORZR' => 'РАБОЧИЙ ПАРК ПОРОЖНИХ ЗЕРНОВОЗЫ',
        'PORRF' => 'РАБОЧИЙ ПАРК ПОРОЖНИХ РЕФРЕЖЕРАТОРЫ',
        'PORPR' => 'РАБОЧИЙ ПАРК ПОРОЖНИХ ПРОЧИЕ',
        'PORCM' => 'РАБОЧИЙ ПАРК ПОРОЖНИХ ЦЕМЕНТОЫОЗЫ',
        'NAL01' => 'НАЛИЧИЕ МЕСТНОГО ГРУЗА НОД-01',
        'NAL02' => 'НАЛИЧИЕ МЕСТНОГО ГРУЗА НОД-02',
        'NAL06' => 'НАЛИЧИЕ МЕСТНОГО ГРУЗА НОД-06',
        'NAL07' => 'НАЛИЧИЕ МЕСТНОГО ГРУЗА НОД-07',
        'NAL08' => 'НАЛИЧИЕ МЕСТНОГО ГРУЗА НОД-08',
        'NAL13' => 'НАЛИЧИЕ МЕСТНОГО ГРУЗА НОД-13',
        'NAL15' => 'НАЛИЧИЕ МЕСТНОГО ГРУЗА НОД-15',
        'NALVS' => 'НАЛИЧИЕ МЕСТНОГО ГРУЗА ВСЕГО ПО ДОРОГЕ',
        'TRALKS' => 'ТРАНЗИТ НА ВЫХОД АЛЕКСАНДРОВ',
        'TRBELK' => 'ТРАНЗИТ НА ВЫХОД БЕЛЬКОВО',
        'TRPETU' => 'ТРАНЗИТ НА ВЫХОД ПЕТУШКИ',
        'TRCHER' => 'ТРАНЗИТ НА ВЫХОД ЧЕРУСТИ',
        'TRKUST' => 'ТРАНЗИТ НА ВЫХОД КУСТАРЕВКА',
        'TRKLIM' => 'ТРАНЗИТ НА ВЫХОД КЛИМОВ',
        'TRRJS2' => 'ТРАНЗИТ НА ВЫХОД РЯЖСК 2',
        'TRRJS1' => 'ТРАНЗИТ НА ВЫХОД РЯЖСК 1',
        'TRPAVL' => 'ТРАНЗИТ НА ВЫХОД ПАВЕЛЕЦ',
        'TRVOLV' => 'ТРАНЗИТ НА ВЫХОД ВОЛОВО',
        'TREFRM' => 'ТРАНЗИТ НА ВЫХОД ЕФРЕМОВ',
        'TRELEC' => 'ТРАНЗИТ НА ВЫХОД ЕЛЕЦ',
        'TRKAST' => 'ТРАНЗИТ НА ВЫХОД КАСТОРНАЯ',
        'TRKURS' => 'ТРАНЗИТ НА ВЫХОД КУРСК',
        'TRGOTN' => 'ТРАНЗИТ НА ВЫХОД ГОТНЯ',
        'TRVOLF' => 'ТРАНЗИТ НА ВЫХОД ВОЛФИНО',
        'TRZERN' => 'ТРАНЗИТ НА ВЫХОД ЗЕРНОВО',
        'TRVITM' => 'ТРАНЗИТ НА ВЫХОД ВИТЕМЛЯ',
        'TRZAKP' => 'ТРАНЗИТ НА ВЫХОД ЗАКОПЫТЬЕ',
        'TRSURG' => 'ТРАНЗИТ НА ВЫХОД СУРАЖ',
        'TRSHES' => 'ТРАНЗИТ НА ВЫХОД ШЕСТЕРОВКА',
        'TRKRAS' => 'ТРАНЗИТ НА ВЫХОД КРАСНОЕ',
        'TRZAOL' => 'ТРАНЗИТ НА ВЫХОД ЗАОЛЬША',
        'TROSUG' => 'ТРАНЗИТ НА ВЫХОД ОСУГА(РЖЕВ)',
        'TRSHAH' => 'ТРАНЗИТ НА ВЫХОД ШАХОВСКАЯ',
        'TRPOVR' => 'ТРАНЗИТ НА ВЫХОД ПОВАРОВО',
        'TRHOVR' => 'ТРАНЗИТ НА ВЫХОД ХОВРИНО',
        'TRSAVL' => 'ТРАНЗИТ НА ВЫХОД САВЕЛОВО',
        'TRVSEG' => 'ТРАНЗИТ НА ВЫХОД ВСЕГО',
      ];
  }
  /**
   * @return array the validation rules.
   */

  public function rules()
  {
    return [
      [['NOD','KVKR','KVPL','KVPV','PARKV','PARKGR','PARKPR','PORKR','PORPL','PORPV','PORCS','PORZR','PORRF','PORPR','PORCM',
      'NAL01','NAL02','NAL06','NAL07','NAL08','NAL13','NAL15','NALVS','TRALKS','TRBELK','TRPETU','TRCHER','TRKUST','TRKLIM','TRRJS2',
      'TRRJS1','TRPAVL','TRVOLV','TREFRM','TRELEC','TRKAST','TRKURS','TRGOTN','TRVOLF','TRZERN','TRVITM','TRZAKP','TRSURG','TRSHES',
      'TRKRAS','TRZAOL','TROSUG','TRSHAH','TRPOVR','TRHOVR','TRSAVL','TRVSEG'],'required',
       'message' => 'Поле {attribute} обязательно для заполнения'],

       [['NOD','KVKR','KVPL','KVPV','PARKV','PARKGR','PARKPR','PORKR','PORPL','PORPV','PORCS','PORZR','PORRF','PORPR','PORCM',
       'NAL01','NAL02','NAL06','NAL07','NAL08','NAL13','NAL15','NALVS','TRALKS','TRBELK','TRPETU','TRCHER','TRKUST','TRKLIM','TRRJS2',
       'TRRJS1','TRPAVL','TRVOLV','TREFRM','TRELEC','TRKAST','TRKURS','TRGOTN','TRVOLF','TRZERN','TRVITM','TRZAKP','TRSURG','TRSHES',
       'TRKRAS','TRZAOL','TROSUG','TRSHAH','TRPOVR','TRHOVR','TRSAVL','TRVSEG'],'integer',
        'message' => 'Поле {attribute} должно быть целочисленным'],

      ['NOD', 'string', 'max' => 2, 'min' => 1, 'tooLong' => 'Поле {attribute} должно иметь не более 2-х знаков'],

      [['NOD','KVKR','KVPL','KVPV','PARKV','PARKGR','PARKPR','PORKR','PORPL','PORPV','PORCS','PORZR','PORRF','PORPR','PORCM',
      'NAL01','NAL02','NAL06','NAL07','NAL08','NAL13','NAL15','NALVS','TRALKS','TRBELK','TRPETU','TRCHER','TRKUST','TRKLIM','TRRJS2',
      'TRRJS1','TRPAVL','TRVOLV','TREFRM','TRELEC','TRKAST','TRKURS','TRGOTN','TRVOLF','TRZERN','TRVITM','TRZAKP','TRSURG','TRSHES',
      'TRKRAS','TRZAOL','TROSUG','TRSHAH','TRPOVR','TRHOVR','TRSAVL','TRVSEG'],'number', 'min'=> 0,
      'tooSmall' => 'Поле {attribute} не должно быть отрицательным'],

    ];
  }
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0191_MESTRN_}}';
    }
}
?>

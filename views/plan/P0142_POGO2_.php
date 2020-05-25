<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
?>
<?php
$post = Yii::$app->request->post();
if(!empty($post)): //Проверка параметров(ширина и длина) передаваемых модальному окну java-скриптом?>


<div class="wraps">
  <h4>ПЛАН ПОГРУЗКИ ПО ГО-2 ПО НОД M.9142</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная Дата</th>
          <th colspan="2">Всего</th>
          <th colspan="2">Уголь</th>
          <th colspan="2">Углпр.</th>
          <th colspan="2">Кокс</th>
          <th colspan="2">Нефть</th>
          <th colspan="2">Гкнеф.</th>
          <th colspan="2">Торф</th>
          <th colspan="2">Флюсы.</th>
          <th colspan="2">Руд.ж.</th>
          <th colspan="2">Руд.ц.</th>
          <th colspan="2">Ч.мет.</th>
          <th colspan="2">Маш.об.</th>
          <th colspan="2">Меткон.</th>
          <th colspan="2">Метизы.</th>
          <th colspan="2">Метлом.</th>
          <th colspan="2">Схмаш.</th>
          <th colspan="2">Автом.</th>
          <th colspan="2">Цв.мет.</th>
          <th colspan="2">Удобр.</th>
          <th colspan="2">Xимикт.</th>
          <th colspan="2">Стр.гр.</th>
          <th colspan="2">Прмсыр.</th>
          <th colspan="2">Гр.шлк.</th>
          <th colspan="2">Огнеуп.</th>
          <th colspan="2">Цемент.</th>
          <th colspan="2">Лес.гр.</th>
          <th colspan="2">Глвлес.</th>
          <th colspan="2">Сахар</th>
          <th colspan="2">Мясо</th>
          <th colspan="2">Рыба</th>
          <th colspan="2">Овощи</th>
          <th colspan="2">Картоф.</th>
          <th colspan="2">Соль</th>
          <th colspan="2">Продтов.</th>
          <th colspan="2">Промтов.</th>
          <th colspan="2">Хлопок</th>
          <th colspan="2">Свекла</th>
          <th colspan="2">Зерно</th>
          <th colspan="2">Мука</th>
          <th colspan="2">Комбик.</th>
          <th colspan="2">Живнс.</th>
          <th colspan="2">Жмыхи.</th>
          <th colspan="2">Бумага</th>
          <th colspan="2">Перев.вс.</th>
          <th colspan="2">Првл.угл.</th>
          <th colspan="2">Првл.лес.</th>
          <th colspan="2">Импорт</th>
          <th colspan="2">Гр.конт.</th>
          <th colspan="2">Остальн.</th>
          <th colspan="2">Минудоб.</th>
          <th colspan="2">Москву</th>
          <th colspan="2">Мособл.</th>
          <th colspan="2">Изв.удб.</th>
          <th colspan="2">Минлесбумпром</th>
          <th colspan="2">Спиpт перевалка</th>
          <th colspan="2">Мипор.спирта</th>
          <th colspan="2">Спиpт</th>
        </tr>
        <tr class="row100 head">
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD']?></td>
          <td><?=$data['DATE']?></td>
          <td><?=$data['VVS']?></td>
          <td><?=$data['TVS']?></td>
          <td><?=$data['VUGOL']?></td>
          <td><?=$data['TUGOL']?></td>
          <td><?=$data['VUGLP']?></td>
          <td><?=$data['TUGLP']?></td>
          <td><?=$data['VKOKS']?></td>
          <td><?=$data['TKOKS']?></td>
          <td><?=$data['VNEFT']?></td>
          <td><?=$data['TNEFT']?></td>
          <td><?=$data['VKNEF']?></td>
          <td><?=$data['TKNEF']?></td>
          <td><?=$data['VTORF']?></td>
          <td><?=$data['TTORF']?></td>
          <td><?=$data['VFLUS']?></td>
          <td><?=$data['TFLUS']?></td>
          <td><?=$data['VRUDG']?></td>
          <td><?=$data['TRUDG']?></td>
          <td><?=$data['VRUDC']?></td>
          <td><?=$data['TRUDC']?></td>
          <td><?=$data['VCHMT']?></td>
          <td><?=$data['TCHMT']?></td>
          <td><?=$data['VMAOB']?></td>
          <td><?=$data['TMAOB']?></td>
          <td><?=$data['VMETK']?></td>
          <td><?=$data['TMETK']?></td>
          <td><?=$data['VMETZ']?></td>
          <td><?=$data['TMETZ']?></td>
          <td><?=$data['VMETL']?></td>
          <td><?=$data['TMETL']?></td>
          <td><?=$data['VCHMA']?></td>
          <td><?=$data['TCHMA']?></td>
          <td><?=$data['VAVTO']?></td>
          <td><?=$data['TAVTO']?></td>
          <td><?=$data['VCVMT']?></td>
          <td><?=$data['TCVMT']?></td>
          <td><?=$data['VUDOB']?></td>
          <td><?=$data['TUDOB']?></td>
          <td><?=$data['VHIMK']?></td>
          <td><?=$data['THIMK']?></td>
          <td><?=$data['VSTRG']?></td>
          <td><?=$data['TSTRG']?></td>
          <td><?=$data['VPRMS']?></td>
          <td><?=$data['TPRMS']?></td>
          <td><?=$data['VGRSH']?></td>
          <td><?=$data['TGRSH']?></td>
          <td><?=$data['VOGNE']?></td>
          <td><?=$data['TOGNE']?></td>
          <td><?=$data['VCEMN']?></td>
          <td><?=$data['TCEMN']?></td>
          <td><?=$data['VLESG']?></td>
          <td><?=$data['TLESG']?></td>
          <td><?=$data['VGLES']?></td>
          <td><?=$data['TGLES']?></td>
          <td><?=$data['VSAHR']?></td>
          <td><?=$data['TSAHR']?></td>
          <td><?=$data['VMISO']?></td>
          <td><?=$data['TMISO']?></td>
          <td><?=$data['VRIBA']?></td>
          <td><?=$data['TRIBA']?></td>
          <td><?=$data['VOVOC']?></td>
          <td><?=$data['TOVOC']?></td>
          <td><?=$data['VKART']?></td>
          <td><?=$data['TKART']?></td>
          <td><?=$data['VSOL']?></td>
          <td><?=$data['TSOL']?></td>
          <td><?=$data['VPROD']?></td>
          <td><?=$data['TPROD']?></td>
          <td><?=$data['VPROM']?></td>
          <td><?=$data['TPROM']?></td>
          <td><?=$data['VHLOP']?></td>
          <td><?=$data['THLOP']?></td>
          <td><?=$data['VSVEK']?></td>
          <td><?=$data['TSVEK']?></td>
          <td><?=$data['VZERN']?></td>
          <td><?=$data['TZERN']?></td>
          <td><?=$data['VMUKA']?></td>
          <td><?=$data['TMUKA']?></td>
          <td><?=$data['VKOMB']?></td>
          <td><?=$data['TKOMB']?></td>
          <td><?=$data['VGIVN']?></td>
          <td><?=$data['TGIVN']?></td>
          <td><?=$data['VGMIH']?></td>
          <td><?=$data['TGMIH']?></td>
          <td><?=$data['VBUMG']?></td>
          <td><?=$data['TBUMG']?></td>
          <td><?=$data['VPRVV']?></td>
          <td><?=$data['TPRVV']?></td>
          <td><?=$data['VPVUG']?></td>
          <td><?=$data['TPVUG']?></td>
          <td><?=$data['VPVLS']?></td>
          <td><?=$data['TPVLS']?></td>
          <td><?=$data['VPVIM']?></td>
          <td><?=$data['TPVIM']?></td>
          <td><?=$data['VKONT']?></td>
          <td><?=$data['TKONT']?></td>
          <td><?=$data['VOSGR']?></td>
          <td><?=$data['TOSGR']?></td>
          <td><?=$data['VUDBR']?></td>
          <td><?=$data['TUDBR']?></td>
          <td><?=$data['VMOSK']?></td>
          <td><?=$data['TMOSK']?></td>
          <td><?=$data['VMOBL']?></td>
          <td><?=$data['TMOBL']?></td>
          <td><?=$data['VIZUD']?></td>
          <td><?=$data['TIZUD']?></td>
          <td><?=$data['VMLBP']?></td>
          <td><?=$data['TMLBP']?></td>
          <td><?=$data['VSPRT']?></td>
          <td><?=$data['TSPRT']?></td>
          <td><?=$data['VMPSP']?></td>
          <td><?=$data['TMPSP']?></td>
          <td><?=$data['VSPVS']?></td>
          <td><?=$data['TSPVS']?></td>
        </tr>
      <?php  endforeach; ?>
    </table>
  </div>
  </div>
<button id="btn_show" class="myButton">Добавить</button>

<?= $this->renderAjax('errors');?>
<div id="errors_block"></div>


<form id=new>
  <h4>ВВЕДИТЕ ПЛАНОВЫЕ ПОКАЗАТЕЛИ:</h4>
  <div class="table100 ver2">
    <div id="add" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная Дата</th>
          <th colspan="2">Всего</th>
          <th colspan="2">Уголь</th>
          <th colspan="2">Углпр.</th>
          <th colspan="2">Кокс</th>
          <th colspan="2">Нефть</th>
          <th colspan="2">Гкнеф.</th>
          <th colspan="2">Торф</th>
          <th colspan="2">Флюсы.</th>
          <th colspan="2">Руд.ж.</th>
          <th colspan="2">Руд.ц.</th>
          <th colspan="2">Ч.мет.</th>
          <th colspan="2">Маш.об.</th>
          <th colspan="2">Меткон.</th>
          <th colspan="2">Метизы.</th>
          <th colspan="2">Метлом.</th>
          <th colspan="2">Схмаш.</th>
          <th colspan="2">Автом.</th>
          <th colspan="2">Цв.мет.</th>
          <th colspan="2">Удобр.</th>
          <th colspan="2">Xимикт.</th>
          <th colspan="2">Стр.гр.</th>
          <th colspan="2">Прмсыр.</th>
          <th colspan="2">Гр.шлк.</th>
          <th colspan="2">Огнеуп.</th>
          <th colspan="2">Цемент.</th>
          <th colspan="2">Лес.гр.</th>
          <th colspan="2">Глвлес.</th>
          <th colspan="2">Сахар</th>
          <th colspan="2">Мясо</th>
          <th colspan="2">Рыба</th>
          <th colspan="2">Овощи</th>
          <th colspan="2">Картоф.</th>
          <th colspan="2">Соль</th>
          <th colspan="2">Продтов.</th>
          <th colspan="2">Промтов.</th>
          <th colspan="2">Хлопок</th>
          <th colspan="2">Свекла</th>
          <th colspan="2">Зерно</th>
          <th colspan="2">Мука</th>
          <th colspan="2">Комбик.</th>
          <th colspan="2">Живнс.</th>
          <th colspan="2">Жмыхи.</th>
          <th colspan="2">Бумага</th>
          <th colspan="2">Перев.вс.</th>
          <th colspan="2">Првл.угл.</th>
          <th colspan="2">Првл.лес.</th>
          <th colspan="2">Импорт</th>
          <th colspan="2">Гр.конт.</th>
          <th colspan="2">Остальн.</th>
          <th colspan="2">Минудоб.</th>
          <th colspan="2">Москву</th>
          <th colspan="2">Мособл.</th>
          <th colspan="2">Изв.удб.</th>
          <th colspan="2">Минлесбумпром</th>
          <th colspan="2">Спиpт перевалка</th>
          <th colspan="2">Мипор.спирта</th>
          <th colspan="2">Спиpт</th>
        </tr>
        <tr class="row100 head">
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
          <th>Ваг</th>
          <th>Тон</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <!--td><input type="text" name = "DATE" class="form-control"/></td-->
          <td><input type="hidden" name = "DATE" /><?php date_default_timezone_set('Europe/Moscow');
            echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "VVS" class="form-control"/></td>
          <td><input type="text" name = "TVS" class="form-control"/></td>
          <td><input type="text" name = "VUGOL" class="form-control"/></td>
          <td><input type="text" name = "TUGOL" class="form-control"/></td>
          <td><input type="text" name = "VUGLP" class="form-control"/></td>
          <td><input type="text" name = "TUGLP" class="form-control"/></td>
          <td><input type="text" name = "VKOKS" class="form-control"/></td>
          <td><input type="text" name = "TKOKS" class="form-control"/></td>
          <td><input type="text" name = "VNEFT" class="form-control"/></td>
          <td><input type="text" name = "TNEFT" class="form-control"/></td>
          <td><input type="text" name = "VKNEF" class="form-control"/></td>
          <td><input type="text" name = "TKNEF" class="form-control"/></td>
          <td><input type="text" name = "VTORF" class="form-control"/></td>
          <td><input type="text" name = "TTORF" class="form-control"/></td>
          <td><input type="text" name = "VFLUS" class="form-control"/></td>
          <td><input type="text" name = "TFLUS" class="form-control"/></td>
          <td><input type="text" name = "VRUDG" class="form-control"/></td>
          <td><input type="text" name = "TRUDG" class="form-control"/></td>
          <td><input type="text" name = "VRUDC" class="form-control"/></td>
          <td><input type="text" name = "TRUDC" class="form-control"/></td>
          <td><input type="text" name = "VCHMT" class="form-control"/></td>
          <td><input type="text" name = "TCHMT" class="form-control"/></td>
          <td><input type="text" name = "VMAOB" class="form-control"/></td>
          <td><input type="text" name = "TMAOB" class="form-control"/></td>
          <td><input type="text" name = "VMETK" class="form-control"/></td>
          <td><input type="text" name = "TMETK" class="form-control"/></td>
          <td><input type="text" name = "VMETZ" class="form-control"/></td>
          <td><input type="text" name = "TMETZ" class="form-control"/></td>
          <td><input type="text" name = "VMETL" class="form-control"/></td>
          <td><input type="text" name = "TMETL" class="form-control"/></td>
          <td><input type="text" name = "VCHMA" class="form-control"/></td>
          <td><input type="text" name = "TCHMA" class="form-control"/></td>
          <td><input type="text" name = "VAVTO" class="form-control"/></td>
          <td><input type="text" name = "TAVTO" class="form-control"/></td>
          <td><input type="text" name = "VCVMT" class="form-control"/></td>
          <td><input type="text" name = "TCVMT" class="form-control"/></td>
          <td><input type="text" name = "VUDOB" class="form-control"/></td>
          <td><input type="text" name = "TUDOB" class="form-control"/></td>
          <td><input type="text" name = "VHIMK" class="form-control"/></td>
          <td><input type="text" name = "THIMK" class="form-control"/></td>
          <td><input type="text" name = "VSTRG" class="form-control"/></td>
          <td><input type="text" name = "TSTRG" class="form-control"/></td>
          <td><input type="text" name = "VPRMS" class="form-control"/></td>
          <td><input type="text" name = "TPRMS" class="form-control"/></td>
          <td><input type="text" name = "VGRSH" class="form-control"/></td>
          <td><input type="text" name = "TGRSH" class="form-control"/></td>
          <td><input type="text" name = "VOGNE" class="form-control"/></td>
          <td><input type="text" name = "TOGNE" class="form-control"/></td>
          <td><input type="text" name = "VCEMN" class="form-control"/></td>
          <td><input type="text" name = "TCEMN" class="form-control"/></td>
          <td><input type="text" name = "VLESG" class="form-control"/></td>
          <td><input type="text" name = "TLESG" class="form-control"/></td>
          <td><input type="text" name = "VGLES" class="form-control"/></td>
          <td><input type="text" name = "TGLES" class="form-control"/></td>
          <td><input type="text" name = "VSAHR" class="form-control"/></td>
          <td><input type="text" name = "TSAHR" class="form-control"/></td>
          <td><input type="text" name = "VMISO" class="form-control"/></td>
          <td><input type="text" name = "TMISO" class="form-control"/></td>
          <td><input type="text" name = "VRIBA" class="form-control"/></td>
          <td><input type="text" name = "TRIBA" class="form-control"/></td>
          <td><input type="text" name = "VOVOC" class="form-control"/></td>
          <td><input type="text" name = "TOVOC" class="form-control"/></td>
          <td><input type="text" name = "VKART" class="form-control"/></td>
          <td><input type="text" name = "TKART" class="form-control"/></td>
          <td><input type="text" name = "VSOL" class="form-control"/></td>
          <td><input type="text" name = "TSOL" class="form-control"/></td>
          <td><input type="text" name = "VPROD" class="form-control"/></td>
          <td><input type="text" name = "TPROD" class="form-control"/></td>
          <td><input type="text" name = "VPROM" class="form-control"/></td>
          <td><input type="text" name = "TPROM" class="form-control"/></td>
          <td><input type="text" name = "VHLOP" class="form-control"/></td>
          <td><input type="text" name = "THLOP" class="form-control"/></td>
          <td><input type="text" name = "VSVEK" class="form-control"/></td>
          <td><input type="text" name = "TSVEK" class="form-control"/></td>
          <td><input type="text" name = "VZERN" class="form-control"/></td>
          <td><input type="text" name = "TZERN" class="form-control"/></td>
          <td><input type="text" name = "VMUKA" class="form-control"/></td>
          <td><input type="text" name = "TMUKA" class="form-control"/></td>
          <td><input type="text" name = "VKOMB" class="form-control"/></td>
          <td><input type="text" name = "TKOMB" class="form-control"/></td>
          <td><input type="text" name = "VGIVN" class="form-control"/></td>
          <td><input type="text" name = "TGIVN" class="form-control"/></td>
          <td><input type="text" name = "VGMIH" class="form-control"/></td>
          <td><input type="text" name = "TGMIH" class="form-control"/></td>
          <td><input type="text" name = "VBUMG" class="form-control"/></td>
          <td><input type="text" name = "TBUMG" class="form-control"/></td>
          <td><input type="text" name = "VPRVV" class="form-control"/></td>
          <td><input type="text" name = "TPRVV" class="form-control"/></td>
          <td><input type="text" name = "VPVUG" class="form-control"/></td>
          <td><input type="text" name = "TPVUG" class="form-control"/></td>
          <td><input type="text" name = "VPVLS" class="form-control"/></td>
          <td><input type="text" name = "TPVLS" class="form-control"/></td>
          <td><input type="text" name = "VPVIM" class="form-control"/></td>
          <td><input type="text" name = "TPVIM" class="form-control"/></td>
          <td><input type="text" name = "VKONT" class="form-control"/></td>
          <td><input type="text" name = "TKONT" class="form-control"/></td>
          <td><input type="text" name = "VOSGR" class="form-control"/></td>
          <td><input type="text" name = "TOSGR" class="form-control"/></td>
          <td><input type="text" name = "VUDBR" class="form-control"/></td>
          <td><input type="text" name = "TUDBR" class="form-control"/></td>
          <td><input type="text" name = "VMOSK" class="form-control"/></td>
          <td><input type="text" name = "TMOSK" class="form-control"/></td>
          <td><input type="text" name = "VMOBL" class="form-control"/></td>
          <td><input type="text" name = "TMOBL" class="form-control"/></td>
          <td><input type="text" name = "VIZUD" class="form-control"/></td>
          <td><input type="text" name = "TIZUD" class="form-control"/></td>
          <td><input type="text" name = "VMLBP" class="form-control"/></td>
          <td><input type="text" name = "TMLBP" class="form-control"/></td>
          <td><input type="text" name = "VSPRT" class="form-control"/></td>
          <td><input type="text" name = "TSPRT" class="form-control"/></td>
          <td><input type="text" name = "VMPSP" class="form-control"/></td>
          <td><input type="text" name = "TMPSP" class="form-control"/></td>
          <td><input type="text" name = "VSPVS" class="form-control"/></td>
          <td><input type="text" name = "TSPVS" class="form-control"/></td>
        </tr>
      </table>
    </div>
  </div>
<button id="btn_save" type="submit" class="myButton" >Отправить</button>
</form>
<!--button class="styler">Кнопка</button-->
</div><!--КОНЕЦ БЛОКА-ОБЁРТКИ ДЛЯ СОДЕРЖИМОГО МОДАЛЬНОГО ОКНА -->


<?php else: //В случае провала выдаём мессадж ?>
    <div class="container">
        <h3>
            <p>Здесь должно отображаться Ваше изображение</p>
        </h3>
    </div>
<?php endif;?>

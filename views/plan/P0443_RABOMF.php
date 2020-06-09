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
  <h4>ПЛАН РАБОТЫ ОКАТЫШЕВЕВОЗОВ, МИНЕРАЛОВОЗОВ, ФИТИНГОВЫХ M.0443</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="3">НОД</th>
          <th rowspan="3">Расчетная дата</th>
          <th colspan="16">Окатышевевозы</th>
          <th colspan="16">Минераловозы</th>
          <th colspan="16">Фитинговые</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">Погрузка</th>
          <th rowspan="2">Выгрузка</th>
          <th rowspan="2">Регулировка</th>
          <th colspan="3">Прием</th>
          <th colspan="3">Сдача</th>
          <th rowspan="2">РП</th>
          <th rowspan="2">РП порожних</th>
          <th rowspan="2">Транзит</th>
          <th rowspan="2">Местные</th>
          <th rowspan="2">Местные для себя</th>
          <th colspan="2">Оборот</th>
          <th rowspan="2">Погрузка</th>
          <th rowspan="2">Выгрузка</th>
          <th rowspan="2">Регулировка</th>
          <th colspan="3">Прием</th>
          <th colspan="3">Сдача</th>
          <th rowspan="2">РП</th>
          <th rowspan="2">РП порожних</th>
          <th rowspan="2">Транзит</th>
          <th rowspan="2">Местные</th>
          <th rowspan="2">Местные для себя</th>
          <th colspan="2">Оборот</th>
          <th rowspan="2">Погрузка</th>
          <th rowspan="2">Выгрузка</th>
          <th rowspan="2">Регулировка</th>
          <th colspan="3">Прием</th>
          <th colspan="3">Сдача</th>
          <th rowspan="2">РП</th>
          <th rowspan="2">РП порожних</th>
          <th rowspan="2">Транзит</th>
          <th rowspan="2">Местные</th>
          <th rowspan="2">Местные для себя</th>
          <th colspan="2">Оборот</th>
        </tr>
        <tr class="row100 head">
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Раб. вагонов</th>
          <th>Местных вагонов</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Раб. вагонов</th>
          <th>Местных вагонов</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Раб. вагонов</th>
          <th>Местных вагонов</th>
        </tr>

      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['POGRO'] ?></td>
          <td><?=$data['VIGRO'] ?></td>
          <td><?=$data['REGLO'] ?></td>
          <td><?=$data['PRIO'] ?></td>
          <td><?=$data['PRGRO'] ?></td>
          <td><?=$data['PRPRO'] ?></td>
          <td><?=$data['SDAO'] ?></td>
          <td><?=$data['SDGRO'] ?></td>
          <td><?=$data['SDPRO'] ?></td>
          <td><?=$data['PARKO'] ?></td>
          <td><?=$data['PPORO'] ?></td>
          <td><?=$data['TRANO'] ?></td>
          <td><?=$data['MESGRO'] ?></td>
          <td><?=$data['MESSBO'] ?></td>
          <td><?=$data['OBORTO'] ?></td>
          <td><?=$data['OBRMESO'] ?></td>
          <td><?=$data['POGRM'] ?></td>
          <td><?=$data['VIGRM'] ?></td>
          <td><?=$data['REGLM'] ?></td>
          <td><?=$data['PRIM'] ?></td>
          <td><?=$data['PRGRM'] ?></td>
          <td><?=$data['PRPRM'] ?></td>
          <td><?=$data['SDAM'] ?></td>
          <td><?=$data['SDGRM'] ?></td>
          <td><?=$data['SDPRM'] ?></td>
          <td><?=$data['PARKM'] ?></td>
          <td><?=$data['PPORM'] ?></td>
          <td><?=$data['TRANM'] ?></td>
          <td><?=$data['MESGRM'] ?></td>
          <td><?=$data['MESSBM'] ?></td>
          <td><?=$data['OBORTM'] ?></td>
          <td><?=$data['OBRMESM'] ?></td>
          <td><?=$data['POGRF'] ?></td>
          <td><?=$data['VIGRF'] ?></td>
          <td><?=$data['REGLF'] ?></td>
          <td><?=$data['PRIF'] ?></td>
          <td><?=$data['PRGRF'] ?></td>
          <td><?=$data['PRPRF'] ?></td>
          <td><?=$data['SDAF'] ?></td>
          <td><?=$data['SDGRF'] ?></td>
          <td><?=$data['SDPRF'] ?></td>
          <td><?=$data['PARKF'] ?></td>
          <td><?=$data['PPORF'] ?></td>
          <td><?=$data['TRANF'] ?></td>
          <td><?=$data['MESGRF'] ?></td>
          <td><?=$data['MESSBF'] ?></td>
          <td><?=$data['OBORTF'] ?></td>
          <td><?=$data['OBRMESF'] ?></td>
        </tr>
      <?php  endforeach; ?>
    </table>
  </div>
</div>
<button id="btn_show" class="myButton">Добавить</button>
<?= $this->renderAjax('errors');?>
<div id="errors_block"></div>

<form id="new">
  <h4>ВВЕДИТЕ ПЛАНОВЫЕ ПОКАЗАТЕЛИ:</h4>
  <div class="table100 ver2">
    <div id="add" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="3">НОД</th>
          <th rowspan="3">Расчетная дата</th>
          <th colspan="16">Окатышевевозы</th>
          <th colspan="16">Минераловозы</th>
          <th colspan="16">Фитинговые</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">Погрузка</th>
          <th rowspan="2">Выгрузка</th>
          <th rowspan="2">Регулировка</th>
          <th colspan="3">Прием</th>
          <th colspan="3">Сдача</th>
          <th rowspan="2">РП</th>
          <th rowspan="2">РП порожних</th>
          <th rowspan="2">Транзит</th>
          <th rowspan="2">Местные</th>
          <th rowspan="2">Местные для себя</th>
          <th colspan="2">Оборот</th>
          <th rowspan="2">Погрузка</th>
          <th rowspan="2">Выгрузка</th>
          <th rowspan="2">Регулировка</th>
          <th colspan="3">Прием</th>
          <th colspan="3">Сдача</th>
          <th rowspan="2">РП</th>
          <th rowspan="2">РП порожних</th>
          <th rowspan="2">Транзит</th>
          <th rowspan="2">Местные</th>
          <th rowspan="2">Местные для себя</th>
          <th colspan="2">Оборот</th>
          <th rowspan="2">Погрузка</th>
          <th rowspan="2">Выгрузка</th>
          <th rowspan="2">Регулировка</th>
          <th colspan="3">Прием</th>
          <th colspan="3">Сдача</th>
          <th rowspan="2">РП</th>
          <th rowspan="2">РП порожних</th>
          <th rowspan="2">Транзит</th>
          <th rowspan="2">Местные</th>
          <th rowspan="2">Местные для себя</th>
          <th colspan="2">Оборот</th>
        </tr>
        <tr class="row100 head">
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Раб. вагонов</th>
          <th>Местных вагонов</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Раб. вагонов</th>
          <th>Местных вагонов</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Всего</th>
          <th>Груженых</th>
          <th>Порожних</th>
          <th>Раб. вагонов</th>
          <th>Местных вагонов</th>
        </tr>
        <tr class="row100 body">
          <td>
            <?= Html::dropDownList('NOD', null,[1=>'1',2=>'2',3=>'3',4=>'4',5=>'5', 6=>'6', 7=>'7',16=>'16'],
                   ['id'=> 'NOD',
                   'class' => 'form-control',
                     'prompt'=>'',
                    'onchange'=>'
                    var nod = $("#NOD").val();
                    document.getElementById("new").reset();
                    $("#NOD").val(nod);',
              ]); ?>
          </td>
          <td><input type="hidden" name = "DATE" />
          <?php date_default_timezone_set('Europe/Moscow'); echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "POGRO" class="form-control"/></td>
          <td><input type="text" name = "VIGRO" class="form-control"/></td>
          <td><input type="text" name = "REGLO" class="form-control"/></td>
          <td><input type="text" name = "PRIO" class="form-control"/></td>
          <td><input type="text" name = "PRGRO" class="form-control"/></td>
          <td><input type="text" name = "PRPRO" class="form-control"/></td>
          <td><input type="text" name = "SDAO" class="form-control"/></td>
          <td><input type="text" name = "SDGRO" class="form-control"/></td>
          <td><input type="text" name = "SDPRO" class="form-control"/></td>
          <td><input type="text" name = "PARKO" class="form-control"/></td>
          <td><input type="text" name = "PPORO" class="form-control"/></td>
          <td><input type="text" name = "TRANO" class="form-control"/></td>
          <td><input type="text" name = "MESGRO" class="form-control"/></td>
          <td><input type="text" name = "MESSBO" class="form-control"/></td>
          <td><input type="text" name = "OBORTO" class="form-control"/></td>
          <td><input type="text" name = "OBRMESO" class="form-control"/></td>
          <td><input type="text" name = "POGRM" class="form-control"/></td>
          <td><input type="text" name = "VIGRM" class="form-control"/></td>
          <td><input type="text" name = "REGLM" class="form-control"/></td>
          <td><input type="text" name = "PRIM" class="form-control"/></td>
          <td><input type="text" name = "PRGRM" class="form-control"/></td>
          <td><input type="text" name = "PRPRM" class="form-control"/></td>
          <td><input type="text" name = "SDAM" class="form-control"/></td>
          <td><input type="text" name = "SDGRM" class="form-control"/></td>
          <td><input type="text" name = "SDPRM" class="form-control"/></td>
          <td><input type="text" name = "PARKM" class="form-control"/></td>
          <td><input type="text" name = "PPORM" class="form-control"/></td>
          <td><input type="text" name = "TRANM" class="form-control"/></td>
          <td><input type="text" name = "MESGRM" class="form-control"/></td>
          <td><input type="text" name = "MESSBM" class="form-control"/></td>
          <td><input type="text" name = "OBORTM" class="form-control"/></td>
          <td><input type="text" name = "OBRMESM" class="form-control"/></td>
          <td><input type="text" name = "POGRF" class="form-control"/></td>
          <td><input type="text" name = "VIGRF" class="form-control"/></td>
          <td><input type="text" name = "REGLF" class="form-control"/></td>
          <td><input type="text" name = "PRIF" class="form-control"/></td>
          <td><input type="text" name = "PRGRF" class="form-control"/></td>
          <td><input type="text" name = "PRPRF" class="form-control"/></td>
          <td><input type="text" name = "SDAF" class="form-control"/></td>
          <td><input type="text" name = "SDGRF" class="form-control"/></td>
          <td><input type="text" name = "SDPRF" class="form-control"/></td>
          <td><input type="text" name = "PARKF" class="form-control"/></td>
          <td><input type="text" name = "PPORF" class="form-control"/></td>
          <td><input type="text" name = "TRANF" class="form-control"/></td>
          <td><input type="text" name = "MESGRF" class="form-control"/></td>
          <td><input type="text" name = "MESSBF" class="form-control"/></td>
          <td><input type="text" name = "OBORTF" class="form-control"/></td>
          <td><input type="text" name = "OBRMESF" class="form-control"/></td>
        </tr>
      </table>
    </div>
  </div>
  <button id="btn_save" type="submit" class="myButton" >Отправить</button>

</form>
</div>
<?php else: //В случае провала выдаём мессадж ?>
    <div class="container">
        <h3>
            <p>Здесь должно отображаться Ваше изображение</p>
        </h3>
    </div>
<?php endif;?>

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
  <h4>КОЭФФИЦИЕНТЫ СДАЧИ, ЗАНЯТО, ОСВОБОЖДЕНО, НОРМЫ НАЛИЧИЯ МЕСТНЫХ ГРУЗОВ  M.9336</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th rowspan="2">Количество неисправных</th>
          <th rowspan="2">Коэффициент сдачи по дороге</th>
          <th colspan="4">Занято</th>
          <th colspan="4">Освобождено</th>
          <th colspan="2">Неисправных</th>

          <th colspan="8">Местный груз под выгрузку цистерны на</th>
          <th colspan="8">Местный груз под выгрузку рефрежераторы на</th>
          <th colspan="8">Местный груз под выгрузку прочие на</th>
          <th colspan="8">Местный груз под выгрузку цементовозы на</th>
          <th colspan="8">Местный груз под выгрузку зерновозы на</th>
        </tr>
        <tr class="row100 head">
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Прочих</th>
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Прочих</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['NEISPR'] ?></td>
          <td><?=$data['KSDVS'] ?></td>
          <td><?=$data['ZAN20'] ?></td>
          <td><?=$data['ZAN40'] ?></td>
          <td><?=$data['ZAN60'] ?></td>
          <td><?=$data['ZAN90'] ?></td>
          <td><?=$data['OSV20'] ?></td>
          <td><?=$data['OSV40'] ?></td>
          <td><?=$data['OSV60'] ?></td>
          <td><?=$data['OSV90'] ?></td>
          <td><?=$data['NSP60'] ?></td>
          <td><?=$data['NSP70'] ?></td>
          <td><?=$data['M70VS'] ?></td>
          <td><?=$data['M7001'] ?></td>
          <td><?=$data['M7002'] ?></td>
          <td><?=$data['M7006'] ?></td>
          <td><?=$data['M7007'] ?></td>
          <td><?=$data['M7008'] ?></td>
          <td><?=$data['M7013'] ?></td>
          <td><?=$data['M7015'] ?></td>
          <td><?=$data['M87VS'] ?></td>
          <td><?=$data['M8701'] ?></td>
          <td><?=$data['M8702'] ?></td>
          <td><?=$data['M8706'] ?></td>
          <td><?=$data['M8707'] ?></td>
          <td><?=$data['M8708'] ?></td>
          <td><?=$data['M8713'] ?></td>
          <td><?=$data['M8715'] ?></td>
          <td><?=$data['M90VS'] ?></td>
          <td><?=$data['M9001'] ?></td>
          <td><?=$data['M9002'] ?></td>
          <td><?=$data['M9006'] ?></td>
          <td><?=$data['M9007'] ?></td>
          <td><?=$data['M9008'] ?></td>
          <td><?=$data['M9013'] ?></td>
          <td><?=$data['M9015'] ?></td>
          <td><?=$data['M93VS'] ?></td>
          <td><?=$data['M9301'] ?></td>
          <td><?=$data['M9302'] ?></td>
          <td><?=$data['M9306'] ?></td>
          <td><?=$data['M9307'] ?></td>
          <td><?=$data['M9308'] ?></td>
          <td><?=$data['M9313'] ?></td>
          <td><?=$data['M9315'] ?></td>
          <td><?=$data['M95VS'] ?></td>
          <td><?=$data['M9501'] ?></td>
          <td><?=$data['M9502'] ?></td>
          <td><?=$data['M9506'] ?></td>
          <td><?=$data['M9507'] ?></td>
          <td><?=$data['M9508'] ?></td>
          <td><?=$data['M9513'] ?></td>
          <td><?=$data['M9515'] ?></td>
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
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th rowspan="2">Количество неисправных</th>
          <th rowspan="2">Коэффициент сдачи по дороге</th>
          <th colspan="4">Занято</th>
          <th colspan="4">Освобождено</th>
          <th colspan="2">Неисправных</th>

          <th colspan="8">Местный груз под выгрузку цистерны на</th>
          <th colspan="8">Местный груз под выгрузку рефрежераторы на</th>
          <th colspan="8">Местный груз под выгрузку прочие на</th>
          <th colspan="8">Местный груз под выгрузку цементовозы на</th>
          <th colspan="8">Местный груз под выгрузку зерновозы на</th>
        </tr>
        <tr class="row100 head">
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Прочих</th>
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Прочих</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Дорогу</th>
          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
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
          <td><input type="text" name = "NEISPR" class="form-control"/></td>
          <td><input type="text" name = "KSDVS" class="form-control"/></td>
          <td><input type="text" name = "ZAN20" class="form-control"/></td>
          <td><input type="text" name = "ZAN40" class="form-control"/></td>
          <td><input type="text" name = "ZAN60" class="form-control"/></td>
          <td><input type="text" name = "ZAN90" class="form-control"/></td>
          <td><input type="text" name = "OSV20" class="form-control"/></td>
          <td><input type="text" name = "OSV40" class="form-control"/></td>
          <td><input type="text" name = "OSV60" class="form-control"/></td>
          <td><input type="text" name = "OSV90" class="form-control"/></td>
          <td><input type="text" name = "NSP60" class="form-control"/></td>
          <td><input type="text" name = "NSP70" class="form-control"/></td>
          <td><input type="text" name = "M70VS" class="form-control"/></td>
          <td><input type="text" name = "M7001" class="form-control"/></td>
          <td><input type="text" name = "M7002" class="form-control"/></td>
          <td><input type="text" name = "M7006" class="form-control"/></td>
          <td><input type="text" name = "M7007" class="form-control"/></td>
          <td><input type="text" name = "M7008" class="form-control"/></td>
          <td><input type="text" name = "M7013" class="form-control"/></td>
          <td><input type="text" name = "M7015" class="form-control"/></td>
          <td><input type="text" name = "M87VS" class="form-control"/></td>
          <td><input type="text" name = "M8701" class="form-control"/></td>
          <td><input type="text" name = "M8702" class="form-control"/></td>
          <td><input type="text" name = "M8706" class="form-control"/></td>
          <td><input type="text" name = "M8707" class="form-control"/></td>
          <td><input type="text" name = "M8708" class="form-control"/></td>
          <td><input type="text" name = "M8713" class="form-control"/></td>
          <td><input type="text" name = "M8715" class="form-control"/></td>
          <td><input type="text" name = "M90VS" class="form-control"/></td>
          <td><input type="text" name = "M9001" class="form-control"/></td>
          <td><input type="text" name = "M9002" class="form-control"/></td>
          <td><input type="text" name = "M9006" class="form-control"/></td>
          <td><input type="text" name = "M9007" class="form-control"/></td>
          <td><input type="text" name = "M9008" class="form-control"/></td>
          <td><input type="text" name = "M9013" class="form-control"/></td>
          <td><input type="text" name = "M9015" class="form-control"/></td>
          <td><input type="text" name = "M93VS" class="form-control"/></td>
          <td><input type="text" name = "M9301" class="form-control"/></td>
          <td><input type="text" name = "M9302" class="form-control"/></td>
          <td><input type="text" name = "M9306" class="form-control"/></td>
          <td><input type="text" name = "M9307" class="form-control"/></td>
          <td><input type="text" name = "M9308" class="form-control"/></td>
          <td><input type="text" name = "M9313" class="form-control"/></td>
          <td><input type="text" name = "M9315" class="form-control"/></td>
          <td><input type="text" name = "M95VS" class="form-control"/></td>
          <td><input type="text" name = "M9501" class="form-control"/></td>
          <td><input type="text" name = "M9502" class="form-control"/></td>
          <td><input type="text" name = "M9506" class="form-control"/></td>
          <td><input type="text" name = "M9507" class="form-control"/></td>
          <td><input type="text" name = "M9508" class="form-control"/></td>
          <td><input type="text" name = "M9513" class="form-control"/></td>
          <td><input type="text" name = "M9515" class="form-control"/></td>
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

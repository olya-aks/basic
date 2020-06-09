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
  <h4>ПЛАН РАБОТЫ СОРТИРОВОЧНЫХ СТАНЦИЙ M.0181</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="3">НОД</th>
          <th rowspan="3">Станция</th>
          <th rowspan="3">Расчетная дата</th>
          <th colspan="2">Простой</th>
          <th rowspan="3">Pабочий парк</th>
          <th rowspan="3">Простой на горке</th>
          <th colspan="7">Прошлый год</th>
          <th rowspan="3">Вагоны технически неисправные</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">С переработкой (ЧХ100)</th>
          <th rowspan="2">Без переработки (ЧХ100)</th>
          <th colspan="2">Вагоны</th>
          <th colspan="2">Простой</th>
          <th rowspan="2">PП</th>
          <th rowspan="2">Простой на горке</th>
          <th rowspan="2">Длина состава</th>
        </tr>
        <tr class="row100 head">
          <th>С переработкой</th>
          <th>Без переработки</th>
          <th>С переработкой</th>
          <th>Без переработки</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['ESR'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['PROSPER'] ?></td>
          <td><?=$data['PROSBPR'] ?></td>
          <td><?=$data['PARK'] ?></td>
          <td><?=$data['PERGOR'] ?></td>
          <td><?=$data['VAGPRPG'] ?></td>
          <td><?=$data['VAGBPPG'] ?></td>
          <td><?=$data['PRSPRPG'] ?></td>
          <td><?=$data['PRSBPPG'] ?></td>
          <td><?=$data['PARKPG'] ?></td>
          <td><?=$data['PERGOPG'] ?></td>
          <td><?=$data['DLINAPG'] ?></td>
          <td><?=$data['NEISP'] ?></td>
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
          <th rowspan="3">Станция</th>
          <th rowspan="3">Расчетная дата</th>
          <th colspan="2">Простой</th>
          <th rowspan="3">Pабочий парк</th>
          <th rowspan="3">Простой на горке</th>
          <th colspan="7">Прошлый год</th>
          <th rowspan="3">Вагоны технически неисправные</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">С переработкой (ЧХ100)</th>
          <th rowspan="2">Без переработки (ЧХ100)</th>
          <th colspan="2">Вагоны</th>
          <th colspan="2">Простой</th>
          <th rowspan="2">PП</th>
          <th rowspan="2">Простой на горке</th>
          <th rowspan="2">Длина состава</th>
        </tr>
        <tr class="row100 head">
          <th>С переработкой</th>
          <th>Без переработки</th>
          <th>С переработкой</th>
          <th>Без переработки</th>
        </tr>
        <tr class="row100 body">
          <td>
            <?= Html::dropDownList('NOD', null,[1=>'1',2=>'2',3=>'3',4=>'4',5=>'5', 6=>'6', 7=>'7'],
                   ['id'=> 'NOD',
                   'class' => 'form-control',
                     'prompt'=>'',
                    'onchange'=>'
                    var nod = $("#NOD").val();
                    document.getElementById("new").reset();
                    $("#NOD").val(nod);
                    $.post( "plan/station?id='.'"+$("option:selected", "#NOD").text(), function( data ) {
                      $( "#ESR" ).html( data );
                    });',
              ]); ?>
          </td>
          <td>
            <?= Html::dropDownList('ESR', null,[],
            ['id'=>'ESR',
            'class' => 'form-control',
            'prompt'=>'',
           'onchange'=>'
           var nod = $("#NOD").val();
           var esr = $("#ESR").val();
           document.getElementById("new").reset();
           $("#NOD").val(nod);
           $("#ESR").val(esr);
           ',
            ])?>
          </td>
          <td><input type="hidden" name = "DATE" />
          <?php date_default_timezone_set('Europe/Moscow'); echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "PROSPER" class="form-control"/></td>
          <td><input type="text" name = "PROSBPR" class="form-control"/></td>
          <td><input type="text" name = "PARK" class="form-control"/></td>
          <td><input type="text" name = "PERGOR" class="form-control"/></td>
          <td><input type="text" name = "VAGPRPG" class="form-control"/></td>
          <td><input type="text" name = "VAGBPPG" class="form-control"/></td>
          <td><input type="text" name = "PRSPRPG" class="form-control"/></td>
          <td><input type="text" name = "PRSBPPG" class="form-control"/></td>
          <td><input type="text" name = "PARKPG" class="form-control"/></td>
          <td><input type="text" name = "PERGOPG" class="form-control"/></td>
          <td><input type="text" name = "DLINAPG" class="form-control"/></td>
          <td><input type="text" name = "NEISP" class="form-control"/></td>
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

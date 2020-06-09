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
  <h4>ПЛАНОВЫЕ ДАННЫЕ ПО СТАНЦИЯМ ОТДЕЛЕНИЯ (ВЫПОЛНЕНИЕ ТЕХНОРМ) M.990</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th>
          <th rowspan="2">Станция</th>
          <th rowspan="2">Расчетная дата</th>
          <th rowspan="2">Раб/парк псего</th>
          <th rowspan="2">Парк порожних</th>
          <th rowspan="2">Простой под одной грузовой операцией</th>
          <th rowspan="2">Выгрузка</th>
          <th colspan="3">Простой (только для НОД-1) </th>
        </tr>
        <tr class="row100 head">
          <th>без переаботки</th>
          <th>с переаботкой</th>
          <th>общий</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['ESR'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['PRKRAB'] ?></td>
          <td><?=$data['PRKPOR'] ?></td>
          <td><?=$data['PRST1'] ?></td>
          <td><?=$data['VIGR'] ?></td>
          <td><?=$data['PRSTBEZ'] ?></td>
          <td><?=$data['PRSTPER'] ?></td>
          <td><?=$data['PRSTOB'] ?></td>
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
          <th rowspan="2">Станция</th>
          <th rowspan="2">Расчетная дата</th>
          <th rowspan="2">Раб/парк псего</th>
          <th rowspan="2">Парк порожних</th>
          <th rowspan="2">Простой под одной грузовой операцией</th>
          <th rowspan="2">Выгрузка</th>
          <th colspan="3">Простой (только для НОД-1) </th>
        </tr>
        <tr class="row100 head">
          <th>без переаботки</th>
          <th>с переаботкой</th>
          <th>общий</th>
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
          <td><input type="text" name = "PRKRAB" class="form-control"/></td>
          <td><input type="text" name = "PRKPOR" class="form-control"/></td>
          <td><input type="text" name = "PRST1" class="form-control"/></td>
          <td><input type="text" name = "VIGR" class="form-control"/></td>
          <td><input type="text" name = "PRSTBEZ" class="form-control"/></td>
          <td><input type="text" name = "PRSTPER" class="form-control"/></td>
          <td><input type="text" name = "PRSTOB" class="form-control"/></td>
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

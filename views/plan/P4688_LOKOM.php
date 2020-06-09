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
  <h4>ПЛАН ПО СОДЕРЖАНИЮ ЛОКОМОТИВНОГО ПАРКА M.4688</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="3">НОД</th>
          <th rowspan="3">Код станции</th>
          <th rowspan="3">Расчетная дата</th>
          <th colspan="3">Электровозы</th>
          <th colspan="3">Тепловозы</th>
          <th colspan="3">Прошлый год</th>
          <th rowspan="3">План тонно-километры брутто</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">Пapк в гpузовом движении</th>
          <th colspan="2">Отвлечено в</th>
          <th rowspan="2">Пapк в гpузовом движении</th>
          <th colspan="2">Отвлечено в</th>

          <th rowspan="2">Парк маневровых с грузовыми вагонами</th>
          <th rowspan="2">Тонно-километры брутто</th>
          <th rowspan="2">Экспл. парк грузового движения</th>
        </tr>
        <tr class="row100 head">
          <th>пaccажирское движение</th>
          <th>хозяйственное движение</th>
          <th>пaccажирское движение</th>
          <th>хозяйственное движение</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['ESR'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['PARKGRE'] ?></td>
          <td><?=$data['OTVLPSE'] ?></td>
          <td><?=$data['OTVLHZE'] ?></td>
          <td><?=$data['PARKGRT'] ?></td>
          <td><?=$data['OTVLPST'] ?></td>
          <td><?=$data['OTVLHZT'] ?></td>
          <td><?=$data['MANGRPG'] ?></td>
          <td><?=$data['TNKMPG'] ?></td>
          <td><?=$data['PARKGPG'] ?></td>
          <td><?=$data['TNKMPL'] ?></td>
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
          <th rowspan="3">Код станции</th>
          <th rowspan="3">Расчетная дата</th>
          <th colspan="3">Электровозы</th>
          <th colspan="3">Тепловозы</th>
          <th colspan="3">Прошлый год</th>
          <th rowspan="3">План тонно-километры брутто</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">Пapк в гpузовом движении</th>
          <th colspan="2">Отвлечено в</th>
          <th rowspan="2">Пapк в гpузовом движении</th>
          <th colspan="2">Отвлечено в</th>

          <th rowspan="2">Парк маневровых с грузовыми вагонами</th>
          <th rowspan="2">Тонно-километры брутто</th>
          <th rowspan="2">Экспл. парк грузового движения</th>
        </tr>
        <tr class="row100 head">
          <th>пaccажирское движение</th>
          <th>хозяйственное движение</th>
          <th>пaccажирское движение</th>
          <th>хозяйственное движение</th>
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
          <td><input type="text" name = "PARKGRE" class="form-control"/></td>
          <td><input type="text" name = "OTVLPSE" class="form-control"/></td>
          <td><input type="text" name = "OTVLHZE" class="form-control"/></td>
          <td><input type="text" name = "PARKGRT" class="form-control"/></td>
          <td><input type="text" name = "OTVLPST" class="form-control"/></td>
          <td><input type="text" name = "OTVLHZT" class="form-control"/></td>
          <td><input type="text" name = "MANGRPG" class="form-control"/></td>
          <td><input type="text" name = "TNKMPG" class="form-control"/></td>
          <td><input type="text" name = "PARKGPG" class="form-control"/></td>
          <td><input type="text" name = "TNKMPL" class="form-control"/></td>
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
            <p>Что-то пошло не так</p>
        </h3>
    </div>
<?php endif;?>

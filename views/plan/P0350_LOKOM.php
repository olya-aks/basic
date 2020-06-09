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
  <h4>ПЛАНОВЫЕ ПОКАЗАТЕЛИ ИСПОЛЬЗОВАНИЯ ЛОКОМОТИВОВ БЕЗ ПЕРЕДАТОЧНЫХ И ВЫВОЗНЫХ M.9350</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th colspan="3">Электровозы</th>
          <th colspan="3">Тепловозы</th>
          <th colspan="3">Без передаточых и вывозных</th>
        </tr>
        <tr class="row100 head">
          <th>Вес поезда</th>
          <th>Производительность</th>
          <th>Пробег</th>
          <th>Вес поезда</th>
          <th>Производительность</th>
          <th>Пробег</th>
          <th>Вес поезда</th>
          <th>Производительность</th>
          <th>Пробег</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['VESPE'] ?></td>
          <td><?=$data['PROIE'] ?></td>
          <td><?=$data['PROBE'] ?></td>
          <td><?=$data['VESPT'] ?></td>
          <td><?=$data['PROIT'] ?></td>
          <td><?=$data['PROBT'] ?></td>
          <td><?=$data['VESPV'] ?></td>
          <td><?=$data['PROIV'] ?></td>
          <td><?=$data['PROBV'] ?></td>
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
          <tr class="row100 head">
            <th rowspan="2">НОД</th>
            <th rowspan="2">Расчетная дата</th>
            <th colspan="3">Электровозы</th>
            <th colspan="3">Тепловозы</th>
            <th colspan="3">Без передаточых и вывозных</th>
          </tr>
          <tr class="row100 head">
            <th>Вес поезда</th>
            <th>Производительность</th>
            <th>Пробег</th>
            <th>Вес поезда</th>
            <th>Производительность</th>
            <th>Пробег</th>
            <th>Вес поезда</th>
            <th>Производительность</th>
            <th>Пробег</th>
          </tr>
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
          <td><input type="text" name = "VESPE" class="form-control"/></td>
          <td><input type="text" name = "PROIE" class="form-control"/></td>
          <td><input type="text" name = "PROBE" class="form-control"/></td>
          <td><input type="text" name = "VESPT" class="form-control"/></td>
          <td><input type="text" name = "PROIT" class="form-control"/></td>
          <td><input type="text" name = "PROBT" class="form-control"/></td>
          <td><input type="text" name = "VESPV" class="form-control"/></td>
          <td><input type="text" name = "PROIV" class="form-control"/></td>
          <td><input type="text" name = "PROBV" class="form-control"/></td>
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

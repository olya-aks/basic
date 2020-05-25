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
  <h4>НОРМЫ ПОГРУЗКИ НЕФТЕНАЛИВНЫХ ГРУЗОВ ПО СТАНЦИЯМ M.3130</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th>Код станции</th>
          <th>НОД</th>
          <th>Расчетная дата</th>
          <th>Код груза</th>
          <th>План</th>
          <th>Тех. норма</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['ESR'] ?></td>
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['GRUZ'] ?></td>
          <td><?=$data['PLAN'] ?></td>
          <td><?=$data['TEHNORM'] ?></td>
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
          <th>Код станции</th>
          <th>НОД</th>
          <th>Расчетная дата</th>
          <th>Код груза</th>
          <th>План</th>
          <th>Тех. норма</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "ESR" class="form-control"/></td>
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <td><input type="hidden" name = "DATE" />
          <?php date_default_timezone_set('Europe/Moscow'); echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "GRUZ" class="form-control"/></td>
          <td><input type="text" name = "PLAN" class="form-control"/></td>
          <td><input type="text" name = "TEHNORM" class="form-control"/></td>
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

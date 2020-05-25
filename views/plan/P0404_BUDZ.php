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
  <h4>БЮДЖЕТНЫЕ ПОКАЗАТЕЛИ, ЗАГРУЖАЕМЫЕ С ПОРТАЛА M.9404</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th>НОД</th>
          <th>Расчетная дата</th>
          <th>Бюджетная участковая скорость</th>
          <th>Бюджетная техническая скорость (расчитывается от участковой)</th>
          <th>Бюджетный средний вес поезда</th>
          <th>Бюджетная производительность локомотива</th>
          <th>Бюджетная производительность локомотива экплуатируемого парка</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['SKORU'] ?></td>
          <td><?=$data['SKORT'] ?></td>
          <td><?=$data['VESSR'] ?></td>
          <td><?=$data['PROIZV'] ?></td>
          <td><?=$data['PROIZVEKS'] ?></td>
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
          <th>НОД</th>
          <th>Расчетная дата</th>
          <th>Бюджетная участковая скорость</th>
          <th>Бюджетная техническая скорость (расчитывается от участковой)</th>
          <th>Бюджетный средний вес поезда</th>
          <th>Бюджетная производительность локомотива</th>
          <th>Бюджетная производительность локомотива экплуатируемого парка</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <td><input type="hidden" name = "DATE" />
          <?php date_default_timezone_set('Europe/Moscow'); echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "SKORU" class="form-control"/></td>
          <td><input type="text" name = "SKORT" class="form-control"/></td>
          <td><input type="text" name = "VESSR" class="form-control"/></td>
          <td><input type="text" name = "PROIZV" class="form-control"/></td>
          <td><input type="text" name = "PROIZVEKS" class="form-control"/></td>
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

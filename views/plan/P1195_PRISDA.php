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
  <h4>ПЛАН CУТОЧНОЙ ПОГРУЗКИ ВАГОНОВ И ТОНН ПО СТАНЦИЯМ ОТДЕЛЕНИЯ M.0961</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">Код станции</th>
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th colspan="6">Прием порожних</th>
          <th colspan="6">Сдача порожних</th>
          <th rowspan="2">Прием всего</th>
          <th rowspan="2">Сдача всего</th>
        </tr>
        <tr class="row100 head">
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Рефрежераторов</th>
          <th>Зерновозов</th>
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Рефрежераторов</th>
          <th>Зерновозов</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['ESR'] ?></td>
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['PRKR'] ?></td>
          <td><?=$data['PRPL'] ?></td>
          <td><?=$data['PRPV'] ?></td>
          <td><?=$data['PRCS'] ?></td>
          <td><?=$data['PRRF'] ?></td>
          <td><?=$data['PRZR'] ?></td>
          <td><?=$data['SDKR'] ?></td>
          <td><?=$data['SDPL'] ?></td>
          <td><?=$data['SDPV'] ?></td>
          <td><?=$data['SDCS'] ?></td>
          <td><?=$data['SDRF'] ?></td>
          <td><?=$data['SDZR'] ?></td>
          <td><?=$data['PRVS'] ?></td>
          <td><?=$data['SDVS'] ?></td>
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
          <th rowspan="2">Код станции</th>
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th colspan="6">Прием порожних</th>
          <th colspan="6">Сдача порожних</th>
          <th rowspan="2">Прием всего</th>
          <th rowspan="2">Сдача всего</th>
        </tr>
        <tr class="row100 head">
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Рефрежераторов</th>
          <th>Зерновозов</th>
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Рефрежераторов</th>
          <th>Зерновозов</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "ESR" class="form-control"/></td>
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <td><input type="hidden" name = "DATE" />
          <?php date_default_timezone_set('Europe/Moscow'); echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "PRKR" class="form-control"/></td>
          <td><input type="text" name = "PRPL" class="form-control"/></td>
          <td><input type="text" name = "PRPV" class="form-control"/></td>
          <td><input type="text" name = "PRCS" class="form-control"/></td>
          <td><input type="text" name = "PRRF" class="form-control"/></td>
          <td><input type="text" name = "PRZR" class="form-control"/></td>
          <td><input type="text" name = "SDKR" class="form-control"/></td>
          <td><input type="text" name = "SDPL" class="form-control"/></td>
          <td><input type="text" name = "SDPV" class="form-control"/></td>
          <td><input type="text" name = "SDCS" class="form-control"/></td>
          <td><input type="text" name = "SDRF" class="form-control"/></td>
          <td><input type="text" name = "SDZR" class="form-control"/></td>
          <td><input type="text" name = "PRVS" class="form-control"/></td>
          <td><input type="text" name = "SDVS" class="form-control"/></td>
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

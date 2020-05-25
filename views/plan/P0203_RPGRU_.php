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
<h4>ПЛАН РАБОЧЕГО ПАРКА ГРУЖЕНЫХ M.9203</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th colspan="11">Рабочий парк груженых</th>
        </tr>
        <tr class="row100 head">
          <th>Всего</th>
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Зерновозов</th>
          <th>Рефрежераторов</th>
          <th>Цистерн РЖД</th>
          <th>Прочих</th>
          <th>Цементовозов</th>
          <th>Минераловозов</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD']?></td>
          <td><?=$data['DATE']?></td>
          <td><?=$data['KVVS']?></td>
          <td><?=$data['KVKR']?></td>
          <td><?=$data['KVPL']?></td>
          <td><?=$data['KVPV']?></td>
          <td><?=$data['KVCS']?></td>
          <td><?=$data['KVZR']?></td>
          <td><?=$data['KVRF']?></td>
          <td><?=$data['KVCG']?></td>
          <td><?=$data['KVPR']?></td>
          <td><?=$data['KVCM']?></td>
          <td><?=$data['KVMV']?></td>
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
          <th colspan="11">Рабочий парк груженых</th>
        </tr>
        <tr class="row100 head">
          <th>Всего</th>
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Зерновозов</th>
          <th>Рефрежераторов</th>
          <th>Цистерн РЖД</th>
          <th>Прочих</th>
          <th>Цементовозов</th>
          <th>Минераловозов</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <!--td><input type="text" name = "DATE" class="form-control"/></td-->
          <td><input type="hidden" name = "DATE" /><?php date_default_timezone_set('Europe/Moscow');
            echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "KVVS" class="form-control"/></td>
          <td><input type="text" name = "KVKR" class="form-control"/></td>
          <td><input type="text" name = "KVPL" class="form-control"/></td>
          <td><input type="text" name = "KVPV" class="form-control"/></td>
          <td><input type="text" name = "KVCS" class="form-control"/></td>
          <td><input type="text" name = "KVZR" class="form-control"/></td>
          <td><input type="text" name = "KVRF" class="form-control"/></td>
          <td><input type="text" name = "KVCG" class="form-control"/></td>
          <td><input type="text" name = "KVPR" class="form-control"/></td>
          <td><input type="text" name = "KVCM" class="form-control"/></td>
          <td><input type="text" name = "KVMV" class="form-control"/></td>
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

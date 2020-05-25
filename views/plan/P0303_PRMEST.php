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
  <h4>ПЛАН ПРИЕМА МЕСТНОГО ГРУЗА НА ОТДЕЛЕНИИ M.0303</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th rowspan="2">Прием местн. всего</th>
          <th rowspan="2">Погрузка местн. всего</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
        </tr>
        <tr class="row100 head">
          <th colspan="2">местного крытых</th>
          <th colspan="2">местного платформ</th>
          <th colspan="2">местного полувагонов</th>
          <th colspan="2">местного зерновозов</th>
          <th colspan="2">местного рефрежераторов</th>
          <th colspan="2">местного прочих</th>
          <th colspan="2">местного цементовозов</th>
          <th colspan="2">местного цистерн</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['PRIVS'] ?></td>
          <td><?=$data['POGVS'] ?></td>
          <td><?=$data['PRIKR'] ?></td>
          <td><?=$data['POGKR'] ?></td>
          <td><?=$data['PRIPL'] ?></td>
          <td><?=$data['POGPL'] ?></td>
          <td><?=$data['PRIPV'] ?></td>
          <td><?=$data['POGPV'] ?></td>
          <td><?=$data['PRIZR'] ?></td>
          <td><?=$data['POGZR'] ?></td>
          <td><?=$data['PRIRF'] ?></td>
          <td><?=$data['POGRF'] ?></td>
          <td><?=$data['PRIPR'] ?></td>
          <td><?=$data['POGPR'] ?></td>
          <td><?=$data['PRICM'] ?></td>
          <td><?=$data['POGCM'] ?></td>
          <td><?=$data['PRICS'] ?></td>
          <td><?=$data['POGCS'] ?></td>
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
          <th rowspan="2">Прием местн. всего</th>
          <th rowspan="2">Погрузка местн. всего</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
          <th>Прием</th>
          <th>Погрузка</th>
        </tr>
        <tr class="row100 head">
          <th colspan="2">местного крытых</th>
          <th colspan="2">местного платформ</th>
          <th colspan="2">местного полувагонов</th>
          <th colspan="2">местного зерновозов</th>
          <th colspan="2">местного рефрежераторов</th>
          <th colspan="2">местного прочих</th>
          <th colspan="2">местного цементовозов</th>
          <th colspan="2">местного цистерн</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <td><input type="hidden" name = "DATE" />
          <?php date_default_timezone_set('Europe/Moscow'); echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "PRIVS" class="form-control"/></td>
          <td><input type="text" name = "POGVS" class="form-control"/></td>
          <td><input type="text" name = "PRIKR" class="form-control"/></td>
          <td><input type="text" name = "POGKR" class="form-control"/></td>
          <td><input type="text" name = "PRIPL" class="form-control"/></td>
          <td><input type="text" name = "POGPL" class="form-control"/></td>
          <td><input type="text" name = "PRIPV" class="form-control"/></td>
          <td><input type="text" name = "POGPV" class="form-control"/></td>
          <td><input type="text" name = "PRIZR" class="form-control"/></td>
          <td><input type="text" name = "POGZR" class="form-control"/></td>
          <td><input type="text" name = "PRIRF" class="form-control"/></td>
          <td><input type="text" name = "POGRF" class="form-control"/></td>
          <td><input type="text" name = "PRIPR" class="form-control"/></td>
          <td><input type="text" name = "POGPR" class="form-control"/></td>
          <td><input type="text" name = "PRICM" class="form-control"/></td>
          <td><input type="text" name = "POGCM" class="form-control"/></td>
          <td><input type="text" name = "PRICS" class="form-control"/></td>
          <td><input type="text" name = "POGCS" class="form-control"/></td>
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

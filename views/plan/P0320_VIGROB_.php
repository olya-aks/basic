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


<!--БЛОК-ОБЁРТКА ДЛЯ СОДЕРЖИМОГО МОДАЛЬНОГО ОКНА -->
<div class="wraps">
  <h4>НОРМА ВЫГРУЗКИ И ОБОРОТА ПО РПС M.9320</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th><th rowspan="2" style="min-width:100px ;">Дата</th>
          <th colspan="9">Выгрузка</th><th>Оборот общий</th><th>Оборот местный</th>
          <th>Оборот общий</th><th>Оборот местный</th><th>Оборот общий</th><th>Оборот местный</th>
          <th>Оборот общий</th><th>Оборот местный</th><th>Оборот общий</th><th>Оборот местный</th>
          <th>Оборот общий</th><th>Оборот местный</th><th>Оборот общий</th><th>Оборот местный</th>
          <th>Оборот общий</th><th>Оборот местный</th><th>Оборот общий</th><th>Оборот местный</th>
        </tr>
        <tr class="row100 head">
          <th>всего</th><th>крытых</th><th>платформ</th><th>полувагонов</th><th>зерновозов</th>
          <th>рефрежераторов</th><th>прочих</th><th>цементовозов</th><th>цистерн</th>
          <th colspan="2">всего</th><th colspan="2">крытых</th><th colspan="2">платформ</th>
          <th colspan="2">полувагонов</th><th colspan="2">зерновозов</th><th colspan="2">рефрежераторов</th>
          <th colspan="2">прочих</th><th colspan="2">цементовозов</th><th colspan="2">цистерн</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD']?></td>
          <td><?=$data['DATE']?></td>
          <td><?=$data['VIGVS']?></td>
          <td><?=$data['VIGKR']?></td>
          <td><?=$data['VIGPL']?></td>
          <td><?=$data['VIGPV']?></td>
          <td><?=$data['VIGZR']?></td>
          <td><?=$data['VIGRF']?></td>
          <td><?=$data['VIGPR']?></td>
          <td><?=$data['VIGCM']?></td>
          <td><?=$data['VIGCS']?></td>
          <td><?=$data['OBVS']?></td>
          <td><?=$data['OBMVS']?></td>
          <td><?=$data['OBKR']?></td>
          <td><?=$data['OBMKR']?></td>
          <td><?=$data['OBPL']?></td>
          <td><?=$data['OBMPL']?></td>
          <td><?=$data['OBPV']?></td>
          <td><?=$data['OBMPV']?></td>
          <td><?=$data['OBZR']?></td>
          <td><?=$data['OBMZR']?></td>
          <td><?=$data['OBRF']?></td>
          <td><?=$data['OBMRF']?></td>
          <td><?=$data['OBPR']?></td>
          <td><?=$data['OBMPR']?></td>
          <td><?=$data['OBCM']?></td>
          <td><?=$data['OBMCM']?></td>
          <td><?=$data['OBCS']?></td>
          <td><?=$data['OBMCS']?></td>
        </tr>
      <?php  endforeach; ?>
      </table>
    </div>
  </div>
  <button id="btn_show" class="myButton">Добавить</button>
  <?= $this->renderAjax('errors');?>
  <div id="errors_block"></div>

<form id=new>
  <h4>ВВЕДИТЕ ПЛАНОВЫЕ ПОКАЗАТЕЛИ:</h4>
  <div class="table100 ver2">
    <div id="add" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th><th rowspan="2" style="min-width:100px ;">Дата</th><th colspan="9">Выгрузка</th>
          <th>Оборот общий</th><th>Оборот местный</th><th>Оборот общий</th><th>Оборот местный</th><th>Оборот общий</th>
          <th>Оборот местный</th><th>Оборот общий</th><th>Оборот местный</th><th>Оборот общий</th><th>Оборот местный</th>
          <th>Оборот общий</th><th>Оборот местный</th><th>Оборот общий</th><th>Оборот местный</th><th>Оборот общий</th>
          <th>Оборот местный</th><th>Оборот общий</th><th>Оборот местный</th>
        </tr>
        <tr class="row100 head">
          <th>всего</th><th>крытых</th><th>платформ</th><th>полувагонов</th><th>зерновозов</th><th>рефрежераторов</th>
          <th>прочих</th><th>цементовозов</th><th>цистерн</th><th colspan="2">всего</th><th colspan="2">крытых</th>
          <th colspan="2">платформ</th><th colspan="2">полувагонов</th><th colspan="2">зерновозов</th>
          <th colspan="2">рефрежераторов</th><th colspan="2">прочих</th><th colspan="2">цементовозов</th><th colspan="2">цистерн</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <!--td><input type="text" name = "DATE" class="form-control"/></td-->
          <td><input type="hidden" name = "DATE" /><?php date_default_timezone_set('Europe/Moscow');
            echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "VIGVS" class="form-control"/></td>
          <td><input type="text" name = "VIGKR" class="form-control"/></td>
          <td><input type="text" name = "VIGPL" class="form-control"/></td>
          <td><input type="text" name = "VIGPV" class="form-control"/></td>
          <td><input type="text" name = "VIGZR" class="form-control"/></td>
          <td><input type="text" name = "VIGRF" class="form-control"/></td>
          <td><input type="text" name = "VIGPR" class="form-control"/></td>
          <td><input type="text" name = "VIGCM" class="form-control"/></td>
          <td><input type="text" name = "VIGCS" class="form-control"/></td>
          <td><input type="text" name = "OBVS" class="form-control"/></td>
          <td><input type="text" name = "OBMVS" class="form-control"/></td>
          <td><input type="text" name = "OBKR" class="form-control"/></td>
          <td><input type="text" name = "OBMKR" class="form-control"/></td>
          <td><input type="text" name = "OBPL" class="form-control"/></td>
          <td><input type="text" name = "OBMPL" class="form-control"/></td>
          <td><input type="text" name = "OBPV" class="form-control"/></td>
          <td><input type="text" name = "OBMPV" class="form-control"/></td>
          <td><input type="text" name = "OBZR" class="form-control"/></td>
          <td><input type="text" name = "OBMZR" class="form-control"/></td>
          <td><input type="text" name = "OBRF" class="form-control"/></td>
          <td><input type="text" name = "OBMRF" class="form-control"/></td>
          <td><input type="text" name = "OBPR" class="form-control"/></td>
          <td><input type="text" name = "OBMPR" class="form-control"/></td>
          <td><input type="text" name = "OBCM" class="form-control"/></td>
          <td><input type="text" name = "OBMCM" class="form-control"/></td>
          <td><input type="text" name = "OBCS" class="form-control"/></td>
          <td><input type="text" name = "OBMCS" class="form-control"/></td>
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

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
  <h4>ЗАДАНИЕ ПО СТАТНАГРУЗКЕ M.9327</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th rowspan="2">Задание по статнагрузке</th>
          <th rowspan="2">Остаток под сортировку</th>
          <th rowspan="2">Оборот транзитного вагона</th>
          <th rowspan="2">Сдача грузовых вагонов по коэф. за месяц прошлого года</th>
          <th colspan="7">Коэффициент сдачи по</th>
          <th rowspan="2">Резерв</th>
          <th rowspan="2">Резерв</th>
          <th rowspan="2">Резерв</th>
          <th colspan="8">Оборот</th>
          <th rowspan="2">Резерв</th>
          <th rowspan="2">Резерв</th>
          <th rowspan="2">Резерв</th>
          <th colspan="11">Сортировка</th>
        </tr>
        <tr class="row100 head">
          <th>Груженым цистернам</th>
          <th>Крытым</th>
          <th>Платформам</th>
          <th>Полувагонам</th>
          <th>Прочим</th>
          <th>Цементовозам</th>
          <th>Зерновозам</th>

          <th>Порожних вагонов</th>
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Прочих</th>
          <th>Цементовозов</th>
          <th>Зерновозов</th>

          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Рефрежераторов</th>
          <th>Цементовозов</th>
          <th>Зерновозов</th>
          <th>Фитинговых</th>
          <th>Окатышевозов</th>
          <th>Минераловозов</th>
          <th>Прочих</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['STATNAGR'] ?></td>
          <td><?=$data['OSTSORT'] ?></td>
          <td><?=$data['OBORTRZ'] ?></td>
          <td><?=$data['SD499'] ?></td>
          <td><?=$data['SD470'] ?></td>
          <td><?=$data['SD420'] ?></td>
          <td><?=$data['SD440'] ?></td>
          <td><?=$data['SD460'] ?></td>
          <td><?=$data['SD490'] ?></td>
          <td><?=$data['SD493'] ?></td>
          <td><?=$data['SD495'] ?></td>
          <td><?=$data['REZERV1'] ?></td>
          <td><?=$data['REZERV2'] ?></td>
          <td><?=$data['REZERV3'] ?></td>
          <td><?=$data['OBOR99'] ?></td>
          <td><?=$data['OBOR20'] ?></td>
          <td><?=$data['OBOR40'] ?></td>
          <td><?=$data['OBOR60'] ?></td>
          <td><?=$data['OBOR70'] ?></td>
          <td><?=$data['OBOR90'] ?></td>
          <td><?=$data['OBOR93'] ?></td>
          <td><?=$data['OBOR95'] ?></td>
          <td><?=$data['REZERV4'] ?></td>
          <td><?=$data['REZERV5'] ?></td>
          <td><?=$data['REZERV6'] ?></td>
          <td><?=$data['SORT20'] ?></td>
          <td><?=$data['SORT40'] ?></td>
          <td><?=$data['SORT60'] ?></td>
          <td><?=$data['SORT70'] ?></td>
          <td><?=$data['SORT87'] ?></td>
          <td><?=$data['SORT93'] ?></td>
          <td><?=$data['SORT95'] ?></td>
          <td><?=$data['SORT96'] ?></td>
          <td><?=$data['SORT94'] ?></td>
          <td><?=$data['SORT92'] ?></td>
          <td><?=$data['SORT90'] ?></td>
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
          <th rowspan="2">Задание по статнагрузке</th>
          <th rowspan="2">Остаток под сортировку</th>
          <th rowspan="2">Оборот транзитного вагона</th>
          <th rowspan="2">Сдача грузовых вагонов по коэф. за месяц прошлого года</th>
          <th colspan="7">Коэффициент сдачи по</th>
          <th rowspan="2">Резерв</th>
          <th rowspan="2">Резерв</th>
          <th rowspan="2">Резерв</th>
          <th colspan="8">Оборот</th>
          <th rowspan="2">Резерв</th>
          <th rowspan="2">Резерв</th>
          <th rowspan="2">Резерв</th>
          <th colspan="11">Сортировка</th>
        </tr>
        <tr class="row100 head">
          <th>Груженым цистернам</th>
          <th>Крытым</th>
          <th>Платформам</th>
          <th>Полувагонам</th>
          <th>Прочим</th>
          <th>Цементовозам</th>
          <th>Зерновозам</th>

          <th>Порожних вагонов</th>
          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Прочих</th>
          <th>Цементовозов</th>
          <th>Зерновозов</th>

          <th>Крытых</th>
          <th>Платформ</th>
          <th>Полувагонов</th>
          <th>Цистерн</th>
          <th>Рефрежераторов</th>
          <th>Цементовозов</th>
          <th>Зерновозов</th>
          <th>Фитинговых</th>
          <th>Окатышевозов</th>
          <th>Минераловозов</th>
          <th>Прочих</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <td><input type="hidden" name = "DATE" />
          <?php date_default_timezone_set('Europe/Moscow'); echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "STATNAGR" class="form-control"/></td>
          <td><input type="text" name = "OSTSORT" class="form-control"/></td>
          <td><input type="text" name = "OBORTRZ" class="form-control"/></td>
          <td><input type="text" name = "SD499" class="form-control"/></td>
          <td><input type="text" name = "SD470" class="form-control"/></td>
          <td><input type="text" name = "SD420" class="form-control"/></td>
          <td><input type="text" name = "SD440" class="form-control"/></td>
          <td><input type="text" name = "SD460" class="form-control"/></td>
          <td><input type="text" name = "SD490" class="form-control"/></td>
          <td><input type="text" name = "SD493" class="form-control"/></td>
          <td><input type="text" name = "SD495" class="form-control"/></td>
          <td><input type="text" name = "REZERV1" class="form-control"/></td>
          <td><input type="text" name = "REZERV2" class="form-control"/></td>
          <td><input type="text" name = "REZERV3" class="form-control"/></td>
          <td><input type="text" name = "OBOR99" class="form-control"/></td>
          <td><input type="text" name = "OBOR20" class="form-control"/></td>
          <td><input type="text" name = "OBOR40" class="form-control"/></td>
          <td><input type="text" name = "OBOR60" class="form-control"/></td>
          <td><input type="text" name = "OBOR70" class="form-control"/></td>
          <td><input type="text" name = "OBOR90" class="form-control"/></td>
          <td><input type="text" name = "OBOR93" class="form-control"/></td>
          <td><input type="text" name = "OBOR95" class="form-control"/></td>
          <td><input type="text" name = "REZERV4" class="form-control"/></td>
          <td><input type="text" name = "REZERV5" class="form-control"/></td>
          <td><input type="text" name = "REZERV6" class="form-control"/></td>
          <td><input type="text" name = "SORT20" class="form-control"/></td>
          <td><input type="text" name = "SORT40" class="form-control"/></td>
          <td><input type="text" name = "SORT60" class="form-control"/></td>
          <td><input type="text" name = "SORT70" class="form-control"/></td>
          <td><input type="text" name = "SORT87" class="form-control"/></td>
          <td><input type="text" name = "SORT93" class="form-control"/></td>
          <td><input type="text" name = "SORT95" class="form-control"/></td>
          <td><input type="text" name = "SORT96" class="form-control"/></td>
          <td><input type="text" name = "SORT94" class="form-control"/></td>
          <td><input type="text" name = "SORT92" class="form-control"/></td>
          <td><input type="text" name = "SORT90" class="form-control"/></td>
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

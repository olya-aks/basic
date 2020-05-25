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
  <h4>ПЛАН ПО ПОКАЗАТЕЛЯМ ИСПОЛЬЗОВАНИЯ ЛОКОМОТИВОВ ЗА СУТКИ M.2112</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th colspan="3">Электровозы</th>
          <th colspan="3">Тепловозы</th>
          <th colspan="3">Всего</th>
          <th rowspan="2">Участковая скорость</th>
          <th rowspan="2">Техническая скорость</th>
          <th rowspan="2">Производительность локомотива эксплуатируемого парка</th>
          <th rowspan="2">Н/И</th>
          <th rowspan="2">Н/И</th>
          <th rowspan="2">Н/И</th>
          <th rowspan="2">Норма содержания парка маневровых локомотивов</th>
          <th colspan="3">Средняя длина состава</th>
          <th rowspan="2">Рабочий парк в передаточном и вывозном движении</th>
          <th rowspan="2">Рабочий парк поездной</th>
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
          <th>Локомотивов</th>
          <th>Электровозов</th>
          <th>Тепловозов</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD']?></td>
          <td><?=$data['DATE']?></td>
          <td><?=$data['VESE']?></td>
          <td><?=$data['PRZE']?></td>
          <td><?=$data['PRBE']?></td>
          <td><?=$data['VEST']?></td>
          <td><?=$data['PRZT']?></td>
          <td><?=$data['PRBT']?></td>
          <td><?=$data['VESL']?></td>
          <td><?=$data['PRZL']?></td>
          <td><?=$data['PRBL']?></td>
          <td><?=$data['USKOR']?></td>
          <td><?=$data['TSKOR']?></td>
          <td><?=$data['PRZEL']?></td>
          <td><?=$data['REZRV1']?></td>
          <td><?=$data['REZRV2']?></td>
          <td><?=$data['REZRV3']?></td>
          <td><?=$data['NORMA']?></td>
          <td><?=$data['DLINAL']?></td>
          <td><?=$data['DLINAE']?></td>
          <td><?=$data['DLINAT']?></td>
          <td><?=$data['RPPIV']?></td>
          <td><?=$data['RPPZD']?></td>
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
          <th rowspan="2">НОД</th>
          <th rowspan="2">Расчетная дата</th>
          <th colspan="3">Электровозы</th>
          <th colspan="3">Тепловозы</th>
          <th colspan="3">Всего</th>
          <th rowspan="2">Участковая скорость</th>
          <th rowspan="2">Техническая скорость</th>
          <th rowspan="2">Производительность локомотива эксплуатируемого парка</th>
          <th rowspan="2">Н/И</th>
          <th rowspan="2">Н/И</th>
          <th rowspan="2">Н/И</th>
          <th rowspan="2">Норма содержания парка маневровых локомотивов</th>
          <th colspan="3">Средняя длина состава</th>
          <th rowspan="2">Рабочий парк в передаточном и вывозном движении</th>
          <th rowspan="2">Рабочий парк поездной</th>
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
          <th>Локомотивов</th>
          <th>Электровозов</th>
          <th>Тепловозов</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <!--td><input type="text" name = "DATE" class="form-control"/></td-->
          <td><input type="hidden" name = "DATE" /><?php date_default_timezone_set('Europe/Moscow');
            echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "VESE" class="form-control"/></td>
          <td><input type="text" name = "PRZE" class="form-control"/></td>
          <td><input type="text" name = "PRBE" class="form-control"/></td>
          <td><input type="text" name = "VEST" class="form-control"/></td>
          <td><input type="text" name = "PRZT" class="form-control"/></td>
          <td><input type="text" name = "PRBT" class="form-control"/></td>
          <td><input type="text" name = "VESL" class="form-control"/></td>
          <td><input type="text" name = "PRZL" class="form-control"/></td>
          <td><input type="text" name = "PRBL" class="form-control"/></td>
          <td><input type="text" name = "USKOR" class="form-control"/></td>
          <td><input type="text" name = "TSKOR" class="form-control"/></td>
          <td><input type="text" name = "PRZEL" class="form-control"/></td>
          <td><input type="text" name = "REZRV1" class="form-control"/></td>
          <td><input type="text" name = "REZRV2" class="form-control"/></td>
          <td><input type="text" name = "REZRV3" class="form-control"/></td>
          <td><input type="text" name = "NORMA" class="form-control"/></td>
          <td><input type="text" name = "DLINAL" class="form-control"/></td>
          <td><input type="text" name = "DLINAE" class="form-control"/></td>
          <td><input type="text" name = "DLINAT" class="form-control"/></td>
          <td><input type="text" name = "RPPIV" class="form-control"/></td>
          <td><input type="text" name = "RPPZD" class="form-control"/></td>
        </tr>
      </table>
    </div>
  </div>
  <button id="btn_save" type="submit" class="myButton" >Отправить</button>
</form>
<!--button class="styler">Кнопка</button-->
</div><!--КОНЕЦ БЛОКА-ОБЁРТКИ ДЛЯ СОДЕРЖИМОГО МОДАЛЬНОГО ОКНА -->


<?php else: //В случае провала выдаём мессадж ?>
    <div class="container">
        <h3>
            <p>Здесь должно отображаться Ваше изображение</p>
        </h3>
    </div>
<?php endif;?>

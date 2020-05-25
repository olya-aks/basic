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
  <h4>ПЛАН НАЛИЧИЯ МЕСТНОГО ГРУЗА И ТРАНЗИТА M.9191</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="3">НОД</th>
          <th rowspan="3">Расчетная дата</th>
          <th rowspan="2" colspan="3">Местный груз</th>
          <th colspan="11">Рабочий парк</th>
          <th rowspan="2" colspan="8">Наличие местного груза</th>
          <th rowspan="2" colspan="29">Транзит на выход</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">всего</th>
          <th rowspan="2">груженых</th>
          <th colspan="9">порожних</th>
        </tr>
        <tr class="row100 head">
          <th>крытые</th>
          <th>платформы</th>
          <th>полувагоны</th>
          <th>Всего</th>
          <th>крытые</th>
          <th>платформы</th>
          <th>полувагоны</th>
          <th>цистерны</th>
          <th>зерновозы</th>
          <th>рефрежераторы</th>
          <th>прочие</th>
          <th>цементовозы</th>

          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Всего по дороге</th>

          <th>Александров</th>
          <th>Бельково</th>
          <th>Петушки</th>
          <th>Черусти</th>
          <th>Кустаревка</th>
          <th>Климов</th>
          <th>Ряжск 2</th>
          <th>Ряжск 1</th>
          <th>Павелец</th>
          <th>Волово</th>
          <th>Ефремов</th>
          <th>Елец</th>
          <th>Касторная</th>
          <th>Курск</th>
          <th>Готня</th>
          <th>Волфино</th>
          <th>Зерново</th>
          <th>Витемля</th>
          <th>Закопытье</th>
          <th>Сураж</th>
          <th>Шестеровка</th>
          <th>Красное</th>
          <th>Заольша</th>
          <th>Осуга (Ржев)</th>
          <th>Шаховская</th>
          <th>Поварово</th>
          <th>Ховрино</th>
          <th>Савелово</th>
          <th>Всего</th>
        </tr>
        <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD']?></td>
          <td><?=$data['DATE']?></td>
          <td><?=$data['KVKR']?></td>
          <td><?=$data['KVPL']?></td>
          <td><?=$data['KVPV']?></td>
          <td><?=$data['PARKV']?></td>
          <td><?=$data['PARKGR']?></td>
          <td><?=$data['PARKPR']?></td>
          <td><?=$data['PORKR']?></td>
          <td><?=$data['PORPL']?></td>
          <td><?=$data['PORPV']?></td>
          <td><?=$data['PORCS']?></td>
          <td><?=$data['PORZR']?></td>
          <td><?=$data['PORRF']?></td>
          <td><?=$data['PORPR']?></td>
          <td><?=$data['PORCM']?></td>
          <td><?=$data['NAL01']?></td>
          <td><?=$data['NAL02']?></td>
          <td><?=$data['NAL06']?></td>
          <td><?=$data['NAL07']?></td>
          <td><?=$data['NAL08']?></td>
          <td><?=$data['NAL13']?></td>
          <td><?=$data['NAL15']?></td>
          <td><?=$data['NALVS']?></td>
          <td><?=$data['TRALKS']?></td>
          <td><?=$data['TRBELK']?></td>
          <td><?=$data['TRPETU']?></td>
          <td><?=$data['TRCHER']?></td>
          <td><?=$data['TRKUST']?></td>
          <td><?=$data['TRKLIM']?></td>
          <td><?=$data['TRRJS2']?></td>
          <td><?=$data['TRRJS1']?></td>
          <td><?=$data['TRPAVL']?></td>
          <td><?=$data['TRVOLV']?></td>
          <td><?=$data['TREFRM']?></td>
          <td><?=$data['TRELEC']?></td>
          <td><?=$data['TRKAST']?></td>
          <td><?=$data['TRKURS']?></td>
          <td><?=$data['TRGOTN']?></td>
          <td><?=$data['TRVOLF']?></td>
          <td><?=$data['TRZERN']?></td>
          <td><?=$data['TRVITM']?></td>
          <td><?=$data['TRZAKP']?></td>
          <td><?=$data['TRSURG']?></td>
          <td><?=$data['TRSHES']?></td>
          <td><?=$data['TRKRAS']?></td>
          <td><?=$data['TRZAOL']?></td>
          <td><?=$data['TROSUG']?></td>
          <td><?=$data['TRSHAH']?></td>
          <td><?=$data['TRPOVR']?></td>
          <td><?=$data['TRHOVR']?></td>
          <td><?=$data['TRSAVL']?></td>
          <td><?=$data['TRVSEG']?></td>
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
          <th rowspan="3">НОД</th>
          <th rowspan="3">Расчетная дата</th>
          <th rowspan="2" colspan="3">Местный груз</th>
          <th colspan="11">Рабочий парк</th>
          <th rowspan="2" colspan="8">Наличие местного груза</th>
          <th rowspan="2" colspan="29">Транзит на выход</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">всего</th>
          <th rowspan="2">груженых</th>
          <th colspan="9">порожних</th>
        </tr>
        <tr class="row100 head">
          <th>крытые</th>
          <th>платформы</th>
          <th>полувагоны</th>
          <th>Всего</th>
          <th>крытые</th>
          <th>платформы</th>
          <th>полувагоны</th>
          <th>цистерны</th>
          <th>зерновозы</th>
          <th>рефрежераторы</th>
          <th>прочие</th>
          <th>цементовозы</th>

          <th>НОД-01</th>
          <th>НОД-02</th>
          <th>НОД-03</th>
          <th>НОД-04</th>
          <th>НОД-05</th>
          <th>НОД-06</th>
          <th>НОД-07</th>
          <th>Всего по дороге</th>

          <th>Александров</th>
          <th>Бельково</th>
          <th>Петушки</th>
          <th>Черусти</th>
          <th>Кустаревка</th>
          <th>Климов</th>
          <th>Ряжск 2</th>
          <th>Ряжск 1</th>
          <th>Павелец</th>
          <th>Волово</th>
          <th>Ефремов</th>
          <th>Елец</th>
          <th>Касторная</th>
          <th>Курск</th>
          <th>Готня</th>
          <th>Волфино</th>
          <th>Зерново</th>
          <th>Витемля</th>
          <th>Закопытье</th>
          <th>Сураж</th>
          <th>Шестеровка</th>
          <th>Красное</th>
          <th>Заольша</th>
          <th>Осуга (Ржев)</th>
          <th>Шаховская</th>
          <th>Поварово</th>
          <th>Ховрино</th>
          <th>Савелово</th>
          <th>Всего</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <!--td><input type="text" name = "DATE" class="form-control"/></td-->
          <td><input type="hidden" name = "DATE" /><?php date_default_timezone_set('Europe/Moscow');
            echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "KVKR" class="form-control"/></td>
          <td><input type="text" name = "KVPL" class="form-control"/></td>
          <td><input type="text" name = "KVPV" class="form-control"/></td>
          <td><input type="text" name = "PARKV" class="form-control"/></td>
          <td><input type="text" name = "PARKGR" class="form-control"/></td>
          <td><input type="text" name = "PARKPR" class="form-control"/></td>
          <td><input type="text" name = "PORKR" class="form-control"/></td>
          <td><input type="text" name = "PORPL" class="form-control"/></td>
          <td><input type="text" name = "PORPV" class="form-control"/></td>
          <td><input type="text" name = "PORCS" class="form-control"/></td>
          <td><input type="text" name = "PORZR" class="form-control"/></td>
          <td><input type="text" name = "PORRF" class="form-control"/></td>
          <td><input type="text" name = "PORPR" class="form-control"/></td>
          <td><input type="text" name = "PORCM" class="form-control"/></td>
          <td><input type="text" name = "NAL01" class="form-control"/></td>
          <td><input type="text" name = "NAL02" class="form-control"/></td>
          <td><input type="text" name = "NAL06" class="form-control"/></td>
          <td><input type="text" name = "NAL07" class="form-control"/></td>
          <td><input type="text" name = "NAL08" class="form-control"/></td>
          <td><input type="text" name = "NAL13" class="form-control"/></td>
          <td><input type="text" name = "NAL15" class="form-control"/></td>
          <td><input type="text" name = "NALVS" class="form-control"/></td>
          <td><input type="text" name = "TRALKS" class="form-control"/></td>
          <td><input type="text" name = "TRBELK" class="form-control"/></td>
          <td><input type="text" name = "TRPETU" class="form-control"/></td>
          <td><input type="text" name = "TRCHER" class="form-control"/></td>
          <td><input type="text" name = "TRKUST" class="form-control"/></td>
          <td><input type="text" name = "TRKLIM" class="form-control"/></td>
          <td><input type="text" name = "TRRJS2" class="form-control"/></td>
          <td><input type="text" name = "TRRJS1" class="form-control"/></td>
          <td><input type="text" name = "TRPAVL" class="form-control"/></td>
          <td><input type="text" name = "TRVOLV" class="form-control"/></td>
          <td><input type="text" name = "TREFRM" class="form-control"/></td>
          <td><input type="text" name = "TRELEC" class="form-control"/></td>
          <td><input type="text" name = "TRKAST" class="form-control"/></td>
          <td><input type="text" name = "TRKURS" class="form-control"/></td>
          <td><input type="text" name = "TRGOTN" class="form-control"/></td>
          <td><input type="text" name = "TRVOLF" class="form-control"/></td>
          <td><input type="text" name = "TRZERN" class="form-control"/></td>
          <td><input type="text" name = "TRVITM" class="form-control"/></td>
          <td><input type="text" name = "TRZAKP" class="form-control"/></td>
          <td><input type="text" name = "TRSURG" class="form-control"/></td>
          <td><input type="text" name = "TRSHES" class="form-control"/></td>
          <td><input type="text" name = "TRKRAS" class="form-control"/></td>
          <td><input type="text" name = "TRZAOL" class="form-control"/></td>
          <td><input type="text" name = "TROSUG" class="form-control"/></td>
          <td><input type="text" name = "TRSHAH" class="form-control"/></td>
          <td><input type="text" name = "TRPOVR" class="form-control"/></td>
          <td><input type="text" name = "TRHOVR" class="form-control"/></td>
          <td><input type="text" name = "TRSAVL" class="form-control"/></td>
          <td><input type="text" name = "TRVSEG" class="form-control"/></td>
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

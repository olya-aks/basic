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
  <h4>ПЛАН ПО ТОННО-КИЛОМЕТРАМ НЕТТО(ГРУЗООБОРОТ), ПО ГРУЗООБОРОТУ M.4751</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="2">Расчетная дата</th>
          <th rowspan="2">Регион</th>
          <th rowspan="2">Т-км нетто</th>
          <th colspan="3">Месяц</th>
          <th colspan="3">Квартал</th>
          <th colspan="3">Год</th>
        </tr>
        <tr class="row100 head">
          <th>Грузооборот с учетом собственных вагонов в порожнем состоянии</th>
          <th>в т. ч. тарифный грузооборот</th>
          <th>Грузооборот собственных вагонов в порожнем состоянии</th>
          <th>Грузооборот с учетом собственных вагонов в порожнем состоянии</th>
          <th>в т. ч. тарифный грузооборот</th>
          <th>Грузооборот собственных вагонов в порожнем состоянии</th>
          <th>Грузооборот с учетом собственных вагонов в порожнем состоянии</th>
          <th>Тарифный грузооборот, квартал</th>
          <th>Грузооборот собственных вагонов в порожнем состоянии, квартал</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['DATE']?></td>
          <td><?=$data['NOD']?></td>
          <td><?=$data['TKMN']?></td>
          <td><?=$data['GRUZOOBM']?></td>
          <td><?=$data['TARIFM']?></td>
          <td><?=$data['GRSBPM']?></td>
          <td><?=$data['GRUZOOBK']?></td>
          <td><?=$data['TARIFK']?></td>
          <td><?=$data['GRSBPK']?></td>
          <td><?=$data['GRUZOOBG']?></td>
          <td><?=$data['TARIFG']?></td>
          <td><?=$data['GRSBPG']?></td>
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
          <th rowspan="2">Расчетная дата</th>
          <th rowspan="2">Регион</th>
          <th rowspan="2">Т-км нетто</th>
          <th colspan="3">Месяц</th>
          <th colspan="3">Квартал</th>
          <th colspan="3">Год</th>
        </tr>
        <tr class="row100 head">
          <th>Грузооборот с учетом собственных вагонов в порожнем состоянии</th>
          <th>в т. ч. тарифный грузооборот</th>
          <th>Грузооборот собственных вагонов в порожнем состоянии</th>
          <th>Грузооборот с учетом собственных вагонов в порожнем состоянии</th>
          <th>в т. ч. тарифный грузооборот</th>
          <th>Грузооборот собственных вагонов в порожнем состоянии</th>
          <th>Грузооборот с учетом собственных вагонов в порожнем состоянии</th>
          <th>Тарифный грузооборот, квартал</th>
          <th>Грузооборот собственных вагонов в порожнем состоянии, квартал</th>
        </tr>
        <tr class="row100 body">

          <td><input type="hidden" name = "DATE" /><?php date_default_timezone_set('Europe/Moscow');
            echo(date('Y-m-d')); ?></td>
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
          <td><input type="text" name = "TKMN" class="form-control"/></td>
          <td><input type="text" name = "GRUZOOBM" class="form-control"/></td>
          <td><input type="text" name = "TARIFM" class="form-control"/></td>
          <td><input type="text" name = "GRSBPM" class="form-control"/></td>
          <td><input type="text" name = "GRUZOOBK" class="form-control"/></td>
          <td><input type="text" name = "TARIFK" class="form-control"/></td>
          <td><input type="text" name = "GRSBPK" class="form-control"/></td>
          <td><input type="text" name = "GRUZOOBG" class="form-control"/></td>
          <td><input type="text" name = "TARIFG" class="form-control"/></td>
          <td><input type="text" name = "GRSBPG" class="form-control"/></td>
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

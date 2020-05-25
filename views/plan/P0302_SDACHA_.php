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
  <h4>НОРМА СДАЧИ ГРУЖЕНЫХ И ПОРОЖНИХ ПО РПС M.9302</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="3">НОД</th>
          <th rowspan="3" style="min-width:100px ;">Расчетная дата</th>
          <th colspan="19">Сдача</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">Всего</th>
          <th colspan="9">Груженых</th>
          <th colspan="9">Порожних</th>
        </tr>
        <tr class="row100 head">
          <th>всего</th><th>крытых</th><th>платформ</th><th>полувагонов</th><th>зерновозов</th><th>рефрежераторов</th>
          <th>прочих</th><th>цементовозов</th><th>цистерн</th><th>всего</th><th>крытых</th><th>платформ</th>
          <th>полувагонов</th><th>зерновозов</th><th>рефрежераторов</th><th>прочих</th><th>цементовозов</th><th>цистерн</th>
        </tr>
        <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD']?></td>
          <td><?=$data['DATE']?></td>
          <td><?=$data['SDVS']?></td>
          <td><?=$data['SDGRU']?></td>
          <td><?=$data['SDGRKR']?></td>
          <td><?=$data['SDGRPL']?></td>
          <td><?=$data['SDGRPV']?></td>
          <td><?=$data['SDGRZR']?></td>
          <td><?=$data['SDGRPF']?></td>
          <td><?=$data['SDGRPR']?></td>
          <td><?=$data['SDGRCM']?></td>
          <td><?=$data['SDGRCS']?></td>
          <td><?=$data['SDPOR']?></td>
          <td><?=$data['SDPRKR']?></td>
          <td><?=$data['SDPRPL']?></td>
          <td><?=$data['SDPRPV']?></td>
          <td><?=$data['SDPRZR']?></td>
          <td><?=$data['SDPRRF']?></td>
          <td><?=$data['SDPRPR']?></td>
          <td><?=$data['SDPRCM']?></td>
          <td><?=$data['SDPRCS']?></td>
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
            <th rowspan="3" style="min-width:100px ;">Расчетная дата</th>
            <th colspan="19">Сдача</th>
          </tr>
          <tr class="row100 head">
            <th rowspan="2">Всего</th>
            <th colspan="9">Груженых</th>
            <th colspan="9">Порожних</th>
          </tr>
          <tr class="row100 head">
            <th>всего</th>
            <th>крытых</th>
            <th>платформ</th>
            <th>полувагонов</th>
            <th>зерновозов</th>
            <th>рефрежераторов</th>
            <th>прочих</th>
            <th>цементовозов</th>
            <th>цистерн</th>
            <th>всего</th>
            <th>крытых</th>
            <th>платформ</th>
            <th>полувагонов</th>
            <th>зерновозов</th>
            <th>рефрежераторов</th>
            <th>прочих</th>
            <th>цементовозов</th>
            <th>цистерн</th>
          </tr>
          <tr class="row100 body">
            <td><input type="text" name = "NOD" class="form-control"/></td>
            <!--td><input type="text" name = "DATE" class="form-control"/></td-->
            <td><input type="hidden" name = "DATE" /><?php date_default_timezone_set('Europe/Moscow');
              echo(date('Y-m-d')); ?></td>
            <td><input type="text" name = "SDVS" class="form-control"/></td>
            <td><input type="text" name = "SDGRU" class="form-control"/></td>
            <td><input type="text" name = "SDGRKR" class="form-control"/></td>
            <td><input type="text" name = "SDGRPL" class="form-control"/></td>
            <td><input type="text" name = "SDGRPV" class="form-control"/></td>
            <td><input type="text" name = "SDGRZR" class="form-control"/></td>
            <td><input type="text" name = "SDGRPF" class="form-control"/></td>
            <td><input type="text" name = "SDGRPR" class="form-control"/></td>
            <td><input type="text" name = "SDGRCM" class="form-control"/></td>
            <td><input type="text" name = "SDGRCS" class="form-control"/></td>
            <td><input type="text" name = "SDPOR" class="form-control"/></td>
            <td><input type="text" name = "SDPRKR" class="form-control"/></td>
            <td><input type="text" name = "SDPRPL" class="form-control"/></td>
            <td><input type="text" name = "SDPRPV" class="form-control"/></td>
            <td><input type="text" name = "SDPRZR" class="form-control"/></td>
            <td><input type="text" name = "SDPRRF" class="form-control"/></td>
            <td><input type="text" name = "SDPRPR" class="form-control"/></td>
            <td><input type="text" name = "SDPRCM" class="form-control"/></td>
            <td><input type="text" name = "SDPRCS" class="form-control"/></td>
          </tr>
        </table>
      </div>
    </div>
    <button id="btn_save" type="submit" class="myButton" >Отправить</button>
  </form>

</div><!--КОНЕЦ БЛОКА-ОБЁРТКИ ДЛЯ СОДЕРЖИМОГО МОДАЛЬНОГО ОКНА -->


<?php else: //В случае провала выдаём мессадж ?>
    <div class="container">
        <h3>
            <p>Здесь должно отображаться Ваше изображение</p>
        </h3>
    </div>
<?php endif;?>

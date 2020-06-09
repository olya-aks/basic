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
  <h4>ПЛАН ПОГРУЗКИ ПО ГО-3 ПО НОД И РПС ВСЕГО M.9143</h4>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th>НОД</th>
          <th>Расчетная Дата</th>
          <th>Код РПС</th>
          <th>Всего На Все</th>
          <th>Октябрск</th>
          <th>Калининг</th>
          <th>Белорусс</th>
          <th>Московск</th>
          <th>Горьковс</th>
          <th>Северную</th>
          <th>Юго-Запад</th>
          <th>Львовскую</th>
          <th>Молдавск</th>
          <th>Одесскую</th>
          <th>Южную</th>
          <th>Приднепр</th>
          <th>Донецкую</th>
          <th>Сев-Кавкз</th>
          <th>Азербайдж</th>
          <th>Армянскую</th>
          <th>Юго-Востч</th>
          <th>Приволжс</th>
          <th>Куйбышев</th>
          <th>Зап-Казах</th>
          <th>Целинную</th>
          <th>Алма-Атин</th>
          <th>Ср-Азиатс</th>
          <th>Свердловс</th>
          <th>Южно-Урал</th>
          <th>Зап-Сибир</th>
          <th>Красноярс</th>
          <th>Вос-Сибир</th>
          <th>Забайкал</th>
          <th>Д-Восточ</th>
          <th>Туркменс</th>
          <th>Грузинск</th>
          <th>Киргизск</th>
          <th>Таджикск</th>
          <th>Сахалинс</th>
          <th>Эстонск</th>
          <th>Латвийс</th>
          <th>Литовск</th>
          <th>Ж.Д. Якутии</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD']?></td>
          <td><?=$data['DATE']?></td>
          <td><?=$data['RPS']?></td>
          <td><?=$data['VS']?></td>
          <td><?=$data['OKT']?></td>
          <td><?=$data['KLN']?></td>
          <td><?=$data['BEL']?></td>
          <td><?=$data['MSK']?></td>
          <td><?=$data['GRK']?></td>
          <td><?=$data['SEV']?></td>
          <td><?=$data['UZP']?></td>
          <td><?=$data['LVV']?></td>
          <td><?=$data['MLD']?></td>
          <td><?=$data['ODS']?></td>
          <td><?=$data['UGN']?></td>
          <td><?=$data['PRD']?></td>
          <td><?=$data['DON']?></td>
          <td><?=$data['SKV']?></td>
          <td><?=$data['AZR']?></td>
          <td><?=$data['ARM']?></td>
          <td><?=$data['UVS']?></td>
          <td><?=$data['PRV']?></td>
          <td><?=$data['KUB']?></td>
          <td><?=$data['ZKZ']?></td>
          <td><?=$data['CLN']?></td>
          <td><?=$data['ALM']?></td>
          <td><?=$data['SAZ']?></td>
          <td><?=$data['SVR']?></td>
          <td><?=$data['JUR']?></td>
          <td><?=$data['ZSB']?></td>
          <td><?=$data['KRS']?></td>
          <td><?=$data['VSB']?></td>
          <td><?=$data['ZAB']?></td>
          <td><?=$data['DVS']?></td>
          <td><?=$data['TRK']?></td>
          <td><?=$data['GRZ']?></td>
          <td><?=$data['KRG']?></td>
          <td><?=$data['TDG']?></td>
          <td><?=$data['SAH']?></td>
          <td><?=$data['EST']?></td>
          <td><?=$data['LAT']?></td>
          <td><?=$data['LIT']?></td>
          <td><?=$data['YKT']?></td>
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
          <th>НОД</th>
          <th>Расчетная Дата</th>
          <th>Код РПС</th>
          <th>Всего На Все</th>
          <th>Октябрск</th>
          <th>Калининг</th>
          <th>Белорусс</th>
          <th>Московск</th>
          <th>Горьковс</th>
          <th>Северную</th>
          <th>Юго-Запад</th>
          <th>Львовскую</th>
          <th>Молдавск</th>
          <th>Одесскую</th>
          <th>Южную</th>
          <th>Приднепр</th>
          <th>Донецкую</th>
          <th>Сев-Кавкз</th>
          <th>Азербайдж</th>
          <th>Армянскую</th>
          <th>Юго-Востч</th>
          <th>Приволжс</th>
          <th>Куйбышев</th>
          <th>Зап-Казах</th>
          <th>Целинную</th>
          <th>Алма-Атин</th>
          <th>Ср-Азиатс</th>
          <th>Свердловс</th>
          <th>Южно-Урал</th>
          <th>Зап-Сибир</th>
          <th>Красноярс</th>
          <th>Вос-Сибир</th>
          <th>Забайкал</th>
          <th>Д-Восточ</th>
          <th>Туркменс</th>
          <th>Грузинск</th>
          <th>Киргизск</th>
          <th>Таджикск</th>
          <th>Сахалинс</th>
          <th>Эстонск</th>
          <th>Латвийс</th>
          <th>Литовск</th>
          <th>Ж.Д. Якутии</th>
        </tr>
        <tr class="row100 body">
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
          <td><input type="hidden" name = "DATE" /><?php date_default_timezone_set('Europe/Moscow');
            echo(date('Y-m-d')); ?></td>
          <td><input type="text" name = "RPS" class="form-control"/></td>
          <td><input type="text" name = "VS" class="form-control"/></td>
          <td><input type="text" name = "OKT" class="form-control"/></td>
          <td><input type="text" name = "KLN" class="form-control"/></td>
          <td><input type="text" name = "BEL" class="form-control"/></td>
          <td><input type="text" name = "MSK" class="form-control"/></td>
          <td><input type="text" name = "GRK" class="form-control"/></td>
          <td><input type="text" name = "SEV" class="form-control"/></td>
          <td><input type="text" name = "UZP" class="form-control"/></td>
          <td><input type="text" name = "LVV" class="form-control"/></td>
          <td><input type="text" name = "MLD" class="form-control"/></td>
          <td><input type="text" name = "ODS" class="form-control"/></td>
          <td><input type="text" name = "UGN" class="form-control"/></td>
          <td><input type="text" name = "PRD" class="form-control"/></td>
          <td><input type="text" name = "DON" class="form-control"/></td>
          <td><input type="text" name = "SKV" class="form-control"/></td>
          <td><input type="text" name = "AZR" class="form-control"/></td>
          <td><input type="text" name = "ARM" class="form-control"/></td>
          <td><input type="text" name = "UVS" class="form-control"/></td>
          <td><input type="text" name = "PRV" class="form-control"/></td>
          <td><input type="text" name = "KUB" class="form-control"/></td>
          <td><input type="text" name = "ZKZ" class="form-control"/></td>
          <td><input type="text" name = "CLN" class="form-control"/></td>
          <td><input type="text" name = "ALM" class="form-control"/></td>
          <td><input type="text" name = "SAZ" class="form-control"/></td>
          <td><input type="text" name = "SVR" class="form-control"/></td>
          <td><input type="text" name = "JUR" class="form-control"/></td>
          <td><input type="text" name = "ZSB" class="form-control"/></td>
          <td><input type="text" name = "KRS" class="form-control"/></td>
          <td><input type="text" name = "VSB" class="form-control"/></td>
          <td><input type="text" name = "ZAB" class="form-control"/></td>
          <td><input type="text" name = "DVS" class="form-control"/></td>
          <td><input type="text" name = "TRK" class="form-control"/></td>
          <td><input type="text" name = "GRZ" class="form-control"/></td>
          <td><input type="text" name = "KRG" class="form-control"/></td>
          <td><input type="text" name = "TDG" class="form-control"/></td>
          <td><input type="text" name = "SAH" class="form-control"/></td>
          <td><input type="text" name = "EST" class="form-control"/></td>
          <td><input type="text" name = "LAT" class="form-control"/></td>
          <td><input type="text" name = "LIT" class="form-control"/></td>
          <td><input type="text" name = "YKT" class="form-control"/></td>
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

<?php

use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

?>
<div class="site-index">
  <div class="header">
  <h1>Передача плановых показателей</h1>
  <div class="body-content">

<div class="row align-items-end">
    <div class="departments-form">

        <?php $form = ActiveForm::begin(); ?>

        <?=$form->field($model, 'maket',[
          'template' => '<div class=col-sm-3 vend><h4>{label}</h4>{input}</div>',
          ])->dropDownList($model->maket,
                 ['id'=> 'maket',
                   'prompt'=>'-- Выберите макет --',
                  'onchange'=>'
                  $.post( "plan/lists?id='.'"+$("option:selected", "#maket").text(), function( data ) {
                  $( "#region" ).html( data );
                });',

            ]); ?>


        <?= $form->field($model, 'region',[
          'template' => '<div class=col-sm-3 vend><h4>{label}</h4>{input}</div>',
          ])->dropDownList([],
                 ['id'=> 'region',
                 'prompt'=>'-- Выберите регион --',
                ]); ?>



                <div class='col-sm-3 vend'>

                  <?= $form->field($model, 'date', [
                'template' => '<h4>{label}</h4>
                <div class="input-group date" id="datetimepicker2">
                {input}<span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span></div>',
              ]) ?>
            </div>


            <div class='col-xs-1 vend'>
                <div class="form-group">
                    <div>
                        <?= Html::submitButton('Поиск', ['id'=>'search','class' => 'myButton']) ?>
                    </div>
                </div>
              </div>


        <?php ActiveForm::end(); ?>
    </div>
  </div>
  </div>
  </div>
    <div id="select"></div>
</div>

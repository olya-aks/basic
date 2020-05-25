<?php

use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;


?>
<div class="site-signup">
  <h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin()?>
<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'password')->passwordInput() ?>

<?=$form->field($model, 'otdel')->dropDownList($model->otdel, [
           'prompt'=>'-- Выберите отдел --',
         ]); ?>

<div class="form-group">
    <div>
        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php

  ?>
<?php ActiveForm::end() ?>

</div>

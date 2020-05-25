<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Добро пожаловать!';
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Для продолжения, пожалуйста, введите логин и пароль:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div>{input}</div>\n <div>{error}</div>",
            'labelOptions' => ['class' => ''],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'password')->passwordInput() ?>


        <div class="form-group">
            <div>
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>

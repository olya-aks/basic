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
  <div id="errors">
<?php if (Yii::$app->session->hasFlash('validate')): /* данные формы были отправлены? */ ?>
    <?php if ( ! Yii::$app->session->getFlash('validate')): /* форма не прошла валидацию */ ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                <span aria-hidden="true">&times;</span>
            </button>
            <p>При заполнении формы допущены ошибки</p>
            <?php if (Yii::$app->session->hasFlash('form-errors')): /* ошибки */ ?>
                <?php $allErrors = Yii::$app->session->getFlash('form-errors'); ?>
                <ul>
                <?php foreach ($allErrors as $errors): ?>
                    <?php foreach ($errors as $error): ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    <?php else: /* форма прошла валидацию */ ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                <span aria-hidden="true">&times;</span>
            </button>
            <p>Данные сохранены в базе</p>
        </div>
    <?php endif; ?>
<?php endif; ?>
</div>
</div>
<?php else: //В случае провала выдаём мессадж ?>
    <div class="container">
        <h3>
            <p>Здесь должно отображаться Ваше изображение</p>
        </h3>
    </div>
<?php endif;?>

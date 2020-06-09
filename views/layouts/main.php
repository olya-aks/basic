<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class=wrap style="background-image:url('img/background.jpg');background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;">
<?php
    NavBar::begin([
        'brandLabel' => 'МИВЦ',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [ 'class' => 'navbar-inverse navbar-fixed-top', ],
		'brandLabel' => '<img src="img/logo.png" style="display:inline;
        vertical-align: top; height:40px; margin-top:-10px; margin-right:20px"> МИВЦ',

    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            //['label' => 'ГЛАВНАЯ', 'url' => Yii::$app->homeUrl],
            //['label' => 'РЕГИСТРАЦИЯ', 'url' => ['/site/signup'],'visible'=>Yii::$app->user->isGuest],
            Yii::$app->user->isGuest ? (
                ['label' => 'ВХОД', 'url' => ['/site/index']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'ВЫХОД (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();

    ?>
<?php if (Yii::$app->user->isGuest): ?>
    <div class="container">
  <?php else: ?>
    <div class="container" style="background-color: rgba(255, 255, 255, 0.95)">
    <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

</div>
<br><br>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; МИВЦ <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header">
    <div class="wrapp">
        <div class="header__logo-cont">
            <a class="header__logo" title="Kaspersky Lab"  href="#">
                <img class="header__logo-image" src="/theme/assets/img/logo.png" alt="Kaspersky Lab" title="Kaspersky Lab">
            </a>
        </div>
        <nav class="header__menu">

            <?php
                $indexAct = '';
                $indexTasks = '';
                $indexRating = '';
                if(Yii::$app->controller->action->id == 'index'){
                    $indexAct = '-active';
                }
                if(Yii::$app->controller->module->id == 'tasks'){
                    $indexTasks = '-active';
                    $indexAct = '';
                }
                if(Yii::$app->controller->action->id == 'rating'){
                    $indexRating = '-active';
                }
            ?>

            <a class="header__menu-link <?= $indexAct ?>" href="/" title="Главная">Главная</a>
            <a class="header__menu-link <?= $indexTasks ?>" href="<?= Url::toRoute(['/tasks'])?>" title="Задания">Задания</a>
            <a class="header__menu-link <?= $indexRating ?>" href="#" title="Рейтинг">Рейтинг</a>
        </nav>

        <div class="header__controls">

            <?php
            if (Yii::$app->user->isGuest):
                ?>
                <button id="go-1" class="header__login" title="логин">
                    <img class="header__login-image" src="/theme/assets/img/icon_login.svg" alt="login" title="login">
                    <span class="btn btn_small btn_red-dark">войти</span>
                </button>

            <?php else: ?>

                <div class="header__greeting">
                    <a class="header__greeting-text" href="<?= Url::toRoute(['/profile'])?>" title="Приветствие">привет, <?=Yii::$app->user->identity->username; ?></a>
                </div>

                <?= Html::a(Yii::t('user', 'Logout'), ['/user/security/logout'], [
                    'class'       => 'header__login btn btn_small btn_red',
                    'data-method' => 'post'
                ]) ?>
                <!--<button class="header__login" title="логин">
                    <span class="btn btn_small btn_red">выход</span>
                </button>-->

               <!-- --><?/*= Html::a('Профиль', ['#'], [
                    'class'       => 'header__login',
                ]) */?>
            <?php endif; ?>


        </div>
    </div>
</header>
<?= $content ?>

<div class="footer">
    <div class="footer__wrapp">
        <img class="footer__cup" src="/theme/assets/img/cup.png" alt="" title="">
        <div class="footer__text-link">
            <a class="footer__link" href="#" title="Полные правила">Полные правила</a>
        </div>
        <div class="footer__mark-link">
            <a class="footer__mark" href="#" title="Полные правила">Kaspersky Student’s Challenge 2016</a>
        </div>
        <div class="footer__social-link">
            <div class="socials">
                <a class="social-link" href="#"><img src="/theme/assets/img/social_vk.svg"></a>
                <a class="social-link" href="#"><img src="/theme/assets/img/social_f.svg"></a>
                <a class="social-link" href="#"><img src="/theme/assets/img/social_twitter.svg"></a>
            </div>
        </div>

    </div>
</div>

<!--<div class="wrap">

    <?php
/*        if (Yii::$app->user->isGuest):
    */?>
            <a href="#auth" class="open_modal btn btn-success">Вход</a>

    <?php /*else: */?>
            <?/*= Html::a(Yii::t('user', 'Logout'), ['/user/security/logout'], [
                'class'       => 'btn btn-danger',
                'data-method' => 'post'
            ]) */?>
    <?php /*endif; */?>
    <div class="container">
        <?/*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?>
        <?/*= Alert::widget() */?>
        <?/*= $content */?>
    </div>
</div>-->

<!--<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; kaspersky <?/*= date('Y') */?></p>

        <p class="pull-right"><?/*= Yii::powered() */?></p>
    </div>
</footer>-->


<!--<div class="popup" id="auth">
    <h2 class="popup-title">Авторизация</h2>
    <div class="popup-header">
        <img class="popup-header-logo" src="/theme/kaspersky//img/logo.png" alt="">
        <h2 class="popup-header-title">НОВЫЙ УЧАСТНИК!</h2>
        <img class="popup-header-kubok" src="/theme/kaspersky/img/kubok.png" alt="">
    </div>
    <?/*= \frontend\widgets\Login::widget(); */?>
</div>-->

<div class="popup-1" id="auth">
    <div class="first-window">
        <h2>1.Вход через социальную сеть </h2>
        <img class="first-window-header-logo" src="/theme/kaspersky/img/logo-color.png" alt="">
        <span class="line"></span>

        <?= \frontend\widgets\Login::widget(); ?>
    </div>
</div>



<!--<div class="popup" id="reg">
    <h2 class="popup-title">Регистрация</h2>
    <div class="popup-header">
        <img class="popup-header-logo" src="/theme/kaspersky//img/logo.png" alt="">
        <h2 class="popup-header-title">НОВЫЙ УЧАСТНИК!</h2>
        <img class="popup-header-kubok" src="/theme/kaspersky/img/kubok.png" alt="">
    </div>
    <span id="regForm"></span>

</div>-->


<div id="overlay"></div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

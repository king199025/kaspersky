<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use dektrium\user\widgets\Connect;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View                   $this
 * @var yii\widgets\ActiveForm         $form
 * @var dektrium\user\models\LoginForm $model
 * @var string                         $action
 */

?>

<?php if (Yii::$app->user->isGuest): ?>
    <?php $form = ActiveForm::begin([
        'id'                     => 'login-widget-form',
        'options'                => ['class' => 'form-first-window'],
        'action'                 => Url::to(['/user/security/login']),
        'enableAjaxValidation'   => true,
        'enableClientValidation' => false,
        'validateOnBlur'         => false,
        'validateOnType'         => false,
        'validateOnChange'       => false,
    ]) ?>

   <!-- <?/*= $form->field($model, 'login')->textInput(['placeholder' => 'Укажите здесь свой электронный адрес для связи', 'class' => 'mail-input'])->label(false) */?>

    --><?/*= $form->field($model, 'password')->passwordInput(['placeholder' => 'А здесь ваш пароль', 'class' => 'house-input'])->label(false) */?>

   <!-- --><?/*= $form->field($model, 'rememberMe')->checkbox() */?>

   <!-- --><?/*= Html::submitButton('ok', ['class' => 'popup-form-knopka modal_close']) */?>
<div class="icon-items">
    <?= Connect::widget([
        'baseAuthUrl' => ['/user/security/auth'],
    ]) ?>
</div>
    <?php ActiveForm::end(); ?>
<?php else: ?>
    <?= Html::a(Yii::t('user', 'Logout'), ['/user/security/logout'], [
        'class'       => 'btn btn-danger btn-block',
        'data-method' => 'post'
    ]) ?>
<?php endif ?>



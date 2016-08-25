<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var dektrium\user\models\User $model
 * @var dektrium\user\models\Account $account
 */

$this->title = Yii::t('user', 'Sign in');
?>
<div class="popup" id="auth2">
    <h2 class="popup-title"><?= Yii::t('user', 'In order to finish your registration, we need you to enter following fields') ?></h2>
    <div class="popup-header">
        <img class="popup-header-logo" src="/theme/kaspersky//img/logo.png" alt="">
        <h2 class="popup-header-title">НОВЫЙ УЧАСТНИК!</h2>
        <img class="popup-header-kubok" src="/theme/kaspersky/img/kubok.png" alt="">
    </div>


    <?php $form = ActiveForm::begin([
        'id' => 'connect-account-form',
        'options'                => ['class' => 'popup-form'],
        'enableAjaxValidation'   => true,
        'enableClientValidation' => false,
        'validateOnBlur'         => false,
        'validateOnType'         => false,
        'validateOnChange'       => false,
    ]); ?>

    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Укажите здесь свой электронный адрес для связи', 'class' => 'mail-input'])->label(false) ?>

    <?= $form->field($model, 'username')->hiddenInput()->label(false); ?>
    <?= $form->field($model, 'institution')->textInput(['placeholder' => 'А здесь название вашего учебного заведения', 'class' => 'house-input'])->label(false); ?>

    <?= Html::submitButton('ok', ['class' => 'popup-form-knopka modal_close']) ?>

    <?php ActiveForm::end(); ?>

</div>


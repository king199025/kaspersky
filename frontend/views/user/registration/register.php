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
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\User $user
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin([
    'id' => 'registration-form',
    'options' => ['class' => 'popup-form'],
    'enableAjaxValidation' => true,
    'enableClientValidation' => false,
]); ?>

<?= $form->field($model, 'email')->textInput(['placeholder' => 'Укажите здесь свой электронный адрес для связи', 'class' => 'mail-input'])->label(false) ?>

<?= $form->field($model, 'institution')->textInput(['placeholder' => 'А здесь название вашего учебного заведения', 'class' => 'house-input'])->label(false); ?>
<?php if ($module->enableGeneratingPassword == false): ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
<?php endif ?>

<?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'popup-form-knopka modal_close']) ?>
<?= Connect::widget([
    'baseAuthUrl' => ['/user/security/auth'],
]) ?>
<?php ActiveForm::end(); ?>


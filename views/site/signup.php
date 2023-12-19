<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" style="margin-top: 60px">
    <h1 style="color: white; margin-top: 60px; font-family: Lighthaus; font-size: 32px; margin-bottom: 20px;"><?= Html::encode($this->title) ?></h1>

    <p style="color: #FFF; font-family: Montserrat; font-size: 16px; font-style: normal; font-weight: 300; line-height: normal;" >Пожалуйста, введите данные, чтобы зарегистрироваться:</p>

    <div class="row" style="margin-bottom: 40px">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3 text-white'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username',)->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox text-white\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div style="background: #892810; border-radius: 50px; color: white; text-align: center; padding-top:5px; padding-bottom: 5px">
                    <?= Html::submitButton('Зарегистрироваться', ['style' => 'color:white; background: #892810; border:none;', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

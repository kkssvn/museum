<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\Support $model */  //изменим

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Обращение в службу поддержки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about" style="margin-bottom: 40px">
    <h1 style="color: white;margin-top: 60px; font-family: Lighthaus; font-size: 32px; margin-bottom: 20px;"><?= Html::encode($this->title) ?></h1>

    <p style="color: #FFF; font-family: Montserrat; font-size: 16px; font-style: normal; font-weight: 300; line-height: 25px;">
        Уважаемые клиенты!

        Мы рады приветствовать вас на странице нашей службы поддержки. Мы стремимся обеспечить вас качественным
        обслуживанием и помочь вам решить любые возникающие вопросы или проблемы.

        Наша команда профессионалов всегда готова оказать вам помощь и поддержку в любое время. Мы ценим каждого клиента
        и делаем все возможное, чтобы удовлетворить ваши потребности.

        Если у вас есть какие-либо вопросы, замечания или предложения, пожалуйста, не стесняйтесь обращаться к нам. Мы
        готовы выслушать вас и предоставить необходимую информацию или помощь.

        Спасибо, что выбрали нас! Мы ценим ваше доверие и готовы помочь вам в любое время.

        С уважением,
        Команда службы поддержки.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-form-label mr-lg-3 text-white'],
                    'inputOptions' => ['class' => 'form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'surname')->textInput() ?>
            <?= $form->field($model, 'patronymic')->textInput() ?>
            <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'email')->textInput() ?>
            <?= $form->field($model, 'number')->textInput()->widget(\yii\widgets\MaskedInput::class, ['mask' => '+9 (999) 999-99-99']) ?>


            <div class="form-group">
                <div style="background: #892810; border-radius: 50px; color: white; text-align: center; padding-top:5px; padding-bottom: 5px">
                    <?= Html::submitButton('Отправить', ['style' => 'color:white; background: #892810; border:none;', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>




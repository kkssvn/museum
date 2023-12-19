<?php use yii\bootstrap5\ActiveForm;
use yii\helpers\Url; ?>
<?php

use yii\bootstrap5\Html;
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-index">
    <h1 style="color: white;margin-top: 60px; font-family: Lighthaus; font-size: 32px; margin-bottom: 20px;"><?php echo $sessions['title_2']?></h1>

    <div class="d-flex justify-content-between" style="margin-bottom: 40px;">
        <div class="" style="width: 33%">
            <img src="image/<?php echo $sessions['image_1']; ?>" class="card-img-top" alt="...">
        </div>
        <div class="d-flex" style="width: 65%; display: inline-flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 30px;">
            <p style="color: #FFF; font-family: Montserrat; font-size: 16px; font-style: normal; font-weight: 300; line-height: normal;"> <?php echo $sessions['description']?></p>

            <div class="d-flex flex-lg-wrap" style="gap: 15px;">
                <?php foreach ($timetables as $timetable): ?>
                    <div class="timetable" style="
                display: inline-flex;
                align-items: flex-start;
                gap: 30px;">
                        <div class="day" style="
                display: flex;
                padding: 7px;
                width: 170px;
                justify-content: center;
                align-items: center;
                gap: 10px;
                color: #892810;
                border-radius: 50px;
                background: rgba(255, 255, 255, 0.80);">
                            <?php echo $timetable['day']?>
                        </div>
                        <div class="time" style="
                display: flex;
                padding: 7px 20px;
                justify-content: center;
                align-items: center;
                gap: 10px;
                border-radius: 50px;
                border: 1px solid #FFF;
                color: white;
                ">
                            <?php echo $timetable['time1']?>
                        </div>

                        <div class="time" style="
                display: flex;
                padding: 7px 20px;
                justify-content: center;
                align-items: center;
                gap: 10px;
                border-radius: 50px;
                border: 1px solid #FFF;
                color: white;
                ">
                            <?php echo $timetable['time2']?>
                        </div>

                        <div class="time" style="
                display: flex;
                padding: 7px 20px;
                justify-content: center;
                align-items: center;
                gap: 10px;
                border-radius: 50px;
                border: 1px solid #FFF;
                color: white;
                ">
                            <?php echo $timetable['time3']?>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="
            border-radius: 50px;
            background: #892810;
            color: white;
            display: flex;
            padding: 7px 20px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            text-decoration: none">
                Забронировать билет
            </a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background: #1A1108;">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white">Бронирование билета</h1>
                        </div>
                        <div class="modal-body"">

                            <div class="row">
                                <div class="col-lg">
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
                                    <?= $form->field($model, 'number')->textInput()->widget(\yii\widgets\MaskedInput::class, ['mask' => '+9 (999) 999-99-99']) ?>
                                    <?= $form->field($model, 'date')->textInput()?>

                                    <div class="form-group">
                                        <div style="background: #892810; border-radius: 50px; color: white; text-align: center; padding-top:5px; padding-bottom: 5px">
                                            <?= Html::submitButton('Отправить', ['style' => 'color:white; background: #892810; border:none;', 'name' => 'login-button']) ?>
                                        </div>
                                    </div>

                                    <?php ActiveForm::end(); ?>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

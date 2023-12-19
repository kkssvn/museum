<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact" style="margin-bottom: 40px">
    <h1 style="color: white;margin-top: 60px; font-family: Lighthaus; font-size: 32px; margin-bottom: 20px;"><?= Html::encode($this->title) ?></h1>

    <div class="d-flex justify-content-between" style="margin-bottom: 30px;">
        <div class="d-flex justify-content-around" style="width: 20%; align-items: center">
            <img src="./image/call.svg" alt="">
            <a href="tel:+79999999999" style="
                color: #FFF;
                font-family: Montserrat;
                font-size: 18px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
                text-decoration: none">
                +7 (999) 999 99-99
            </a>
        </div>

        <div class="d-flex justify-content-around" style="width: 28%; align-items: center">
            <img src="./image/mail.svg" alt="">
            <a href="mailto:muzeikraewed@gmail.com" style="
                color: #FFF;
                font-family: Montserrat;
                font-size: 18px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
                text-decoration: none">
                muzeikraewed@gmail.com
            </a>
        </div>

        <div class="d-flex justify-content-around" style="width: 26%; align-items: center">
            <img src="./image/map.svg" alt="">
            <a href="" style="
                color: #FFF;
                font-family: Montserrat;
                font-size: 18px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
                text-decoration: none">
                Курган, ул. Пушкина, 137
            </a>
        </div>
    </div>

    <div style="-moz-border-radius: 14px 14px 14px 14px; /* Firefox */
    -webkit-border-radius: 14px 14px 14px 14px; /* Safari, Chrome */
    -khtml-border-radius: 14px 14px 14px 14px; /* KHTML */
    border-radius: 14px 14px 14px 14px; /* CSS3 */
    overflow: hidden;
    position: relative;
    -webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC);">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8d58597459ed9829ee63893d6d11f00c4922d5f79c043782431e71ee575563ec&amp;width=1110&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</div>

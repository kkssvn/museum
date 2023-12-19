<?php use yii\helpers\Url; ?>
<?php

use yii\bootstrap5\Html;

$this->title = 'Выставки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h1 style="color: white;margin-top: 60px; font-family: Lighthaus; font-size: 32px; margin-bottom: 20px;"><?= Html::encode($this->title) ?></h1>


    <p style="color: #FFF; font-family: Montserrat; font-size: 16px; font-style: normal; font-weight: 300; line-height: normal;">Мы всегда рады гостям, поэтому всегда устраиваем интересные выставки, и другие мероприятия </p>

    <div class="d-flex flex-lg-wrap row-cols-4" style="margin-bottom: 40px;">
        <?php foreach ($sessions as $session): ?>
            <div class="d-flex flex-column" style="margin-top: 30px;">
                <div class="d-flex flex-column">
                    <div class="" style="width:  250px;">
                        <img src="image/<?php echo $session['image_2']; ?>" class="card-img-top" alt="...">
                        <div class="">
                            <p class="card-title" style="
                margin-top: -90px;
                margin-left: 7px;
                margin-bottom: 10px;
                color: #2F2F2F;
                font-family: Montserrat;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
                ">
                                <?php echo $session['title']; ?></p>
                            <p class="card-text" style="
                color: #554830;
                font-family: Lighthaus;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;

                margin-left: 7px;">
                                <?php echo $session['title_2']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="width: 250px; margin-top: 30px; align-items: center">
                    <img src="./image/icon_next.svg" alt="">
                    <a href="<?php echo Url::toRoute(['site/session2', 'id' => $session['id']]);?>" style="
                color: #FFF;
                font-family: Montserrat;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
                text-transform: uppercase;
                text-decoration: none">
                        Подробнее
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>

<?php use yii\helpers\Url; ?>
<?php

use yii\bootstrap5\Html;

$this->title = 'Музей Краевед';
?>
<div id="carouselExampleCaptions" class="carousel slide" style="margin-top: 80px">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./image/1sl.png" class="d-block w-100" alt="..." style="border-radius: 10px">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="slide-title"
                    style="margin-top: -250px; font-family: Lighthaus; font-size: 32px; margin-bottom: 20px;">
                    Выставка «Петергоф. Сокровища российской императрицы»</h5>
                <p style="width: 800px; color: #FFF; font-family: Montserrat; font-size: 16px; font-style: normal; font-weight: 300; line-height: normal;">
                    Выставка «Петергоф. Сокровища российской императрицы» посвящена поэтическому и загадочному
                    образу императрицы Александры Федоровны, прусской принцессы, ставшей супругой императора
                    Николая I.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="./image/2sl.png" class="d-block w-100" alt="..." style="border-radius: 10px">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="slide-title"
                    style="margin-top: -250px; font-family: Lighthaus; font-size: 32px; margin-bottom: 20px;">
                    Выставка «Новороссия»</h5>
                <p style="width: 800px; color: #FFF; font-family: Montserrat; font-size: 16px; font-style: normal; font-weight: 300; line-height: normal;">
                    Впервые на площадке музея при поддержке Министерства культуры Российской Федерации
                    представлен проект, который дает возможность познакомиться с историей обширного
                    региона в Северном Причерноморье, вошедшего в 1764 г. в состав Российской империи.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="./image/3sl.png" class="d-block w-100" alt="..." style="border-radius: 10px">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="slide-title"
                    style="margin-top: -250px; font-family: Lighthaus; font-size: 32px; margin-bottom: 20px;">
                    Выставка «Записки ювелира. Бриллиантовая история»</h5>
                <p style="width: 800px; color: #FFF; font-family: Montserrat; font-size: 16px; font-style: normal; font-weight: 300; line-height: normal;">
                    Уникальная выставочная экспозиция «Записки ювелира. Бриллиантовая история», впервые иллюстрирующая
                    традицию преемственности в российском ювелирном искусстве, стартовала в Москве. Проект продолжает
                    серию выставок Исторического музея, демонстрирующих творческую связь мастеров прошлого и
                    современности. </p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="site-index">
    <h5 class="title" style="
    margin-top: 60px;
    margin-bottom: 30px;
    color: #FFF;
    font-family: Lighthaus;
    font-size: 32px;
    font-style: normal;
    font-weight: 400;
    line-height: 75%;">
        Приглашаем на выставки и события:</h5>

    <p class="txt" style="
    color: #FFF;
    font-family: Montserrat;
    font-size: 18px;
    font-style: normal;
    font-weight: 200;
    line-height: normal;">
        Мы всегда рады гостям, поэтому всегда устраиваем интересные выставки, и другие мероприятия
    </p>

    <div class="d-flex row-cols-4" style="margin-bottom: 40px">
    <?php foreach ($categorys as $category): ?>
            <div class="d-flex flex-column">
                <div class="d-flex flex-column">
                    <div class="" style="width:  250px;">
                        <img src="image/<?php echo $category['image']; ?>" class="card-img-top" alt="...">
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
                                <?php echo $category['description']; ?></p>
                            <p class="card-text" style="
                color: #554830;
                font-family: Lighthaus;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;

                margin-left: 7px;">
                                <?php echo $category['title']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="width: 250px; margin-top: 30px; align-items: center">
                    <img src="./image/icon_next.svg" alt="">
                    <a href="<?php echo Url::toRoute(['site/session', 'id'=>$category['id']]);?>" style="
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

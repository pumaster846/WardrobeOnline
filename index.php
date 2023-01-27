<?php
    session_start();
    require_once('assets/php/connection-db/logic.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-home-page.css">
    <title>Wardrobe Online</title>
    <link href="assets/fonts/fontawesome/css/all.css" rel="stylesheet">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="container">

        <? require_once('header.php'); ?>

                <div class="header-text">
<pre class="main-title">
Сайт по созданию
дизайна одежды</pre>
                    <div class="sub-title">Фантазируй<span>&#8226;</span>Создавай<span>&#8226;</span>Воплощай</div>
                    <h1 class="site-name">Wardrobe Online</h1>
                </div>
                <div class="main-button-catalog">
                    <a href="catalog.php">Создать свой стиль</a>
                </div>
                <div class="header-hint">
                    Узнать больше
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M18.5 4H13.5C9.63401 4 6.5 7.13401 6.5 11V21C6.5 24.866 9.63401 28 13.5 28H18.5C22.366 28 25.5 24.866 25.5 21V11C25.5 7.13401 22.366 4 18.5 4Z" stroke="#969696" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 14V9" stroke="#F86A38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </header>

            <div class="section">
                <div class="section-title">Наша цель &#8212; помочь<br>в создании вашего дизайна одежды</div>
                <div class="section-content">
                    <div class="section-title"></div>
<pre class="section-text">
Wardrobe Online - является конструктором,
в котором Вы можете разработать свой дизайн на
различные виды одежды для личного пользования
или бренда для торговли</pre>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Мы предлагаем</div>
                <div class="section-content">
                    <div class="table-content">
                        <div class="first-column">
<div class="column-item" data-text="Создавайте собственный стиль одежды,
который дополнит Ваш гардероб" data-img="image1.jpg">разработка дизайна
для личного пользования</div>
<div class="column-item" data-text="Создавайте дизайн для брендированной одежды,
которая пойдет на продажу" data-img="image2.jpg">разработка дизайна
для бренда одежды</div>
<div class="column-item" data-text="Не ищите одежду, которая подойдет
по размеру - просто введите свои параметры" data-img="image3.jpg">подбор размера одежды
под ваши параметры</div>
<div class="column-item" data-text="Фантазируйте и создавайте собственный дизайн не выходя из дома"data-img="image4.jpg">экономия вашего
ценного времени и сил</div>
                        </div>
                        <div class="second-column">
                            <img src="assets/images/image1.jpg" alt="" class="column-img">
                            <div class="column-footer">
                                <div class="column-text">Создавайте собственный стиль одежды, который дополнит Ваш гардероб</div>
                                <div class="button-catalog">
                                    <a href="catalog.php">Перейти к созданию</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('div[class="column-item"]').on('click', function(){
        var 
            $itemValueText = $(this).data('text'),
            $itemValueImg  = $(this).data('img');
            
        $(this).parent().find('div[class="column-item"]').css({'border-right':'2px solid #FFF', 'color':'#FFF'});
        $(this).css({'border-right':'2px solid #F86A38', 'color':'#F86A38'});
        $innerText = $('.column-text').html($itemValueText);
        $innerImg = $('.column-img').attr("src", "assets/images/" + $itemValueImg);
    });
</script>
</html>
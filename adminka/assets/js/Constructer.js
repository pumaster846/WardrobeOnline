$('.privat-office').remove();
$('.private-office').remove();

//Выделение части тела
$('g#pieceClothing').click(function() {
    $(this).toggleClass('piece-clothing-select');
});

//Покраска цветом
$('.color-block.color').on('click', function(){
    var $color = $(this).attr('data-color');
    if($('g#pieceClothing').hasClass('piece-clothing-select')){
        $('g.piece-clothing-select').children('#strokePieceClothing').attr('fill', '#' + $color);
        $('g').removeClass('piece-clothing-select');
    }
});

//Покраска текстурой
$('.color-block.texture').on('click', function(){
    var $texture = $(this).attr('data-textureID');
    if($('g#pieceClothing').hasClass('piece-clothing-select')){
        $('g.piece-clothing-select').children('#strokePieceClothing').attr('fill', 'url(#' + $texture + ')');
        $('g').removeClass('piece-clothing-select');
    }
});

//смена панели настроек
$('.toolbar-item').on('click', function() {
    var $tool = $(this).attr('data-toolId');
    switch($tool){
        case("color"):    //Инструмент цвет
            $('.settings-block').removeClass('active');
            $('#colorSettings').addClass('active');
        break;
        case("details"):  //Инструмент детали
            $('.settings-block').removeClass('active');
            $('#detailsSettings').addClass('active');
        break;
        case("size"):    //Инструмент размер
            $('.settings-block').removeClass('active');
            $('#sizesSettings').addClass('active');
        break;
        case("size-lock"):
            alert('Для доступа к инструменту необходимо быть авторизованным на сайте');
            $('.modal-dialog').addClass('active');
        break;
        case("save-lock"):
            alert('Для доступа к инструменту необходимо быть авторизованным на сайте');
            $('.modal-dialog').addClass('active');
        break;
    }
});

//Добавление деталей
$('.detail-block.collar').on('click', function(){   //Добавление воротников
    var $detail = $(this).attr('data-coordinates');
    $('path.collar').attr('d', $detail);
});
$('.detail-block.pocket').on('click', function(){   //Добавление карманов
    var $detail = $(this).attr('data-coordinates');
    $('path.pocket').attr('d', $detail);
});

//Изменение расположения деталей одежды
function move() {
    var $positionY = $('#controlButtonVertical').val(),
        $positionX = $('#controlButtonHorizontal').val();
        $('g.move-item.piece-clothing-select').attr('transform', 'translate(' + $positionX +',' + $positionY + ')');
};

$('#move-detail-right').on('mousedown', function() {
    timer = setInterval(function() {
        var value = $('#controlButtonHorizontal').val();
        $('#controlButtonHorizontal').val(++value);
        if($('g.move-item').hasClass('piece-clothing-select')){ move(); }
    }, 30);
}).on('mouseup', function () {
    clearTimeout(timer);
});

$('#move-detail-left').on('mousedown', function(){
    timer = setInterval(function() {
        var value = $('#controlButtonHorizontal').val();
        $('#controlButtonHorizontal').val(--value);
        if($('g.move-item').hasClass('piece-clothing-select')){ move(); }
    }, 30);
}).on('mouseup', function () {
    clearTimeout(timer);
});

$('#move-detail-up').on('mousedown', function(){
    timer = setInterval(function() {
        var value = $('#controlButtonVertical').val();
        $('#controlButtonVertical').val(--value);
        if($('g.move-item').hasClass('piece-clothing-select')){ move(); }
    }, 30);
}).on('mouseup', function () {
    clearTimeout(timer);
});

$('#move-detail-down').on('mousedown', function(){
    timer = setInterval(function() {
        var value = $('#controlButtonVertical').val();
        $('#controlButtonVertical').val(++value);
        if($('g.move-item').hasClass('piece-clothing-select')){ move(); }
    }, 30);
}).on('mouseup', function () {
    clearTimeout(timer);
});

$('#move-detail-rotate-right').on('mousedown', function(){
    timer = setInterval(function() {
        var value = $('#controlButtonRotate').val();
        $('#controlButtonRotate').val(++value);
        if($('g.move-item').hasClass('piece-clothing-select')){
            var $rotateValue = $('#controlButtonRotate').val();
            $('g.move-item.piece-clothing-select').children('path#strokePieceClothing').css({'transform': 'rotate(' + $rotateValue + 'deg)'});
         }
    }, 30);
}).on('mouseup', function () {
    clearTimeout(timer);
});

$('#move-detail-rotate-left').on('mousedown', function(){
    timer = setInterval(function() {
        var value = $('#controlButtonRotate').val();
        $('#controlButtonRotate').val(--value);
        if($('g.move-item').hasClass('piece-clothing-select')){
            var $rotateValue = $('#controlButtonRotate').val();
            $('g.move-item.piece-clothing-select').children('path#strokePieceClothing').css({'transform': 'rotate(' + $rotateValue + 'deg)'});
         }
    }, 30);
}).on('mouseup', function () {
    clearTimeout(timer);
});

//вывод международных параметров
$('.size-block.size').on('click', function() {
    var
        $breastGirth = $(this).attr('data-sizebreast'),
        $waistGirth  = $(this).attr('data-sizewaist'),
        $hipGirth    = $(this).attr('data-sizehip');

        if($('g#sizeMarkers').children().hasClass('personal-parameter')) {
            $('g#sizeMarkers').children('.check').addClass('international-parameter');
            $('g#sizeMarkers').children().removeClass('personal-parameter');
        }

        $('.international-parameter').addClass('check');

        $('g#sizeMarkers').children('text#valueMarkerBreast').text($breastGirth + " " + "см");
        $('g#sizeMarkers').children('text#valueMarkerWaist').text($waistGirth + " " + "см");
        $('g#sizeMarkers').children('text#valueMarkerHip').text($hipGirth + " " + "см");
});

//вывод и сохранение персональных параметров
$('#saveUserSize').on('click', function() {
    var
        $breastGirth    = $('#breastGirth').val(),
        $waistGirth     = $('#waistGirth').val(),
        $hipGirth       = $('#hipGirth').val(),
        $shouldersWidth = $('#shouldersWidth').val(),
        $neckGirth      = $('#neckGirth').val(),
        $shouldersGirth = $('#shouldersGirth').val(),
        $sleeveLength   = $('#sleeveLength').val(),
        $productLength  = $('#productLength').val();

        if($('g#sizeMarkers').children().hasClass('international-parameter')) {
            $('.international-parameter').addClass('check');
            $('g#sizeMarkers').children().removeClass('international-parameter');
        }

        $('g#sizeMarkers').children().addClass('personal-parameter');

        $('g#sizeMarkers').children('text#valueMarkerBreast').text($breastGirth + " " + "см");
        $('g#sizeMarkers').children('text#valueMarkerWaist').text($waistGirth + " " + "см");
        $('g#sizeMarkers').children('text#valueMarkerHip').text($hipGirth + " " + "см");
        $('g#sizeMarkers').children('text#valueMarkerShouldersW').text($shouldersWidth + " " + "см");
        $('g#sizeMarkers').children('text#valueMarkerNeck').text($neckGirth + " " + "см");
        $('g#sizeMarkers').children('text#valueMarkerShouldersG').text($shouldersGirth + " " + "см");
        $('g#sizeMarkers').children('text#valueMarkerSleeve').text($sleeveLength + " " + "см");
        $('g#sizeMarkers').children('text#valueMarkerLength').text($productLength + " " + "см");
});


//сравнение параметров пользователя и стандартов
function cleaner() {
    $('.compareBreast').removeClass('green');
    $('.compareBreast').removeClass('yellow');
    $('.compareBreast').removeClass('red');
    $('.compareWaist').removeClass('green');
    $('.compareWaist').removeClass('yellow');
    $('.compareWaist').removeClass('red');
    $('.compareHip').removeClass('green');
    $('.compareHip').removeClass('yellow');
    $('.compareHip').removeClass('red');
    $('g#sizeMarkers').children('text#valueMarkerBreast').removeClass('green');
    $('g#sizeMarkers').children('text#valueMarkerBreast').removeClass('yellow');
    $('g#sizeMarkers').children('text#valueMarkerBreast').removeClass('red');
    $('g#sizeMarkers').children('text#valueMarkerWaist').removeClass('green');
    $('g#sizeMarkers').children('text#valueMarkerWaist').removeClass('yellow');
    $('g#sizeMarkers').children('text#valueMarkerWaist').removeClass('red');
    $('g#sizeMarkers').children('text#valueMarkerHip').removeClass('green');
    $('g#sizeMarkers').children('text#valueMarkerHip').removeClass('yellow');
    $('g#sizeMarkers').children('text#valueMarkerHip').removeClass('red');
};

//выбор размера стандарт
$('.size-block.compare').on('click', function() {
    $('.size-block.compare').removeClass('compare-size-check');
    $(this).addClass('compare-size-check');
});

$('#compareUserSize').on('click', function() {
    cleaner();
    if($('.size-block.compare').hasClass('compare-size-check')) {
        var //параметры стандартов
            $breastGirth     = parseInt($('.size-block.compare.compare-size-check').attr('data-sizebreast')),
            $waistGirth      = parseInt($('.size-block.compare.compare-size-check').attr('data-sizewaist')),
            $hipGirth        = parseInt($('.size-block.compare.compare-size-check').attr('data-sizehip')),

            //параметры пользователя
            $userBreastGirth = parseFloat($('#breastGirthСompare').val()),
            $userWaistGirth  = parseFloat($('#waistGirthСompare').val()),
            $userHipGirth    = parseFloat($('#hipGirthСompare').val());

            //проверка на то, что поле "Обхват груди" не пустое
            if($userBreastGirth > 0) {

                //проверка: размер стандарта > размера пользователя
                if ($breastGirth > $userBreastGirth) {
                    $res = $breastGirth - $userBreastGirth; //расчет на сколько см больше

                    //определение как хорошо сидит данный размер
                    if ($res > 0 && $res <= 1) {
                        if($('g#sizeMarkers').children().hasClass('compareBreast')) {
                            $('.compareBreast').addClass('green');
                            $('g#sizeMarkers').children('text#valueMarkerBreast').text("Хорошо: + " + $res.toFixed(1) + "см в запасе").addClass('green');
                        }
                        console.log('одежда сидит хорошо: green ' + $res);
                    }
                    if($res > 1 && $res <= 2){
                        if($('g#sizeMarkers').children().hasClass('compareBreast')) {
                            $('.compareBreast').addClass('yellow');
                            $('g#sizeMarkers').children('text#valueMarkerBreast').text("Немного большевато: + " + $res.toFixed(1) + "см").addClass('yellow');
                        }
                        console.log('немного большеват: yellow ' + $res);
                    }
                    if ($res > 2) {
                        if($('g#sizeMarkers').children().hasClass('compareBreast')) {
                            $('.compareBreast').addClass('red');
                            $('g#sizeMarkers').children('text#valueMarkerBreast').text("Слишком большое: + " + $res.toFixed(1) + "см").addClass('red');
                        }
                        console.log('слишком большое: red ' + $res);
                    }
                }

                //проверка: размер стандарта < размера пользователя
                if ($breastGirth < $userBreastGirth) {
                    $res = $userBreastGirth - $breastGirth; //расчет на сколько см размер пользователя больше стандарта

                    //определение как хорошо сидит данный размер
                    if ($res >= 0.5) {
                        if($('g#sizeMarkers').children().hasClass('compareBreast')) {
                            $('.compareBreast').addClass('red');
                            $('g#sizeMarkers').children('text#valueMarkerBreast').text("Слишком узкое: - " + $res.toFixed(1) + "см").addClass('red');
                        }
                        console.log('одежда будет узка: red ' + $res);
                    }
                    if($res < 0.5){
                        if($('g#sizeMarkers').children().hasClass('compareBreast')) {
                            $('.compareBreast').addClass('yellow');
                            $('g#sizeMarkers').children('text#valueMarkerBreast').text("В обяжку: - " + $res.toFixed(1) + "см").addClass('yellow');
                        }
                        console.log('одежда будет в обтяг: yellow ' + $res);
                    }
                }

                if ($breastGirth == $userBreastGirth) {
                    $res = $breastGirth - $userBreastGirth;
                    if($('g#sizeMarkers').children().hasClass('compareBreast')) {
                        $('.compareBreast').addClass('green');
                        $('g#sizeMarkers').children('text#valueMarkerBreast').text("Сидит плотно: " + $res.toFixed(1) + "см").addClass('green');
                    }
                    console.log('одежда сидит плотно: green ' + $res);
                }
            } else {
                alert('Заполните обхват груди');
            }

            //проверка на то, что поле "Обхват талии" не пустое
            if($userWaistGirth > 0) {          
                //проверка: размер стандарта > размера пользователя
                if ($waistGirth > $userWaistGirth) {
                    $res = $waistGirth - $userWaistGirth; //расчет на сколько см больше
                
                    //определение как хорошо сидит данный размер
                    if ($res > 0 && $res <= 1) {
                        if($('g#sizeMarkers').children().hasClass('compareWaist')) {
                            $('.compareWaist').addClass('green');
                            $('g#sizeMarkers').children('text#valueMarkerWaist').text("Хорошо: + " + $res.toFixed(1) + "см в запасе").addClass('green');
                        }
                        console.log('одежда сидит хорошо: green ' + $res);
                    }
                    if($res > 1 && $res <= 2){
                        if($('g#sizeMarkers').children().hasClass('compareWaist')) {
                            $('.compareWaist').addClass('yellow');
                            $('g#sizeMarkers').children('text#valueMarkerWaist').text("Немного большевато: + " + $res.toFixed(1) + "см").addClass('yellow');
                        }
                        console.log('немного большеват: yellow ' + $res);
                    }
                    if ($res > 2) {
                        if($('g#sizeMarkers').children().hasClass('compareWaist')) {
                            $('.compareWaist').addClass('red');
                            $('g#sizeMarkers').children('text#valueMarkerWaist').text("Слишком большое: + " + $res.toFixed(1) + "см").addClass('red');
                        }
                        console.log('слишком большое: red ' + $res);
                    }
                }
            
                //проверка: размер стандарта < размера пользователя
                if ($waistGirth < $userWaistGirth) {
                    $res = $userWaistGirth - $waistGirth; //расчет на сколько см размер пользователя больше стандарта
                
                    //определение как хорошо сидит данный размер
                    if ($res >= 0.5) {
                        if($('g#sizeMarkers').children().hasClass('compareWaist')) {
                            $('.compareWaist').addClass('red');
                            $('g#sizeMarkers').children('text#valueMarkerWaist').text("Слишком узкое: - " + $res.toFixed(1) + "см").addClass('red');
                        }
                        console.log('одежда будет узка: red ' + $res);
                    }
                    if($res < 0.5){
                        if($('g#sizeMarkers').children().hasClass('compareWaist')) {
                            $('.compareWaist').addClass('yellow');
                            $('g#sizeMarkers').children('text#valueMarkerWaist').text("В обяжку: - " + $res.toFixed(1) + "см").addClass('yellow');
                        }
                        console.log('одежда будет в обтяг: yellow ' + $res);
                    }
                }
            
                if ($waistGirth == $userWaistGirth) {
                    $res = $waistGirth - $userWaistGirth;
                    if($('g#sizeMarkers').children().hasClass('compareWaist')) {
                        $('.compareWaist').addClass('green');
                        $('g#sizeMarkers').children('text#valueMarkerWaist').text("Сидит плотно: " + $res.toFixed(1) + "см").addClass('green');
                    }
                    console.log('одежда сидит плотно: green ' + $res);
                }
            } else {
                alert('Заполните обхват талии');
            }

            //проверка на то, что поле "Обхват бедер" не пустое
            if($userHipGirth > 0) {          
                //проверка: размер стандарта > размера пользователя
                if ($hipGirth > $userHipGirth) {
                    $res = $hipGirth - $userHipGirth; //расчет на сколько см больше
                
                    //определение как хорошо сидит данный размер
                    if ($res > 0 && $res <= 1) {
                        if($('g#sizeMarkers').children().hasClass('compareHip')) {
                            $('.compareHip').addClass('green');
                            $('g#sizeMarkers').children('text#valueMarkerHip').text("Хорошо: + " + $res.toFixed(1) + "см в запасе").addClass('green');
                        }
                        console.log('одежда сидит хорошо: green ' + $res);
                    }
                    if($res > 1 && $res <= 2){
                        if($('g#sizeMarkers').children().hasClass('compareHip')) {
                            $('.compareHip').addClass('yellow');
                            $('g#sizeMarkers').children('text#valueMarkerHip').text("Немного большевато: + " + $res.toFixed(1) + "см").addClass('yellow');
                        }
                        console.log('немного большеват: yellow ' + $res);
                    }
                    if ($res > 2) {
                        if($('g#sizeMarkers').children().hasClass('compareHip')) {
                            $('.compareHip').addClass('red');
                            $('g#sizeMarkers').children('text#valueMarkerHip').text("Слишком большое: + " + $res.toFixed(1) + "см").addClass('red');
                        }
                        console.log('слишком большое: red ' + $res);
                    }
                }
            
                //проверка: размер стандарта < размера пользователя
                if ($hipGirth < $userHipGirth) {
                    $res = $userHipGirth - $hipGirth; //расчет на сколько см размер пользователя больше стандарта
                
                    //определение как хорошо сидит данный размер
                    if ($res >= 0.5) {
                        if($('g#sizeMarkers').children().hasClass('compareHip')) {
                            $('.compareHip').addClass('red');
                            $('g#sizeMarkers').children('text#valueMarkerHip').text("Слишком узкое: - " + $res.toFixed(1) + "см").addClass('red');
                        }
                        console.log('одежда будет узка: red ' + $res);
                    }
                    if($res < 0.5){
                        if($('g#sizeMarkers').children().hasClass('compareHip')) {
                            $('.compareHip').addClass('yellow');
                            $('g#sizeMarkers').children('text#valueMarkerHip').text("В обяжку: - " + $res.toFixed(1) + "см").addClass('yellow');
                        }
                        console.log('одежда будет в обтяг: yellow ' + $res);
                    }
                }
            
                if ($hipGirth == $userHipGirth) {
                    $res = $hipGirth - $userHipGirth;
                    if($('g#sizeMarkers').children().hasClass('compareHip')) {
                        $('.compareBreast').addClass('green');
                        $('g#sizeMarkers').children('text#valueMarkerHip').text("Сидит плотно: " + $res.toFixed(1) + "см").addClass('green');
                    }
                    console.log('одежда сидит плотно: green ' + $res);
                }
            } else {
                alert('Заполните обхват бедер');
            }
    } else {
        alert ('Выберите размер одежды');
    }
});

$('#saveUserDesign').on('click', function(){
    var 
        $clothesID = $('#SVG').attr('data-clothesID');
        $codeSVG = $('<div>').append($('.clothes').clone()).html();
    $.ajax({
        url: "/assets/php/updateUserData/saveUserSVG.php",
        type: 'POST',
        data: {
            'clothesID': $clothesID,
            'codeSVG': $codeSVG
        },
        success: function(data) {
            if(data == 'saveSVG-ok') {
                location.reload();
            }
        }
    });
});

function downloadSVG() {
    const svg = document.getElementById('SVG').innerHTML;
    const blob = new Blob([svg.toString()]);
    const element = document.createElement("a");
    element.download = "image.svg";
    element.href = window.URL.createObjectURL(blob);
    element.click();
    element.remove();
// //get svg element.
// var svg = document.getElementById("SVG");

// //get svg source.
// var serializer = new XMLSerializer();
// var source = serializer.serializeToString(svg);

// //add name spaces.
// if(!source.match(/^<svg[^>]+xmlns="http\:\/\/www\.w3\.org\/2000\/svg"/)){
//     source = source.replace(/^<svg/, '<svg xmlns="http://www.w3.org/2000/svg"');
// }
// if(!source.match(/^<svg[^>]+"http\:\/\/www\.w3\.org\/1999\/xlink"/)){
//     source = source.replace(/^<svg/, '<svg xmlns:xlink="http://www.w3.org/1999/xlink"');
// }

// //add xml declaration
// source = '<?xml version="1.0" standalone="no"?>\r\n' + source;

// //convert svg source to URI data scheme.
// var url = "data:image/svg+xml;charset=utf-8,"+encodeURIComponent(source);

// //set url value to a element's href attribute.
// document.getElementById("link").href = url;
// //you can download svg file by right click menu.
}

$('#downloadUserDesign').on('click', function() {
    downloadSVG();
});

$('#btnResetFill').on('click', function() {
    $('path#strokePieceClothing').attr('fill', '#fff');
});
$('#btnResetSettingsDetails').on('click', function() {
    $('input.nav-input-value').val(0);
    $('g.move-item').attr('transform', 'translate(0,0)');
    $('g.move-item').children('path#strokePieceClothing').css({'transform': 'rotate(0)'});
});

$('#btnSelectModeMarkers').on('click', function() {
    $('g#sizeMarkers').toggleClass('select-mode');
    $('path.anim-circle').toggleClass('check');
});
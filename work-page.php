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
    <link rel="stylesheet" href="assets/css/style-work-page.css">
    <title>Конструктор дизайна</title>
    <link href="assets/fonts/fontawesome/css/all.css" rel="stylesheet">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jspdf.min.js"></script>
</head>
<body>

<?php
    if(isset($_GET['gender'])) :
        $gender = $_GET['gender'];
    endif;
    if(isset($_GET['clothes'])) :
        $clothes = $_GET['clothes'];
    endif;
    if($_SESSION['authorization'] == true) :
        if(isset($_GET['userWorkID'])) :
            $userWorkID = $_GET['userWorkID'];
            $sql = "SELECT * FROM `users`
            INNER JOIN `user_works` ON `users`.`userID` = `user_works`.`userID`
            WHERE `user_works`.`userID` = ".$_SESSION['userID']." AND `user_works`.`userWorkID` = ".$userWorkID;
            $data = $pdo->query($sql);
            $userWorksEdit = $data->fetchAll();
            $check = 1;
        endif;
        $sql1 = "SELECT * FROM `users`
        WHERE `userID` = ".$_SESSION['userID'];
        $data1 = $pdo->query($sql1);
        $userAutData = $data1->fetchAll();
    endif;
?>

<?php
    switch ($gender) {
        case 'female': $color = "#5b4490"; ?>
        <style>
            .header { border-bottom: 2px solid #5b4490; }
            .menu-catalog-item { background-color: #3e2f62; }
            .menu-catalog-item:hover { background-color: #5b4490; }
            .left-side { background-color: #5b4490; }
            .right-side { background-color: #3e2f62; }
            .clothes { background: rgb(91, 68, 144, 0.2); }
            .setting-panel-menu-title { background-color: #5b44903b; }
            .setting-panel-menu-title:hover { background-color: #5b4490; }
        </style>
    <? break; case 'male' : $color = "#7a9748"; ?>
        <style>
            .header { border-bottom: 2px solid #7a9748; }
            .menu-catalog-item { background-color: #556E35; }
            .menu-catalog-item:hover { background-color: #7a9748; }
            .left-side { background-color: #7a9748; }
            .right-side { background-color: #556E35; }
            .clothes { background: rgb(85, 110, 53, 0.2); }
            .setting-panel-menu-title { background-color: #7a97483b; }
            .setting-panel-menu-title:hover { background-color: #7a9748; }
        </style>
    <? break; default: $gender = "undefind"; $color = "#F86A38"; ?>
        <style>
            .header { border-bottom: 2px solid #F86A38; }
            .menu-catalog-item { background-color: #c2552e; }
            .menu-catalog-item:hover { background-color: #F86A38; }
            .left-side { background-color: #F86A38; }
            .right-side { background-color: #c2552e; }
            .clothes { background: rgb(194, 85, 46, 0.2); }
            .setting-panel-menu-title { background-color: #F86A383b; }
            .setting-panel-menu-title:hover { background-color: #F86A38; }
        </style>
    <? }
?>

    <div class="wrapper">
        <div class="container">

            <?require_once('header.php')?>

            <div class="body">
                <div class="left-side">
                    <div class="toolbar">
                        <ul class="toolbar-list">
                            <li class="toolbar-item" data-toolId="color" title="Инструмент для покраски">
                                <svg viewBox="0 0 32 32">
                                    <path d="M5.81787 14.8361H27.8179"/>
                                    <path d="M23.8179 4.83614V10.8361" class="strokecheck"/>
                                    <path d="M13.6679 19.8361H7.81787C7.28744 19.8361 6.77873 19.6254 6.40366 19.2503C6.02858 18.8753 5.81787 18.3666 5.81787 17.8361V8.83614C5.81787 7.77527 6.2393 6.75785 6.98944 6.00771C7.73959 5.25756 8.75701 4.83614 9.81787 4.83614H27.8179V17.8361C27.8179 18.3666 27.6072 18.8753 27.2321 19.2503C26.857 19.6254 26.3483 19.8361 25.8179 19.8361H19.9679C19.8252 19.8366 19.6842 19.8675 19.5545 19.9269C19.4248 19.9863 19.3093 20.0728 19.2157 20.1806C19.1222 20.2883 19.0528 20.4148 19.0122 20.5516C18.9716 20.6884 18.9608 20.8323 18.9804 20.9736L19.8179 26.8361C19.8179 27.6318 19.5018 28.3948 18.9392 28.9575C18.3766 29.5201 17.6135 29.8361 16.8179 29.8361C16.0222 29.8361 15.2592 29.5201 14.6966 28.9575C14.1339 28.3948 13.8179 27.6318 13.8179 26.8361L14.6554 20.9736C14.675 20.8323 14.6641 20.6884 14.6235 20.5516C14.5829 20.4148 14.5136 20.2883 14.42 20.1806C14.3265 20.0728 14.211 19.9863 14.0812 19.9269C13.9515 19.8675 13.8106 19.8366 13.6679 19.8361Z"/>
                                </svg>
                                <span>Цвет</span>
                            </li>
                            <li class="toolbar-item" data-toolId="details" title="Инструмент для добавления деталей и редактирования">
                                <svg viewBox="0 0 32 32">
                                    <path d="M9 5H23L30 13L16 28L2 13L9 5Z"/>
                                    <path class="strokecheck" d="M22.1375 13L16 28L9.86255 13L16 5L22.1375 13Z"/>
                                    <path class="strokecheck" d="M2 13H30"/>
                                </svg>
                                <span>Детали</span>
                            </li>
                            <? if( $_SESSION['authorization'] == true ) : ?>
                                <li class="toolbar-item" data-toolId="size" title="Инструмент для создания разметок и выполнения сравнения">
                                    <svg viewBox="0 0 32 32">
                                        <path class="strokecheck" d="M16.5 7.5L20.5 11.5"/>
                                        <path class="strokecheck" d="M12 12L16 16"/>
                                        <path class="strokecheck" d="M7.5 16.5L11.5 20.5"/>
                                        <path d="M20.2892 3.70518L3.7076 20.2868C3.31707 20.6774 3.31707 21.3105 3.7076 21.701L10.2934 28.2869C10.6839 28.6774 11.3171 28.6774 11.7076 28.2869L28.2893 11.7052C28.6798 11.3147 28.6798 10.6815 28.2893 10.291L21.7035 3.70518C21.3129 3.31466 20.6798 3.31466 20.2892 3.70518Z"/>
                                    </svg>
                                    <span>Размер</span>
                                </li>
                            <? else : ?>
                                <li class="toolbar-item" data-toolId="size-lock" title="Инструмент для создания разметок и выполнения сравнения">
                                    <svg viewBox="0 0 32 32">
                                        <path class="strokecheck" d="M16.5 7.5L20.5 11.5"/>
                                        <path class="strokecheck" d="M12 12L16 16"/>
                                        <path class="strokecheck" d="M7.5 16.5L11.5 20.5"/>
                                        <path d="M20.2892 3.70518L3.7076 20.2868C3.31707 20.6774 3.31707 21.3105 3.7076 21.701L10.2934 28.2869C10.6839 28.6774 11.3171 28.6774 11.7076 28.2869L28.2893 11.7052C28.6798 11.3147 28.6798 10.6815 28.2893 10.291L21.7035 3.70518C21.3129 3.31466 20.6798 3.31466 20.2892 3.70518Z"/>
                                    </svg>
                                    <span>Размер</span>
                                </li>
                            <? endif; ?>

                            <? if( $_SESSION['authorization'] == true ) : ?>
                                <li class="toolbar-item" data-toolId="save" id="saveUserDesign" title="Инструмент для сохранения работы в профиль">
                                    <svg viewBox="0 0 32 32">
                                        <path d="M27.4908 11.4431V26.0306C27.4908 26.2958 27.3855 26.5502 27.198 26.7377C27.0104 26.9252 26.7561 27.0306 26.4908 27.0306H6.49084C6.22563 27.0306 5.97127 26.9252 5.78374 26.7377C5.5962 26.5502 5.49084 26.2958 5.49084 26.0306V6.03058C5.49084 5.76537 5.5962 5.51101 5.78374 5.32348C5.97127 5.13594 6.22563 5.03058 6.49084 5.03058H21.0783C21.2082 5.03013 21.3369 5.05529 21.457 5.10462C21.5771 5.15395 21.6863 5.22649 21.7783 5.31808L27.2033 10.7431C27.2949 10.8351 27.3675 10.9443 27.4168 11.0645C27.4661 11.1846 27.4913 11.3132 27.4908 11.4431V11.4431Z"/>
                                        <path d="M10.4908 27.0306V19.0306C10.4908 18.7654 10.5962 18.511 10.7837 18.3235C10.9713 18.1359 11.2256 18.0306 11.4908 18.0306H21.4908C21.7561 18.0306 22.0104 18.1359 22.198 18.3235C22.3855 18.511 22.4908 18.7654 22.4908 19.0306V27.0306"/>
                                        <path class="strokecheck" d="M19.4908 9.03058H12.4908"/>
                                    </svg>
                                    <span>Сохранить</span>
                                </li>
                            <? else : ?>
                                <li class="toolbar-item" data-toolId="save-lock" id="saveUserDesign" title="Инструмент для сохранения работы в профиль">
                                    <svg viewBox="0 0 32 32">
                                        <path d="M27.4908 11.4431V26.0306C27.4908 26.2958 27.3855 26.5502 27.198 26.7377C27.0104 26.9252 26.7561 27.0306 26.4908 27.0306H6.49084C6.22563 27.0306 5.97127 26.9252 5.78374 26.7377C5.5962 26.5502 5.49084 26.2958 5.49084 26.0306V6.03058C5.49084 5.76537 5.5962 5.51101 5.78374 5.32348C5.97127 5.13594 6.22563 5.03058 6.49084 5.03058H21.0783C21.2082 5.03013 21.3369 5.05529 21.457 5.10462C21.5771 5.15395 21.6863 5.22649 21.7783 5.31808L27.2033 10.7431C27.2949 10.8351 27.3675 10.9443 27.4168 11.0645C27.4661 11.1846 27.4913 11.3132 27.4908 11.4431V11.4431Z"/>
                                        <path d="M10.4908 27.0306V19.0306C10.4908 18.7654 10.5962 18.511 10.7837 18.3235C10.9713 18.1359 11.2256 18.0306 11.4908 18.0306H21.4908C21.7561 18.0306 22.0104 18.1359 22.198 18.3235C22.3855 18.511 22.4908 18.7654 22.4908 19.0306V27.0306"/>
                                        <path class="strokecheck" d="M19.4908 9.03058H12.4908"/>
                                    </svg>
                                    <span>Сохранить</span>
                                </li>
                            <? endif; ?>

                            <li class="toolbar-item" data-toolId="download" id="downloadUserDesign" title="Инструмент для загрузки дизайна на Ваш компьютер">
                                <svg viewBox="0 0 32 32">
                                    <path d="M22 16H28C28.2652 16 28.5196 16.1054 28.7071 16.2929C28.8946 16.4804 29 16.7348 29 17V25C29 25.2652 28.8946 25.5196 28.7071 25.7071C28.5196 25.8946 28.2652 26 28 26H4C3.73478 26 3.48043 25.8946 3.29289 25.7071C3.10536 25.5196 3 25.2652 3 25V17C3 16.7348 3.10536 16.4804 3.29289 16.2929C3.48043 16.1054 3.73478 16 4 16H10"/>
                                    <path d="M16 3V16"/>
                                    <path d="M10 10L16 16L22 10"/>
                                    <path class="strokecheck" d="M23.5 22.5C24.3284 22.5 25 21.8284 25 21C25 20.1716 24.3284 19.5 23.5 19.5C22.6716 19.5 22 20.1716 22 21C22 21.8284 22.6716 22.5 23.5 22.5Z"/>
                                </svg>
                                <span>Скачать</span>
                            </li>
                        </ul>
                    </div>
                    <div class="work-area" id="SVG" data-clothesID="<?=$clothes?>">
                    <?php
                    if ($check == 1) :
                        foreach($userWorksEdit as $n) :
                    ?>

                        <?=$n['userWorkSVG']?>
                        
                    <? endforeach;?>

                    <? else: ?>

                    <svg viewBox="0 0 750 500" class="clothes">
                            
                            <defs>
                              <pattern id="bg" x="0" y="0" patternUnits="userSpaceOnUse" height="30" width="30">
                                <image xlink:href="https://www.gravatar.com/avatar/9bd620150717350f66401d7f9590a8b2?s=32&d=identicon&r=PG"></image>
                              </pattern>
                              
                              <pattern id="bgh" x="0" y="0" patternUnits="userSpaceOnUse" height="30" width="30">
                                <image xlink:href="https://i.stack.imgur.com/V2XAq.jpg"></image>
                              </pattern>
                            </defs>

                            <!-- левая рука -->
                            <g id="pieceClothing">
                                <path id="strokePieceClothing" class="left-hand" d="M 275 100 200 190 250 250 275 230 z"/>
                                <path id="shadowPieceClothing" d="M 200 190 C 200 190 230 210 250 250 z"/>
                            </g>
    
                            <!-- правая рука -->
                            <g id="pieceClothing">
                                <path id="strokePieceClothing" class="right-hand" d="M 475 100 550 190 500 250 475 230 z"/>
                                <path id="shadowPieceClothing" d="M 550 190 C 550 190 520 210 500 250 z"/>
                            </g>

                            <!-- торс -->
                            <g id="pieceClothing">
                                <path id="strokePieceClothing" class="torso" d="M 335 75 275 100 275 230 265 425 485 425 475 230 475 100 415 75 C 415 75 375 85 335 75"/>
                                <path id="shadowPieceClothing" d="M 335 75 345 100 C 345 100 375 115 405 100 L 415 75 M 415 75 C 415 75 375 85 335 75"/>
                                <path id="shadowPieceClothing" d="M 265 425 C 380 425 375 410 485 425 z"/>
                            </g>
    
                            <!-- статичные детали -->
                            <g id="pieceClothing">
                                <path id="strokePieceClothing" class="collar" d=""/>
                            </g>

                            <!-- Движущиеся детали -->
                            <g id="pieceClothing" class="move-item" transform=translate(0,0)>
                                <path id="strokePieceClothing" class="pocket" transform=rotate(0) d=""/>
                            </g>

                            <!-- Маркеры размера -->
                            <g id="sizeMarkers" fill="none" stroke="black" stroke-width="2">
                                <!-- Обхват груди -->
                                <path class="marker-line international-parameter compareBreast" d="M 275 137.5 C 275 137.5 375 147.5 475 137.5" />
                                <text class="marker-value international-parameter" id="valueMarkerBreast" x="300" y="138"></text>

                                <!-- Обхват талии -->
                                <path class="marker-line international-parameter compareWaist" d="M 272.5 278.75 C 272.5 278.75 375 290 477.5 278.75" />
                                <text class="marker-value international-parameter" id="valueMarkerWaist" x="300" y="280"></text>

                                <!-- Обхват бедер -->
                                <path class="marker-line international-parameter compareHip" d="M 267.5 376.25 C 267.5 376.25 375 386.5 482.5 376.25" />
                                <text class="marker-value international-parameter" id="valueMarkerHip" x="300" y="377"></text>

                                <!-- Ширина плеч -->
                                <path class="marker-line" d="M 275 100 C 275 100 300 80 335 75" />
                                <text class="marker-value" id="valueMarkerShouldersW" x="285" y="75"></text>

                                <!-- Обхват шеи -->
                                <path class="marker-line" d="M 335 75 C 335 75 375 65 415 75" />
                                <text class="marker-value" id="valueMarkerNeck" x="360" y="65"></text>
                                
                                <!-- Обхват плеч -->
                                <path class="marker-line" d="M 275 100 C 275 100 267 165 275 230" />
                                <text class="marker-value" id="valueMarkerShouldersG" x="235" y="170"></text>

                                <!-- Длина рукава -->
                                <path class="marker-line" d="M 275 100 C 275 100 233 135 200 190" />
                                <text class="marker-value" id="valueMarkerSleeve" x="205" y="130"></text>

                                <!-- Длина изделия -->
                                <path class="marker-line" d="M 335 75 335 425" />
                                <text class="marker-value" id="valueMarkerLength" x="295" y="250"></text>
                            </g>

                        </svg>
                        <? endif; ?>
                    </div>
                        <button class="btn-clear" id="btnResetFill">очистить заливку</button>
                        <button class="btn-clear" id="btnResetSettingsDetails">сбросить настройки деталей</button>
                </div>
                
                <div class="right-side">
                    <div class="right-side-title">Настройка</div>
                    <div class="settings-block active" data-toolId="color" id="colorSettings">
                        <div class="row-setting-panel">
                            <div class="setting-panel-title">Цвета заливки</div>
                            <div class="setting-panel-components">
                                <? foreach($clothesColors as $n) : ?>
                                    <div class="color-block color" data-color="<?=$n['colorValue']?>" style="background-color:#<?=$n['colorValue']?>;"></div>
                                <? endforeach; ?>
                            </div>
                        </div>
                        <div class="row-setting-panel">
                            <div class="setting-panel-title">Текстуры</div>
                            <div class="setting-panel-components">
                                <div class="color-block texture" data-textureID="bg" style="background: url(https://www.gravatar.com/avatar/9bd620150717350f66401d7f9590a8b2?s=32&d=identicon&r=PG)"></div>
                                <div class="color-block texture" data-textureID="bgh" style="background: url(https://i.stack.imgur.com/V2XAq.jpg)"></div>
                            </div>
                        </div>
                    </div>

                    <div class="settings-block" data-toolId="details" id="detailsSettings">
                        
                        <div class="row-setting-panel">
                            <div class="setting-panel-menu-title">
                                Статичные детали
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                            <div class="setting-panel-title">Воротники</div>
                            <div class="setting-panel-components">
                                <? foreach($clothesDetails as $n) : ?>
                                    <? if($n['detailType'] == 'collar') : ?>
                                    <div class="detail-block collar" data-coordinates="<?=$n['detailSVG']?>">
                                        <svg viewBox="0 0 700 500" fill="white" stroke="black" stroke-width="2">
                                            <path stroke="black" stroke-width="2" d="<?=$n['detailSVG']?>"></path>
                                        </svg>
                                    </div>
                                <? endif; endforeach; ?>
                            </div>
                        </div>

                        <div class="row-setting-panel">
                            <div class="setting-panel-menu-title">
                                Движущиеся детали
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                            <div class="row-setting-panel">
                                <div class="setting-panel-title" style="text-align:center; margin-bottom: 16px;">Настройка расположения</div>
                                <div class="setting-panel-input-components">
                                    <div class="inputs-block-nav">
                                        <div class="input-nav-block">
                                            <!-- Повернуть против часовой стрелки -->
                                            <button class="nav-input" id="move-detail-rotate-left" title="Повернуть против часовой стрелки">
                                                <svg viewBox="0 0 32 32" class="rotate-l">
                                                    <path d="M9.97498 12.4625H3.97498V6.46252"/>
                                                    <path d="M6.25732 15.5758H1.25732V10.5758"/>
                                                    <path d="M8.225 23.775C9.76302 25.3143 11.723 26.3628 13.8571 26.788C15.9911 27.2132 18.2033 26.9958 20.2138 26.1635C22.2243 25.3312 23.9428 23.9213 25.1519 22.1122C26.361 20.3031 27.0063 18.176 27.0063 16C27.0063 13.824 26.361 11.6969 25.1519 9.8878C23.9428 8.07866 22.2243 6.66877 20.2138 5.83647C18.2033 5.00417 15.9911 4.78686 13.8571 5.21202C11.723 5.63719 9.76302 6.68573 8.225 8.22501L3.975 12.4625"/>
                                                </svg>
                                            </button>
                                            <!-- Передвинуть вверх -->
                                            <button class="nav-input" id="move-detail-up" title="Передвинуть вверх">
                                                <svg viewBox="0 0 32 32">
                                                    <path d="M4 16C4 22.6274 9.37258 28 16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4C9.37258 4 4 9.37258 4 16Z" stroke-miterlimit="10"/>
                                                    <path class="up" d="M20.5 18L16 13L11.5 18"/>
                                                </svg>
                                            </button>
                                            <!-- Повернуть по часовой стрелки -->
                                            <button class="nav-input" id="move-detail-rotate-right" title="Повернуть по часовой стрелки">
                                                <svg viewBox="0 0 32 32" class="rotate-r">
                                                    <path d="M22.2823 12.8867H28.2823V6.88672"/>
                                                    <path d="M26 16H31V11"/>
                                                    <path d="M24.0323 24.1992C22.4943 25.7385 20.5343 26.787 18.4003 27.2122C16.2662 27.6373 14.054 27.42 12.0435 26.5877C10.033 25.7554 8.31453 24.3455 7.10543 22.5364C5.89634 20.7273 5.25098 18.6002 5.25098 16.4242C5.25098 14.2482 5.89634 12.1211 7.10543 10.312C8.31453 8.50286 10.033 7.09297 12.0435 6.26067C14.054 5.42837 16.2662 5.21105 18.4003 5.63622C20.5343 6.06138 22.4943 7.10992 24.0323 8.6492L28.2823 12.8867"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="input-nav-block">
                                            <!-- Передвинуть влево -->
                                            <button class="nav-input" id="move-detail-left" title="Передвинуть влево">
                                                <svg viewBox="0 0 32 32">
                                                    <path d="M16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4C9.37258 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28Z" stroke-miterlimit="10"/>
                                                    <path class="left" d="M18 11.5L13 16L18 20.5"/>
                                                </svg>
                                            </button>
                                            <!-- Передвинуть вниз -->
                                            <button class="nav-input" id="move-detail-down" title="Передвинуть вниз">
                                                <svg viewBox="0 0 32 32">
                                                    <path d="M28 16C28 9.37258 22.6274 4 16 4C9.37258 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28C22.6274 28 28 22.6274 28 16Z" stroke-miterlimit="10"/>
                                                    <path class="down" d="M11.5 14L16 19L20.5 14"/>
                                                </svg>
                                            </button>
                                            <!-- Передвинуть вправо -->
                                            <button class="nav-input" id="move-detail-right" title="Передвинуть вправо">
                                                <svg viewBox="0 0 32 32">
                                                    <path d="M16 4C9.37259 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4Z" stroke-miterlimit="10"/>
                                                    <path class="right" d="M14 20.5L19 16L14 11.5"/>
                                                </svg>
                                            </button>
                                            
                                            <input class="nav-input-value" type="number" id="controlButtonVertical" value="0" step="2">
                                            <input class="nav-input-value" type="number" id="controlButtonRotate" value="0" step="5">
                                            <input class="nav-input-value" type="number" id="controlButtonHorizontal" value="0" step="2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-panel-title">Карманы</div>
                            <div class="setting-panel-components">
                                
                            <? foreach($clothesDetails as $n) : ?>
                                <? if($n['detailType'] == 'pocket') : ?>
                                    <div class="detail-block pocket" data-coordinates="<?=$n['detailSVG']?>">
                                        <svg viewBox="0 0 700 500" fill="white" stroke="black" stroke-width="2">
                                            <path stroke="black" stroke-width="2" d="<?=$n['detailSVG']?>"></path>
                                        </svg>
                                    </div>
                            <? endif; endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="settings-block" data-toolId="sizes" id="sizesSettings">
                        <div class="button-show-markers">
                            <span>Переключатель разметки</span>
                            <svg id="btnSelectModeMarkers" viewBox="0 0 32 32">
                                <path d="M22 8H10C5.58172 8 2 11.5817 2 16C2 20.4183 5.58172 24 10 24H22C26.4183 24 30 20.4183 30 16C30 11.5817 26.4183 8 22 8Z"/>
                                <path class="anim-circle" d="M10 20C12.2091 20 14 18.2091 14 16C14 13.7909 12.2091 12 10 12C7.79086 12 6 13.7909 6 16C6 18.2091 7.79086 20 10 20Z"/>
                            </svg>
                        </div>
                        <div class="row-setting-panel">
                            <div class="setting-panel-menu-title">
                                Размеры соотвествующие стандартам
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                            <div class="setting-panel-components">
                                <?php switch($gender){
                                    case 'female':
                                        foreach ($sizesF as $n) : ?>
                                            <div class="size-block size" data-sizebreast="<?=$n['sizeBreast']?>" data-sizewaist="<?=$n['sizeWaist']?>" data-sizehip="<?=$n['sizeHip']?>"><?=$n['sizeTag']?></div>
                                        <? endforeach;
                                    break;
                                    case 'male':
                                        foreach ($sizesM as $n) : ?>
                                            <div class="size-block size" data-sizebreast="<?=$n['sizeBreast']?>" data-sizewaist="<?=$n['sizeWaist']?>" data-sizehip="<?=$n['sizeHip']?>"><?=$n['sizeTag']?></div>
                                        <? endforeach;
                                    break;
                                }?>
                            </div>
                        </div>
                        <div class="row-setting-panel">
                            <div class="setting-panel-menu-title">
                                Ввести собственные параметры
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                            <div class="setting-panel-input-components">
                                <div class="inputs-block">
                                <? foreach($userAutData as $n) :?>

                                    <div class="input-block">
                                        <label for="breastGirth">Обхват груди</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="breastGirth" min="0" step="0.1" value="<?=$n['userBreast']?>">
                                    </div>
                                    <div class="input-block">
                                        <label for="waistGirth">Обхват талии</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="waistGirth" min="0" step="0.1" value="<?=$n['userWaist']?>">
                                    </div>
                                    <div class="input-block">
                                        <label for="hipGirth">Обхват бедер</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="hipGirth" min="0" step="0.1" value="<?=$n['userHip']?>">
                                    </div>
                                    <div class="input-block">
                                        <label for="shouldersWidth">Ширина плеч</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="shouldersWidth" min="0" step="0.1" value="<?=$n['userShouldersW']?>">
                                    </div>
                                    <div class="input-block">
                                        <label for="neckGirth">Обхват шеи</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="neckGirth" min="0" step="0.1" value="<?=$n['userNeck']?>">
                                    </div>
                                    <div class="input-block">
                                        <label for="shouldersGirth">Обхват плеч</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="shouldersGirth" min="0" step="0.1" value="<?=$n['userShouldersG']?>">
                                    </div>
                                    <div class="input-block">
                                        <label for="sleeveLength">Длина рукава</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="sleeveLength" min="0" step="0.1" value="<?=$n['userSleeveLength']?>">
                                    </div>
                                    <div class="input-block">
                                        <label for="productLength">Длина изделия</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="productLength" min="0" step="0.1" value="<?=$n['userProdLength']?>">
                                    </div>

                                <? endforeach; ?>
                                </div>
                            </div>
                        <button id="saveUserSize" class="btn-clear">Выполнить</button>
                        </div>
                        
                        <div class="row-setting-panel">
                            <div class="setting-panel-menu-title">
                                Выполнить сравнение
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                            <div class="setting-panel-components">
                                <?php switch($gender){
                                    case 'female':
                                        foreach ($sizesF as $n) : ?>
                                            <div class="size-block compare" data-sizebreast="<?=$n['sizeBreast']?>" data-sizewaist="<?=$n['sizeWaist']?>" data-sizehip="<?=$n['sizeHip']?>"><?=$n['sizeTag']?></div>
                                        <? endforeach;
                                    break;
                                    case 'male':
                                        foreach ($sizesM as $n) : ?>
                                            <div class="size-block compare" data-sizebreast="<?=$n['sizeBreast']?>" data-sizewaist="<?=$n['sizeWaist']?>" data-sizehip="<?=$n['sizeHip']?>"><?=$n['sizeTag']?></div>
                                        <? endforeach;
                                    break;
                                }?>
                            </div>
                        </div>

                        <div class="row-setting-panel">
                            <div class="setting-panel-title">Ваши параметры</div>
                            <div class="setting-panel-input-components">
                                <div class="inputs-block">

                                <? foreach($userAutData as $n) :?>
                                    <div class="input-block user-compare-block">
                                        <label for="breastGirthСompare">Обхват груди</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="breastGirthСompare" min="0" step="0.1" value="<?=$n['userBreast']?>">
                                    </div>
                                    <div class="input-block user-compare-block">
                                        <label for="waistGirthСompare">Обхват талии</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="waistGirthСompare" min="0" step="0.1" value="<?=$n['userWaist']?>">
                                    </div>
                                    <div class="input-block user-compare-block">
                                        <label for="hipGirthСompare">Обхват бедер</label>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <input class="size-input" type="number" id="hipGirthСompare" min="0" step="0.1" value="<?=$n['userHip']?>">
                                    </div>
                                <? endforeach; ?>

                                </div>
                            </div>
                        </div>
                        <button id="compareUserSize" class="btn-clear">Сравнить</button>
                    </div>
                </div>
            </div>
            <!-- <div style="color: #fff">Инструкция по применению</div> -->
        </div>
    </div>
</body>

<script src="assets/js/Constructer.js"></script>
</html>
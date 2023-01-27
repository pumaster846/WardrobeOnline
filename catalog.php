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
    <link rel="stylesheet" href="assets/css/style-catalog-page.css">
    <title>Каталог</title>
    <link href="assets/fonts/fontawesome/css/all.css" rel="stylesheet">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
</head>
<body>

<?php
    if(isset($_GET['gender'])) :
        $gender = $_GET['gender'];
    endif;
?>

<?php
    switch ($gender) {
        case 'female': $color = "#5b4490"; ?>
        <style>
            .header { border-bottom: 2px solid #5b4490; }
            .menu-catalog-item { background-color: #3e2f62; }
            .menu-catalog-item:hover { background-color: #5b4490; }
            .modal-dialog { border-top: 5px solid #5b4490; }
            .btn-login { border: 1px solid #5b4490; color: #5b4490; }
            .btn-login:hover { background-color: #5b4490; }
            .left { background: #3e2f62; }
            .right { background: #5b4490; }
            .work-preview-img { background-color: rgba(91, 68, 144, 0.5); }
        </style>
    <? break; case 'male' : $color = "#7a9748"; ?>
        <style>
            .header { border-bottom: 2px solid #7a9748; }
            .menu-catalog-item { background-color: #556E35; }
            .menu-catalog-item:hover { background-color: #7a9748; }
            .modal-dialog { border-top: 5px solid #7a9748; }
            .btn-login { border: 1px solid #7a9748; color: #7a9748; }
            .btn-login:hover { background-color: #7a9748; }
            .left { background: #556E35; }
            .right { background: #7a9748; }
            .work-preview-img { background-color: rgba(122, 151, 72, 0.5); }
        </style>
    <? break; default: $gender = "undefind"; $color = "#F86A38"; ?>
        <style>
            .header { border-bottom: 2px solid #F86A38; }
            .menu-catalog-item { background-color: #c2552e; }
            .menu-catalog-item:hover { background-color: #F86A38; }
            .modal-dialog { border-top: 5px solid #F86A38; }
            .btn-login { border: 1px solid #F86A38; color: #F86A38; }
            .btn-login:hover { background-color: #F86A38; }
            .left { background: #c2552e; }
            .right { background: #F86A38; }
            .work-preview-img { background-color: rgba(248, 106, 56, 0.5); }
        </style>
    <? }
?>

    <div class="wrapper">
        <div class="container">

        <? require_once('header.php'); ?>

            <div class="body">
                <div class="page-title">Что можно создать в <h1>Wardrobe Online</h1>?</div>
                <? foreach ($clothes as $n) :
                if ($gender == $n['clothesGender']) : ?>
                <div class="card-block">
                    <div class="left">
                        <div class="wordmark"><?=$n['clothesName'];?></div>
                    </div>
                    <div class="right">
                        <img src="assets/images/<?=$n['clothesImageURL'];?>" class="layout">
                        <div class="layout-info">
                            <h2 class="layout-name"><?=$n['clothesName'];?></h2>
                            <div class="details">
                                <div class="layout-text"><?=$n['clothesInfo'];?></div>
                                    <a href="work-page.php?clothes=<?= $n['clothesID'] ?>&gender=<?= $n['clothesGender'] ?>" class="button-block">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <? endif; endforeach; ?>
                <?  if ($gender == 'undefind') : ?>
                <? foreach ($clothes as $n) : ?>
                <div class="card-block">
                    <div class="left">
                        <div class="wordmark"><?=$n['clothesName'];?><br>
                        <?php
                            if($n['clothesGender'] == 'female') {
                                echo "Женская";
                            }
                            if($n['clothesGender'] == 'male') {
                                echo "Мужская";
                            }
                        ?>
                    </div>
                    </div>
                    <div class="right">
                        <img src="assets/images/<?=$n['clothesImageURL'];?>" class="layout">
                        <div class="layout-info">
                            <h2 class="layout-name"><?=$n['clothesName'];?></h2>
                            <div class="details">
                                <div class="layout-text"><?=$n['clothesInfo'];?></div>
                                    <a href="work-page.php?clothes=<?= $n['clothesID'] ?>&gender=<?= $n['clothesGender'] ?>" class="button-block">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <? endforeach; endif; ?>
            </div>
        </div>
    </div>

</body>
<script>
    
</script>
</html>
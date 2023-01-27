<?php
session_start();
require_once('../connection-db/logic.php');
if( $_POST['userBreastGirth'] && $_POST['userWaistGirth'] && $_POST['userHipGirth'] && $_POST['userShouldersWidth'] && $_POST['userNeckGirth'] && $_POST['userShouldersGirth'] && $_POST['userSleeveLength'] && $_POST['userProductLength'] ) {
    $sql = "UPDATE `users` SET `userBreast` = ?, `userWaist` = ?, `userHip` = ?, `userShouldersW` = ?, `userNeck` = ?, `userShouldersG` = ?, `userSleeveLength` = ?, `userProdLength` = ? WHERE `userID` = ".$_SESSION['userID'];
    $data = $pdo->prepare($sql);
    $data->execute(array( $_POST['userBreastGirth'], $_POST['userWaistGirth'], $_POST['userHipGirth'], $_POST['userShouldersWidth'], $_POST['userNeckGirth'], $_POST['userShouldersGirth'], $_POST['userSleeveLength'], $_POST['userProductLength']));
    echo "dataUpdate-ok";
} else {
    die("Значение параметра не может быть равен нулю");
};
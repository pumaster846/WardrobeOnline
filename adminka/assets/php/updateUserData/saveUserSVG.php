<?php
session_start();
require_once('../connection-db/logic.php');
if( $_POST['codeSVG'] && $_POST['clothesID'] ) {
    $sql = "INSERT INTO `user_works` SET `userID` = ?, `clothesID` = ?, `userWorkSVG` = ?";
    $data = $pdo->prepare($sql);
    $data->execute(array( $_SESSION['userID'], $_POST['clothesID'], $_POST['codeSVG']));
    echo "saveSVG-ok";
} else {
    die("Произошла ошибка");
};
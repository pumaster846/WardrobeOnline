<?php
session_start();
require_once('./connection-db/logic.php');

$sql = "DELETE FROM `clothes_details` WHERE `detailID` = ".$_POST['detailID'];
$data = $pdo->prepare($sql);
$data->execute(array());
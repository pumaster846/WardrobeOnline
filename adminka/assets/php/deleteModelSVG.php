<?php
session_start();
require_once('./connection-db/logic.php');

$sql = "DELETE FROM `clothes` WHERE `clothesID` = ".$_POST['clothesID'];
$data = $pdo->prepare($sql);
$data->execute(array());
<?php
session_start();
require_once('./connection-db/logic.php');

$sql = "DELETE FROM `clothes_colors` WHERE `colorID` = ".$_POST['colorID'];
$data = $pdo->prepare($sql);
$data->execute(array());
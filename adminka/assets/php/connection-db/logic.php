<?php
require_once('connect.php');

$sql = "SELECT * FROM `clothes_sizes`";
$data = $pdo->query($sql);
$sizes = $data->fetchAll();

$sql1 = "SELECT * FROM `clothes_sizes` WHERE `sizeGender` = 'male'";
$data1 = $pdo->query($sql1);
$sizesM = $data1->fetchAll();

$sql2 = "SELECT * FROM `clothes_sizes` WHERE `sizeGender` = 'female'";
$data2 = $pdo->query($sql2);
$sizesF = $data2->fetchAll();

$sql3 = "SELECT * FROM `users`";
$data3 = $pdo->query($sql3);
$users = $data3->fetchAll();

$sql4 = "SELECT * FROM `clothes`";
$data4 = $pdo->query($sql4);
$clothes = $data4->fetchAll();

$sql5 = "SELECT * FROM `clothes_colors`";
$data5 = $pdo->query($sql5);
$colors = $data5->fetchAll();

$sql6 = "SELECT * FROM `clothes_details`";
$data6 = $pdo->query($sql6);
$details = $data6->fetchAll();
<?php
session_start();
require_once('../connection-db/logic.php');

$sql = "DELETE FROM `user_works` WHERE `userWorkID` = ".$_POST['userWorkID'];
$data = $pdo->prepare($sql);
$data->execute(array());
echo "userWorkDelete-ok";
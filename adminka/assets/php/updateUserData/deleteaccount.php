<?php
session_start();
require_once('../connection-db/logic.php');

$sql = "DELETE FROM `users` WHERE `userID` = ".$_SESSION['userID'];
$data = $pdo->prepare($sql);
$data->execute(array());
session_unset();
session_destroy();
echo "deleteAccount-ok";
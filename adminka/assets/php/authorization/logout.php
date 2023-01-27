<?php
session_start();
require_once('../connection-db/logic.php');

if($_POST['logoutCheck']){
    if($_POST['logoutCheck'] == 1){
        session_unset();
        session_destroy();
        echo 'session-destroyed';
    }
};
?>
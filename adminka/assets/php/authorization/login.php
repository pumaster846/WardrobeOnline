<?php
session_start();
require_once('../connection-db/logic.php');

if($_POST['userLogin'] && $_POST['userPassword']){
    $login = $_POST['userLogin'];
    $password = md5($_POST['userPassword']);
    foreach ($users as $n) {
        if(($login == $n['userLogin']) && ($password == $n['userPassword'])) {
            if($n['userRole'] == 'admin') {
                $_SESSION['authorization'] = true;
                $_SESSION['userID'] = $n['userID'];
                $_SESSION['userName'] = $n['userLogin'];
                $_SESSION['userRole'] = $n['userRole'];
                echo 'authorization-ok';
                exit;
            } else {
                die("У вас нет доступа к административной панели");
            }
        } else {
            $count += 1;
            continue;
        }
    }
} else {
    die("Заполните все поля");
};

if($count > 0) {
    echo "Логин или пароль не верны";
}
?>
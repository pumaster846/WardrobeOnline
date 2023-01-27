<?php
session_start();
require_once('../connection-db/logic.php');

if($_POST['userLogin'] && $_POST['userPassword'] && $_POST['userPasswordRepeat'] && $_POST['userGenderReg']){
    $login = $_POST['userLogin'];
    $password = md5($_POST['userPassword']);
    $passwordRepeat = md5($_POST['userPasswordRepeat']);
    $gender = $_POST['userGenderReg'];

    if ($gender == "female" || $gender == "male") {
        if ( $password == $passwordRepeat ) {
            foreach ( $users as $n ) {
                if( $login == $n['userLogin'] ) {
                    die("Такой пользователь уже существует");
                    exit;
                }
            }
                $sql = "INSERT INTO `users` SET `userLogin` = ?, `userPassword` = ?, `userRole` = 'user', `userGender` = ?, `userBreast` = 0, `userWaist` = 0, `userHip` = 0, `userShouldersW` = 0, `userNeck` = 0, `userShouldersG` = 0, `userSleeveLength` = 0, `userProdLength` = 0";
                $data = $pdo->prepare($sql);
                $data->execute(array($login, $password, $gender));
                echo "registration-ok";
        } else {
            die("Пароли не совпадают");
        }
    } else {
        die("Укажите ваш пол");
    }
} else {
    die("Заполните все поля");
};
?>
<?php session_start(); require_once('./connection-db/logic.php');?>
<?php
if(isset($_POST['btsAddMaket'])) {
    if(is_uploaded_file($_FILES['clothesImage']['tmp_name'])){
        $home = $_SERVER['DOCUMENT_ROOT']."/";
        //загрузка изображения в созданную папку игры
        $files = $_FILES['clothesImage'];
        $fileTmpPath = $files['tmp_name'];
        $previewImg = $files['name'];
        $urlImg = $files['name'];
        move_uploaded_file($fileTmpPath, $home.'assets/images/'. $files['name']);

        $sql = "INSERT INTO `clothes` SET `clothesName` = ?, `clothesInfo` = ?, `clothesImageURL` = ?, `clothesGender` = ?, `clothesSVG` = ?";
        $insertImg = $pdo->prepare($sql);
        $insertImg->execute(array($_POST['clothesName'], $_POST['clothesInfo'], $urlImg, $_POST['clothesGender'], $_POST['clothesSVG']));
        echo "<script type='text/javascript'>location.href='/adminka/index.php'</script>";
        exit();
    }
}
?>
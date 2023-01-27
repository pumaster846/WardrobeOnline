<?php session_start(); require_once('./connection-db/logic.php');?>
<?php
if(isset($_POST['btnAddColor'])) {
    $sql = "INSERT INTO `clothes_colors` SET `colorType` = ?, `colorValue` = ?";
    $insertImg = $pdo->prepare($sql);
    $insertImg->execute(array($_POST['colorType'], $_POST['colorCode']));
    echo "<script type='text/javascript'>location.href='/adminka/pageColors.php'</script>";
    exit();
}
?>
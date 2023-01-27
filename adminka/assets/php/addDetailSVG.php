<?php session_start(); require_once('./connection-db/logic.php');?>
<?php
if(isset($_POST['btsAddDetail'])) {
    $sql = "INSERT INTO `clothes_details` SET `detailType` = ?, `detailMoveStatus` = ?, `detailSVG` = ?";
    $insertImg = $pdo->prepare($sql);
    $insertImg->execute(array($_POST['detailType'], $_POST['detailMoveStatus'], $_POST['detailSVG']));
    echo "<script type='text/javascript'>location.href='/adminka/pageDetails.php'</script>";
    exit();
}
?>
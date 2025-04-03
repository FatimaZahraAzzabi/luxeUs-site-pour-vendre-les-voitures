
<?php
$id=$_GET['id'];
include("cnxPOO.php");
$db=new strange\cnx();
$tst=$db->getPDO();
$stmt=$tst->prepare('DELETE FROM client WHERE code=?');
$stmt->execute([$id]);
header('location:dashboard.php');

 ?>

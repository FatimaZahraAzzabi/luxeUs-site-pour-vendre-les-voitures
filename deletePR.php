
 <?php
$id=$_GET['id'];
include("cnxPOO.php");
$db=new strange\cnx();
$tst=$db->getPDO();
$stmt=$tst->prepare('DELETE FROM commande WHERE Matricule=?');
$stmt->execute([$id]);
header('location:dashboard.php');
 ?>


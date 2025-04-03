<?php
session_start();
include ('connextion.php');
if(isset( $_SESSION['newQte'])){
  $inser="INSERT INTO cmd (id_client,id_car,Qte_cmd,total,localisation_client,mode_payer) VALUES('$_SESSION[pass]','$_SESSION[mat]','$_SESSION[qte]','$_SESSION[tot]','$_SESSION[localisation]','$_SESSION[paie]')";
  $res=mysqli_query($sql,$inser);
if($res){
$query="UPDATE commande set Qte='$_SESSION[newQte]' WHERE Matricule='$_SESSION[mat]'";
$up=mysqli_query($sql,$query);
if($up){
  header("location:profile.php");
 }
}
}
?>
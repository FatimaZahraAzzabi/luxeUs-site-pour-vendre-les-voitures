<?php
session_start();
include("cnxPOO.php");
if(isset($_POST['sub'])){
$login=$_POST['user'];
$pass=$_POST['pass'];
$paie=$_POST['paiement'];
$loc=$_POST['localisation'];
try{
$db=new strange\cnx();
$tst=$db->selectCLient($pass);
$row=$tst->rowCount();
$nbr=0;
if($row==1){
  $_SESSION['paiement']=$paie;
  $_SESSION['user']=$login;
   $_SESSION['pass']=$pass;
   $_SESSION['paie']=$paie;
   $_SESSION['localisation']=$loc;
if(isset($pass)){
  $nbr++;
}
$_SESSION['conn']=$nbr;
  header("location:commander.php");
}
else{
  header("location:creer.php");
}

}catch(PDOEXception $e){die("error:".$e->getMessage());}}

  ?>  

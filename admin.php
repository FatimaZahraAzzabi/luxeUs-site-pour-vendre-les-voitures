<?php session_start();
if(isset($_POST ['submit'])){ 
	if(isset($_POST['username']) && !empty($_POST['username'])){
	if(isset($_POST['password']) && !empty($_POST['password'])){
$pass=$_POST['password'];
$admin=$_POST['password'];
include("cnxPOO.php");
$db=new strange\cnx();
$tst=$db->selectAdmin($pass);
$row=$tst->rowCount();
if($row==1){
  $_SESSION['user']=$admin;
   $_SESSION['pass']=$pass;
  header("location:dashboard.php");
}
else{
  header("location:admin.php");
}


	}else{
  $err="entrer votre mot de passe";
	}

}else{
$err="entrer un username";
	}}
 ?>
<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="css/style2.css" media="screen" type="text/css" />
 </head>
 <title>AdminLogin</title>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="" method="POST">
 <h1> Adminstartion</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit'name="submit" value='LOGIN' >
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 </form>
 </div>
 </body>
</html>
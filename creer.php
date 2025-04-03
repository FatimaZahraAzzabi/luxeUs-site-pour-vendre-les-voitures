<?php
session_start();
include("cnxPOO.php");
$db=new strange\cnx();
if(isset($_POST['sub1'])){
$email=htmlspecialchars(trim(strtolower($_POST['em'])));
$user=htmlspecialchars(trim(strtolower($_POST['user'])));
$tel=htmlspecialchars(trim(strtolower($_POST['tel'])));
$pass=htmlspecialchars(trim(strtolower($_POST['pass'])));
$cin=htmlspecialchars(trim(strtolower($_POST['cin'])));
$mode_paie=$_POST['paiement'];
$ville=htmlspecialchars(trim(strtolower($_POST['localisation'])));
$imageFiletmp=$_FILES["image"]["tmp_name"];
$imageFileName=$_FILES["image"]["name"];
try{
$filename_sep=explode('.',$imageFileName);
$file_ext=strtolower(end($filename_sep));
$exten=array('jpeg','jpg','png');
if(in_array($file_ext,$exten)){
    $upload='images/'.$imageFileName;
    move_uploaded_file($imageFiletmp,$upload);
$tst=$db->insertCL($pass,$user,$tel,$email,$cin,$upload);
$_SESSION['pass']=$pass;
$_SESSION['paie']=$mode_paie;
$_SESSION['localosation']=$ville;
header("location:commander.php");
}
}catch(PDOEXception $e){
  die("error:".$e->getMessage());
}}

?>

<!DOCTYPE html>
<html>
<head>
  <title>creer compte</title>
 <link rel="stylesheet" type="text/css" href="css/form.css">

</head>
<body>
  <nav>
      <div class="icon">
       <h1 class="logo">LUXeUS</h1>
</div>
      <div class="menu">
        <ul>
          <li><a href="aboutUs.php">aboutus</a></li>
          <li><a href="new.php">New</a></li>
          <li><a href="page2.html">descover</a></li>
          <li><a href="contactUS.php">contact</a></li>
          <li><a href="creer.php">create a compte</a></li>
        </ul>
      </div>
      </nav>
  <div class="box">
  <div class="container">
   <div class="adjust">
    <img src="img_ved_od/BMW.jpg" alt="Image" class="image">
    <div class="image-text">
      <p>let <span class="color">Vehicul</span> rise you to the top</p>
    </div>
   </div>
    <div class="texte">
      <form action="" method="POST" enctype="multipart/form-data">
        <h2>INSCRIPTION</h2>
  <label for="nom">Nom Complet :</label>
  <input type="text" id="user" name="user" required><br><br>

  <label for="nom">Email :</label>
  <input type="text" id="em" name="em" required><br><br>

  <label for="nom">Definir le mot de passe :</label>
  <input type="password" id="pass" name="pass" required><br><br>

 
  <label for="carte">Numéro de carte :</label>
  <input type="text" id="cin" name="cin" required><br><br>
  <label  for="image" class="form-label">Image</label>
<input type="file" class="form-control" placeholder="image" name="image"  required><br><br>
 
  <label for="telephone">Numéro de téléphone :</label>
  <input type="tel" id="tel" name="tel" required><br><br>
 
  <label for="paiement">Moyen de paiement :</label>
  <select id="paiement" name="paiement">
    <option value="visa">Visa</option>
    <option value="mastercard">Mastercard</option>
    <option value="paypal">PayPal</option>
  </select><br><br>
 
  <label for="localisation">Localisation :</label>
  <input type="text" id="localisation" name="localisation" required><br><br>
 
 <button type="submit" name="sub1">CREATE</button>
</form>
    </div>
  </div>
</div>
</body>
</html>

	

<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Buing form</title>
 <link rel="stylesheet" type="text/css" href="css/form.css">

</head>
<body>
  <nav>
      <div class="icon">
       <h1 class="logo">LUXeUS</h1>
</div>
      <div class="menu">
        <ul>
          <li><a href="aboutUs.html">aboutus</a></li>
          <li><a href="new.html">New</a></li>
          <li><a href="page2.html">descover</a></li>
          <li><a href="contactUS.html">contact</a></li>
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
      <form action="select.php" method="POST">
        <h2>BUYING FORM</h2>
  <label for="nom">Nom Complet :</label>
  <input type="text" id="user" name="user" required><br><br>

  <label for="nom">Email :</label>
  <input type="text" id="em" name="em" required><br><br>

  <label for="nom">Mot de passe :</label>
  <input type="password" id="pass" name="pass" required><br><br>

 
  <label for="carte">Numéro de carte :</label>
  <input type="text" id="cin" name="cin" required><br><br>
 
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
 
 <button type="submit" name="sub">SEND</button>
</form>
    </div>
  </div>
</div>
</body>
</html>

	

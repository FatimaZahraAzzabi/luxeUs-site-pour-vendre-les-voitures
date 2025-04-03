<!DOCTYPE html>
<html>
<head>
	<title>Afficher les informations d'un client</title>
	<style>
		body{
			background:;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 300px;
			margin: 10px;
			text-align: center;
			font-family: arial;
		}

		.card img {
			max-width: 100%;
			height: auto;
		}

		.card h3 {
			margin-top: 10px;
			font-size: 1.5em;
			font-weight: bold;
			color: #333;
		}

		.card p {
			margin: 10px;
			font-size: 1.2em;
			color: gray;
		}
	</style>
</head>
<body>

<?php
session_start();
include 'connextion.php';
// Vérifier la connexion
if (!$sql) {
    die("Connection failed: " . mysqli_connect_error());
}
$sqli = "SELECT * FROM client WHERE code = '$_SESSION[pass]'";
$result = mysqli_query($sql, $sqli);

// Vérification si le client existe dans la base de données
if (mysqli_num_rows($result) == 0) {
	echo "<h3>Client introuvable</h3>";
}
else {
	// Affichage des données sous forme de carte centrée
	$row = mysqli_fetch_assoc($result);
	echo "<div class='container'>";
	echo "<div class='card'>";
	echo "<img src='" . $row['image_cl'] . "' alt='image'>";
	echo "<h3>" . $row['username'] . "</h3>";
	echo "<p>voiture commandeé : ".$_SESSION['designation']."</p>";
	echo "<p>Prix: " . $_SESSION['tot'] . " €</p>";
	echo "<p>mode de paiement ".$_SESSION['paie']."</p>";
	echo "<form action='' method='post'>
	<p><input type='text' placeholder='code de carte' name='code'></p>";
	echo "<p><input type='submit'value='envoyer' name='ajouter'></p></form>";
	if(isset($_POST['ajouter']) && !empty($_POST['code'])){
	header("location:profil.php");
}
else if(isset($_POST['ajouter'])&& empty($_POST['code'])){
	echo'<i style="color:red">entrer le code </i>';
}
	echo "</div>";
	echo "</div>";
}
// Fermeture de la connexion
mysqli_close($sql);

?>

</body>
</html>

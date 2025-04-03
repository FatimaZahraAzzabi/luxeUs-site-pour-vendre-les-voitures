<title>Repture de stock</title>
<link rel="stylesheet" type="text/css" href="css/table.css">
<?php
session_start();
if(empty($_SESSION['msg'])){
	echo "il n'ya rien pour le moment";
}
else{ 

	echo '<table border="1">
     <tr>
     <th>MESSAGE(S)</th>
     <th>ACTION</th>
     </tr>';
     // while($_SESSION['msg']){
     echo '
     <tr>
     <td>
	 <p style="color:red">'.$_SESSION['msg'].'</p></td>';?>
	 <td><a href="deletePR.php?id=<?php echo $_SESSION['mat'] ?>" onclick="return confirm('voulez vous vraiment supprimer le Produit')" class="btn btn-success">Supprimer</a> la vehicule de la base donnees</td></tr>
	 	<?php /*}*/
	 } ?>
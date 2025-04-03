<?php
 include 'connextion.php';
$slct = "SELECT * FROM cmd";
$result = mysqli_query($sql, $slct);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Oreders</title>
  <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>

<table border="1">
  <tr>
    <th>ID_Commande</th>
    <th>ID_Client</th>
    <th>ID_Car</th>
    <th>Qte du Commande</th>
    <th>total $</th>
    <th>mode de paienment </th>
    <th>localisation du client</th>
    <th>date du commande</th>
  </tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
?>
  <tr>
    <td><?php echo $row["ID"]; ?></td>
    <td><?php echo $row["id_client"]; ?></td>
    <td><?php echo $row["id_car"]; ?></td>
    <td><?php echo $row["Qte_cmd"]; ?></td>
    <td><?php echo $row["total"]; ?></td>
    <td><?php echo $row["mode_payer"]; ?></td>
    <td><?php echo $row["localisation_client"]; ?></td>
    <td><?php echo $row["date_creation"] ?></td>
  </tr>
<?php
}
?>

</table>

<?php
// Fermer la connexion
mysqli_close($sql);
?>

</body>
</html>

<?php
if(isset($_POST['sub2'])){
$id=$_GET['id'];
include("cnxPOO.php");
$db=new strange\cnx();
$tst=$db->getPDO();
$lib = $_POST['lib'];
$mat = $_POST['mat'];
$pr = $_POST['pr'];
$qte = $_POST['qte'];
$choix = $_POST['choix'];
$mtr = $_POST['mtr'];
$imageFiletmp=$_FILES["image"]["tmp_name"];
       $imageFileName=$_FILES["image"]["name"];
       $filename_sep=explode('.',$imageFileName);
$file_ext=strtolower(end($filename_sep));
$exten=array('jpeg','jpg','png');
if(in_array($file_ext,$exten)){
    $upload='images/'.$imageFileName;
    move_uploaded_file($imageFiletmp,$upload);

$stmt=$tst->prepare("UPDATE commande set Matricule='$mat' , designation='$lib',moteur='$mtr' ,Qte='$qte',categorie='$choix' ,prix='$pr' ,image='$upload' WHERE Matricule=?");
$stmt->execute([$id]);

header('location:dashboard.php');
}
}
?>
<link rel="stylesheet" type="text/css" href="css/inser.css">
</style>
<div class="contactez-nous">
<h1 align="center">Modifier Les Inforamtions Du PRODUIT</h1>
<form action="" method="post" enctype="multipart/form-data">
<div>
<label for="nom">Desigantion</label>
<input type="text" id="lib" name="lib" placeholder="......................" required>
</div>
<div>
<label for="mat">Matricule</label>
<input type="text" id="mat" name="mat" placeholder="ex:000000000 WW" required>
</div>
<div>
<label for="pr">Prix</label>
<input type="number" id="pr" name="pr" placeholder=".................DH" required>
</div>

<div>
<label  for="image" class="form-label">Image</label>
<input type="file" class="form-control" placeholder="image" name="image"  required>
</div>

<div>
<label for="qte">Quntité</label>
<input type="number" id="qte" name="qte" placeholder="................" required>
</div>

<div>
<label for="sujet">Quel est la marque du voiture?</label>
<select name="choix" id="sujet" required>
<option value="" disabled selected hidden>Choisissez la marque </option>
<option value="porsche">Porsche</option>
<option value="mercedes">Mercedes</option>
<option value="maserati">Maserati</option>
<option value="audi">Audi</option>
<option value="volvo">Volvo</option>
<option value="ferari">Ferari</option>
</select>
</div>
<div>
<label for="mtr">Moteur</label>
<input type="text" id="mtr" name="mtr" placeholder="................" required>
</div>
<div>
</div>
<div>
<button type="submit" name="sub2">Modifier</button>
</div>
</form>
</div>

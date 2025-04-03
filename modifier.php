<?php
if(isset($_POST['Modifier'])){
$id=$_GET['id'];
include("cnxPOO.php");
$db=new strange\cnx();
$tst=$db->getPDO();
$lib = $_POST['lib'];
$pass = $_POST['pass'];
$cin = $_POST['cin'];
$email = $_POST['Email'];
$tel = $_POST['tel'];
$imageFiletmp=$_FILES["image"]["tmp_name"];
       $imageFileName=$_FILES["image"]["name"];
       $filename_sep=explode('.',$imageFileName);
$file_ext=strtolower(end($filename_sep));
$exten=array('jpeg','jpg','png');
if(in_array($file_ext,$exten)){
    $upload='images/'.$imageFileName;
    move_uploaded_file($imageFiletmp,$upload);

$stmt=$tst->prepare("UPDATE client set code='$pass' , username='$lib',telephone='$tel' ,email='$email',cin='$cin' ,image_cl='$upload' WHERE code=?");
$stmt->execute([$id]);

header('location:dashboard.php');
}
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Modifier Client</title>
</head>
<body>
<div class="container py-2">
    
    <link rel="stylesheet" type="text/css" href="css/inser.css">
</style>
<div class="contactez-nous">
<h1 align="center">Modifier Les Inforamtions Du CLIENT</h1>
<form action="" method="post" enctype="multipart/form-data">
<div>
<label class="form-label">Nom Complet</label>
<input type="text" class="form-control" name="lib" >
</div>
<div>
<label for="pass">CODE</label>
<input type="text" id="pass" name="pass" placeholder="............." required>
</div>
<div>
<label for="cin">CIN</label>
<input type="text" id="cin" name="cin" placeholder="................." required>
</div>

<div>
<label  for="image" class="form-label">Image</label>
<input type="file" class="form-control" placeholder="image" name="image"  required>
</div>

<div>
<label for="tel">Telephone</label>
<input type="text" id="tel" name="tel" placeholder="................" required>
</div>
<div>
<label for="Email">Email</label>
<input type="email" id="Email" name="Email" placeholder="................" required>
</div>
<div>
</div>
<div>
<button type="submit" name="Modifier">Modifier</button>
</div>
</form>
</div>

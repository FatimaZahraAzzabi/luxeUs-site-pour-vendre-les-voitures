<?php
include("cnxPOO.php");
if(isset($_POST['sub1'])){
$email=htmlspecialchars(trim(strtolower($_POST['em'])));
$user=htmlspecialchars(trim(strtolower($_POST['user'])));
$tel=htmlspecialchars(trim(strtolower($_POST['tel'])));
$pass=htmlspecialchars(trim(strtolower($_POST['pass'])));
$cin=htmlspecialchars(trim(strtolower($_POST['cin'])));
$imageFiletmp=$_FILES["image"]["tmp_name"];
$imageFileName=$_FILES["image"]["name"];
try{
$filename_sep=explode('.',$imageFileName);
$file_ext=strtolower(end($filename_sep));
$exten=array('jpeg','jpg','png');
if(in_array($file_ext,$exten)){
    $upload='images/'.$imageFileName;
    move_uploaded_file($imageFiletmp,$upload);
   $db=new strange\cnx();
$tst=$db->insertCL($pass,$user,$tel,$email,$cin,$upload);
header("location:administration.php");
}
}catch(PDOEXception $e){
	die("error:".$e->getMessage());
}}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>inserer</title>
</head>
<body>

</body>
</html>

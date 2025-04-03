<?php
if(isset($_POST['mod'])){
if(!empty($_POST)){
  include("cnxPOO.php");
$imageFiletmp=$_FILES["image"]["tmp_name"];
$imageFileName=$_FILES["image"]["name"];
$filename_sep=explode('.',$imageFileName);
$file_ext=strtolower(end($filename_sep));
$exten=array('jpeg','jpg','png');
if(in_array($file_ext,$exten)){
    $upload='images/'.$imageFileName;
    move_uploaded_file($imageFiletmp,$upload);
$db=new strange\cnx();
$tst=$db->getPDO();
$user=$_POST['nom'];
$tel=$_POST['tel'];
$cin=$_POST['cin'];
$em=$_POST['em'];
$pass=$_POST['pass'];
$stmt=$tst->prepare("UPDATE client set
 code='$pass' username='$user',telephone='$tel',email='$em',cin='$cin', image_cl=$upload WHERE code='$pass'");
$stmt->execute([
"code"=>$_POST['pass'],
"username"=>$_POST['nom'],
"telephone"=>$_POST['tel'],
"email"=>$_POST['em'],
"cin"=>$_POST['cin'],
"image_cl"=>$upload
]);
}}}
?>

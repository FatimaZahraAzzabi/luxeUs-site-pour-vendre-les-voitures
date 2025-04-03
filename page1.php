<style>
    body {
        background-image: url('image.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

<?php
session_start();
include("cnxPOO.php");
include("cptPOO.php");
//compteur est une classe de la page cptPOO.php
$cpt=new compteur();
$vis=$cpt->aff();
$_SESSION['vis']=$vis;
if(isset($_POST['submit'])){
$search=$_POST['search'];
$dba=new strange\cnx();
$con=$dba->connectSql();
$sql="Select * from `designationmarque` where nom like '%$search%'";
$result=mysqli_query($con,$sql);
if($result){
if(mysqli_num_rows($result)>0)
{echo '<table class="table">
<thead>
<tr>

<th>name</th>
       
</tr>
</thead>';
while($row=mysqli_fetch_assoc($result)){
echo '<tbody>
<tr>
<td><a href="'.$row['nom'].'.php?data='.$row['nom'].'">'.$row['nom'].'</a></td>
    </tr>
</tbody>';
}
}
else{
echo '<h2>DATA NOT FOUND</h2>';}

}
}
echo '</table>';
?>
<!DOCTYPE html>
<html>
<head>
<title>Page1</title>
<link rel="stylesheet" type="text/css" href="css/acc.css">
</head>
<body>
<div class="main">
<div class="navbar">
<div class="icon">
<h1 class="logo">LUXeUS</h1>
</div>
<div class="menu">
<ul>
<li><a href="aboutUs.html">aboutus</a></li>
<li><a href="new.html">New</a></li>
<li><a href="contactUS.php">contact</a></li>
<li><a href="login.php">login</a></li>
</ul>
</div>
</div>
<!-- <div class="search">
<input class="srch" type="search" name="" placeholder="Type To Text">
<a href="#"><button class="btn">search</button></a>

</div> -->
<form method="POST">
<div class="search" >
<input class="srch" type="search" name="search" placeholder="Type To Text" >
<a href="#"><button class="btn" name="submit" >search</button></a>
</div>
</form>
<div class="contact">
<h1>luxury vehicle</br><span>for elegant drivers</span></br>only</h1>
            <button class="cn"><a href="page2.html">DESCOVER</a></button>
            <div class="form">
            <h1></h1>
           
</div>
</div>

</div>
</body>
</html>
    

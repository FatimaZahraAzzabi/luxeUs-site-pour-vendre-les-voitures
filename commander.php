<?php

                                  session_start();
                                   include 'connextion.php';
                                     if(isset($_POST['add_to_cart'])){
                                    if(isset($_SESSION['cart'])){
                                         $session_array_id = array_column($_SESSION['cart'], "Matricule");
                                             
                                              if(!in_array($_GET['Matricule'], $session_array_id)){
                                         $session_array= array(
                                     'Matricule' => $_GET['Matricule'],
                                         "designation" => $_POST['designation'],
                                             "prix" => $_POST['prix'],
                                                  "Qte" => $_POST['Qte']);
           
                                                   $_SESSION['cart'][] = $session_array;
                                               }
                                     }else{
                                     $session_array= array(
                                     'Matricule' => $_GET['Matricule'],
                                         "designation" => $_POST['designation'],
       "prix" => $_POST['prix'],
             "Qte" => $_POST['Qte']);
           
                                                    $_SESSION['cart'][] = $session_array;
                                           }
                                      }
?>
<!DOCTYPE html>
<html>
<head>
<title>shoping cart</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-6">
<h2 class="text-center">SELECT</h2>
                 <div class="col-md-12">
                  <div class="row">
                   
<?php
$query = "SELECT * FROM commande";  
  // base de donnee ou il y a les produit
$result = mysqli_query($sql,$query);
while($row = mysqli_fetch_array($result)) { 
  $image=$row['image']; ?>
<div class="col-md-4">
<form method="post" action="commander.php?Matricule=<?=$row['Matricule'] ?>"> 
 <?php echo '<img src="'.$image.'" style="height: 150px;"/>';?>
<h5 class="text-center"><?= $row['designation']; ?></h5>
<h5 class="text-center">$<?= number_format($row['prix'],2); ?></h5>
<input type="hidden" name="designation" value="<?= $row['designation'] ?>">
<input type="hidden" name="prix" value="<?= $row['prix'] ?>">
<input type="number" name="Qte" value="1" class="form-control">
<!-- add to cart -->
<input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="chose it now">
</form>
                    </div>
<?php }
?>
</div>
            </div>
</div>
<div class="col-md-6">
<h2 class="text-center">YOUR CHOICES</h2>
<?php
$total = 0;
$output = "";
$output .= "
                <table class='table table-border table-striped'>
                <tr>
                <th>ID</th>
                <th>Car's Name</th>
                <th>Car's Price</th>
                <th>Quantity</th>
                <th>Totale price</th>
                <th>Action</th>
                <tr>
" ;

if(!empty($_SESSION['cart'])){
foreach ($_SESSION['cart'] as $key => $value) {
$output .= "
                        <tr>
                        <td>".$value['Matricule']."</td>
                        <td>".$value['designation']."</td>
                        <td>".$value['prix']."</td>
                        <td>".$value['Qte']."</td>
                        <td>$". number_format($value['prix'] * $value['Qte'])."</td>
                        </td>
                        <td>
                        <a href='commander.php?action=remove&Matricule'=".$value['Matricule']."'>
                        <button class='btn btn-danger btn-block'>Remove</button>
                        </a>

                        </td>
";
$_SESSION['qte']=$value['Qte'];
$_SESSION['mat']=$value['Matricule'];
$total = $total + $value['Qte'] * $value['prix'];
$_SESSION['tot']=$total;
$_SESSION['designation']=$value['designation'];
}

 $output .= "
<tr>
 <td>           <form method='post' action='TesterLaCmd.php'>
                   <input type='submit' name='sub' value='buy'>
                        </form>
                        </td>
<td colspan='2'></td>
<td><b>Total price</b></td>
<td>".number_format($total,2)."</td>
<td>
<a href='commander.php?action=clearall'</tr>
<button class='btn btn-warning btn-block'>Clear</button>
</a>
</td>
</tr>
 ";
}
 echo $output;
?>
</div>
</div>
</div>
</div>
<?php
if(isset($_GET['action'])){
if($_GET['action'] == "clearall"){
unset($_SESSION['cart']);
}

if($_GET['action'] == "remove"){
foreach ($_SESSION['cart'] as $key => $value) {
if($value['Matricule'] == $_GET['Matricule']){
unset($_SESSION['cart'][$key]);
}
}
}
}
?>
</body>
</html>
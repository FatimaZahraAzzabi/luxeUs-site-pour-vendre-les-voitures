<?php
session_start();
include("cnxPOO.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" href="css/jamal.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>LUX<span>eUS</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(images/admina1.png)"></div>
                <h4>Fatima zahra / Malika</h4>
                <small>Admins</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard
                           </small>
                        </a>
                    </li>
                    <li>
                       <a href="creer.php">
                            <span class="las la-user-alt"></span>
                            <small>+Client</small>
                        </a>
                    </li>
                    <li>
                       <a href="insertPR.php">
                          <i class="fa-solid fa-car-side fa-xl" style="color: #c0c0c0;"></i>
                               <br>
                            <small>+Voiture</small>
                        </a>
                    </li>
                    <li>
                       <a href="orders.php">
                            <span class="las la-shopping-cart"></span>
                            <small>Orders</small>
                        </a>
                    </li>
                    <li>
                       <a href="Attention.php">
                          <i class="fa-sharp fa-solid fa-triangle-exclamation" style="color: #c0c0c0;"></i></i><br>
                            <small>Attention</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>

                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>

                    <div class="user">
                        <div class="bg-img" style="background-image: url(images/admina1.png)"></div>

                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>

            <div class="page-content">

                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2><?php echo @$_SESSION['conn'];?></h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>The number of people connected</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2> 
                        <?php  
                                echo @$_SESSION['vis'];
                              
                        ?>                   
                           </h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Page views</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>$10000000000</h2>
                            <span class="las la-shopping-cart"></span>
                        </div>
                        <div class="card-progress">
                            <small>Monthly revenue growth</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>5</h2>
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>New E-mails received</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="records table-responsive">
                    <div class="record-header">
                       
                    </div>

                    <div>
                       <style>
      img{
        width: 120px;   
      }
    </style>
</body>
</html>
<?php
$dba=new strange\cnx();
$clients=$dba->selectCL(); 
// make relation between this page and database 
 try{
echo '<table width="100%" border="1">
<thead>
<tr>
<th>username</th>
<th>profil</th>
<th>telephone</th>
<th>email</th>
<th>Cin</th>
<th>code</th>
<th>action</th>
</thead>';?>
<?php foreach ($clients as $client) {
	$image=$client["image_cl"];
 ?> 
	<tbody>
	<tr>
   <td><?php echo $client["username"]; ?></td>
   <?php echo '<td><img src="'.$image.'"/></td>';?>
    <td><?php echo $client["telephone"]; ?></td>
<td><?php echo $client["email"]; ?></td>
<td><?php echo  $client["cin"]; ?></td>
	<td><?php echo $client["code"]; ?></td>
	<td><a href="delete.php?id=<?php echo $client["code"] ?>" onclick="return confirm('voulez vous vraiment supprimer le client')" class="btn btn-success">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>
</a>
&nbsp &nbsp &nbsp
<a href="modifier.php?id=<?php echo $client["code"] ?>" onclick="return confirm('voulez vous vraiment modifier les informations du client')" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>

</td>
</div>

	</tr>

 <?php } }catch(PDOEXception $e){die("error:".$e->getMessage());}?>
</tbody>
</table>
    <table border="1">
      <tr>
        <th>Categorie</th>
        <th>Libelle</th>
        <th>Image</th>
        <th>Matricule</th>
        <th>Moteur</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>Acivités</th>
        </tr>
      <?php
      $db=new strange\cnx();
      $stmt=$db->selectPR();
      ?>
      <?php foreach ($stmt as $row)  {
        $matri=$row["Matricule"];
        $lib=$row["designation"];
        $mot=$row["moteur"];
        $prix=$row["prix"];
        $qte=$row["Qte"];;
        $image=$row["image"];
        $marq=$row["categorie"];
    echo '<tr>
<td>'.$marq.'</td>
<td>'.$lib.'</td>
<td><img src="'.$image.'"/></td>
<td>'.$matri.'</td>
<td>'.$mot.'</td>
<td>'.$prix.'</td>
<td>'.$qte.'</td>';
       ?>
       <td><a href="deletePR.php?id=<?php echo $row["Matricule"] ?>" onclick="return confirm('voulez vous vraiment supprimer le produit')" class="btn btn-success">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>
</a>
&nbsp &nbsp &nbsp
<a href="updatPR.php?id=<?php echo $row["Matricule"] ?>" onclick="return confirm('voulez vous vraiment modifier les informations du client')" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>


</td> 
      <?php } ?>

    </table>
                   </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
<?php
session_start();
include 'connextion.php';
include 'TesterPOO.php';
$code=$_SESSION['mat'];
$QteDemandee=$_SESSION['qte'];
$_SESSION['msg']='';
$laQte="SELECT Qte FROM commande where Matricule='$code'";
$result = mysqli_query($sql,$laQte);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // UNE CLASSE POUR TESTER LE STOCK
    $db=new Tester();
    $dba=$db->Verifier($row["Qte"],$QteDemandee);
    if($dba==-1){
    	?>
<link rel="stylesheet" href="indexe/style1.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

    <div class="modal-container">

      <div class="overlay modal-trigger"></div>
     
      <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="dialogDesc">
        <button 
        aria-label="close modal"
        class="close-modal modal-trigger">X</button>
        <h1 id="modalTitle">Malheureusement</h1>
        
        <p id="dialogDesc">La Quantite en stock n'est pas suffisante</p>
      </div>

    </div>

  <button class="modal-btn modal-trigger" style="color:red">Erreur</button>
    <script src="indexe/mov.js"></script>
        <?php
    }
    else if($dba==-2){
        $_SESSION['newQte']=0;
   $_SESSION['diff']=0;
$_SESSION['msg'].='Attention le produit dont le id est *'.$_SESSION['mat'].'* est en repture de stock';
header("location:inserCommande.php");}
    else { 
         $_SESSION['diff']=1;
        $_SESSION['newQte']=$dba;
     header("location:inserCommande.php");
    		
    }
    
}

?>
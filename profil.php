<?php
session_start();
include 'connextion.php';
//pour compter le nombre des pesonnes qui sont connectees
$sessionId = $_SESSION["pass"];
include("cnxPOO.php"); 
$db=new strange\cnx();
$tst=$db->SelectUnCLien($sessionId);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Profile</title>
    <link rel="stylesheet" href="css/profil.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <?php foreach ($tst as $user) {
     ?>
  <body>
  
    <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <div class="upload">
        <?php
        if (isset($_SESSION['user'])) {
        if ($tst) {
        $row =$tst->fetchALL(PDO::FETCH_ASSOC);
        $id = $user["code"];
        $name = $user["username"];
        $image = $user["image_cl"];?>
        <div class="round">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="name" value="<?php echo $name; ?>">
          <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera" style = "color: #fff;"></i>
        </div>
        <?php echo '<img src="'.$image.' " width=125 height=125/> ';?>
        </div>
        <?php
        echo 
        "<h2 class='text-center'>SUCCESSFULL ORDER !</h2></br>
        <h3>".$name."</h3>";
        
    } }?>
        
    </form>
   
    <script type="text/javascript">
      document.getElementById("image").onchange = function(){
          document.getElementById("form").submit();
      };
    </script>
  </body>
<?php }?>
</html>


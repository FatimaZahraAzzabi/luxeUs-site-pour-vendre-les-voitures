<?php
namespace strange;
use \PDO;
class cnx{
 private $pdo;
 public function getPDO(){
$this->pdo=new PDO('mysql:host=localhost;dbname=projet','root',''); 
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
return $this->pdo;
}

 public function selectCL(){
 return $this->getPDO()->query('SELECT * FROM client')->fetchALL(PDO::FETCH_ASSOC);
  }

   public function insertPR($matri,$libelle,$mot,$prix,$qte,$marq,$up){
 return $this->getPDO()->query("INSERT INTO commande(Matricule,designation,moteur,Qte,categorie,prix,image)
VALUES('$matri','$libelle','$mot','$qte','$marq','$prix','$up')");
  }

  public function insertCL($pass,$user,$tel,$email,$cin,$upl){
 return $this->getPDO()->query("INSERT INTO client(code,username,telephone,email,cin,image_cl)
VALUES('$pass','$user','$tel','$email','$cin','$upl')");
  }

  public function selectPR(){
 return $this->getPDO()->query("SELECT * FROM commande")->fetchALL(PDO::FETCH_ASSOC);
  }
  public function selectCLient($password){
 return $this->getPDO()->query("SELECT * FROM client where code='$password'");
  }

  public function selectAdmin($pass){
 return $this->getPDO()->query("SELECT * FROM admin where code_ad='$pass'");
  }

public function UpdateCL($user,$tel,$cin,$img,$email,$code)
{
return $this->getPDO()->prepare("UPDATE client set username='$user',telephone='$tel' ,email='$email',cin='$cin', image='img' WHERE code='$code'");
}

public function UpdatePR($lib,$mat,$Qte,$prix,$mot,$marq,$image)
{
return $this->getPDO()->prepare("UPDATE commande set designation='$lib',moteur='$mot',Qte='$Qte', image='image',prix='$prix' WHERE Matricule='$mat'");
}
public function InsertVis($vis){
return $this->getPDO()->query("INSERT INTO nbrvisiteur(nbr_ves)
VALUES('$vis')");
} 

public function selectNbrVisteur(){
   return $this->getPDO()->query("SELECT * FROM nbrvisiteur ORDER BY nbr_ves DESC LIMIT 1")->fetchALL(PDO::FETCH_ASSOC);
}
public function connectSql(){
 return $this->pdo=mysqli_connect('localhost','root','','projet'); 
}
public function SelectUnCLien($sessionId){
  return $this->getPDO()->query("SELECT * FROM client where code='$sessionId'");
}
}
?>

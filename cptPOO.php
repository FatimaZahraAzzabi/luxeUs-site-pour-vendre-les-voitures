 <?php
// session_start();
?> 
<?php
class compteur{
private $fp;
public $nbr;

// les methodes
public function __construct(){
	$this->fp=fopen("compteur.txt", "r+");
	$this->nbr=fgets($this->fp);
	$this->inc();
}

public function __destruct(){
	fclose($this->fp);
}

public function inc(){
	if(@$_SESSION['dejaVisitee']!="oui"){
		$this->nbr++;
		fseek($this->fp,0);
		fputs($this->fp,$this->nbr);
		$_SESSION['dejaVisitee']="oui";
	}
}

public function aff(){
return $this->nbr;
}
}
?>
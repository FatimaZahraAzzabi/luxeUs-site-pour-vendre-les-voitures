<?php
class Tester{
public function Verifier($QteExiste,$QteDemd){
  if($QteExiste<$QteDemd){
  	return -1;
  }
 else if($QteExiste==$QteDemd){
  	return -2;
  }
  else if($QteExiste>$QteDemd){
  return $this->QteExiste=$QteExiste-$QteDemd;
  }
}
} 
?>
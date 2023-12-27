<?php
require_once "../Model/reponsemodel.php";

class ReponsControlle
{
    private $reponse;
    private $idQ;
    private $status;
    private $justification;

 public function ReponseControlle($idQ){
   $reponse= new Reponse();
   $result = $reponse->getAllReponse($idQ);
   return $result;

 }

 public function justificationControlle($idQ){
  $reponse= new Reponse();
  $result = $reponse->justification($idQ);
  return $result;

}


}
?>
<?php
require_once('../config/conn.php');
class Reponse{
private $conn;
private $reponse;
private $idQ;
private $status;
private $justification;
public function __construct()
{
  $newconnect = Database::getInstance()->getConnection();
  $this->conn=$newconnect;
}

public function getAllReponse($idQ){

    $query = "SELECT * FROM reponse WHERE idQ = $idQ"; 


    $result=$this->conn->query($query);
    $result->execute();
    $reponse = $result->fetchAll(PDO::FETCH_ASSOC);
    return $reponse ;
}


public function justification($idR){
  $query = "SELECT (SELECT justification FROM reponse where statut =1 and idQ=(SELECT idQ from reponse where idR=$idR)) FROM reponse where statut =0 and idR =$idR";

  $stmt = $this->conn->prepare($query);
  $stmt->bindParam(':idR', $idR, PDO::PARAM_INT);
  $stmt->execute();
  
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}


}




 
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

}




 
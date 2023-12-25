<?php
require_once('../config/conn.php');
class Reponse{
private $conn;
private $reponse
public function __construct()
{
  $newconnect = Database::getInstance()->getConnection();
  $this->conn=$newconnect;
}

public function getReponse(){
    $query="SELECT * FROM reponse";
    $result=$this->conn->query($query);
    $reponse = $result->fetchAll(PDO::FETCH_ASSOC);
}
}
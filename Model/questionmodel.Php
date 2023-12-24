<?php
require_once('../config/conn.php');
class Question{
private $conn;
public function __construct()
{
  $newconnect = Database::getInstance()->getConnection();
  $this->conn=$newconnect;
}

public function getQuestion(){
$query="SELECT * FROM `question` as q WHERE q.idQ NOT IN () ORDER BY RAND() LIMIT 1";

}




}



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
    $query="SELECT * FROM question";
// -- as q WHERE q.idQ NOT IN () ORDER BY RAND() LIMIT 1";
    $result=$this->conn->query($query);
    $questions = $result->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['questions'] = $questions;
}

// public function getNextQuestion() {
//     if (!isset($_SESSION['currentQuestion'])) {
//         $_SESSION['currentQuestion'] = 0;
//         } else {
//             $_SESSION['currentQuestion']++;
//         }

//         if ($_SESSION['currentQuestion'] >= count($_SESSION['questions'])) {
//             $_SESSION['currentQuestion'] = 0;
//         }

//         return $_SESSION['questions'][$_SESSION['currentQuestion']];
//     }
 }


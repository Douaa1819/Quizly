<?php
require_once('../config/conn.php');

class Question
{
    private $conn;
    private $idQ;
    private $question;
    private $idTh;

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    public function __construct()
    {
        $newConnect = Database::getInstance()->getConnection();
        $this->conn = $newConnect;
    }


    public function getQuestion()
    {
        $query = "SELECT * FROM question WHERE idQ = :idQ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':idQ', $this->idQ, PDO::PARAM_INT);
        
        try {
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                $this->idQ = $result['idQ'];
                $this->question = $result['question'];
                $this->idTh = $result['idTh'];
                return true; 
            } else {
                return false; 
            }
        } catch (PDOException $e) {

            return false;
        }
    }
    
}

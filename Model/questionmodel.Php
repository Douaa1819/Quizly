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


    public function getAllQuestion()
    {
        $query = "SELECT q.* , t.theme FROM question  q 
                    JOIN theme t ON t.idTh=q.idTh
                    ORDER BY RAND()";
        $stmt = $this->conn->prepare($query);
         $stmt->execute();


        try {
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($result){
                return $result;
            }else{
                return false;
            }
            
        } catch (PDOException $e) {

            return false;
        }
    }
    
}

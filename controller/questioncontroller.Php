<?php
require_once "../Model/questionmodel.php";

class QuestionControlle
{
    private $idQ;
    private $question;
    private $idTh;

 public function QuestionControlle(){
   $question= new Question();
   $result = $question->getAllQuestion();
   return $result;

 }

}
?>

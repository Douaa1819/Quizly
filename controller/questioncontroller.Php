<?php
require_once "../Model/questionmodel.php";

class QuestionControlle
{
    private $idQ;
    private $question;
    private $idTh;

    public function getQuesController($p)
    {
        $question = new Question();
        $question->idQ = $p;
        $question->getQuestion();
        
        $this->idQ = $question->idQ;
        $this->question = $question->question;
        $this->idTh = $question->idTh;
        return $this->question;
    }


}
?>

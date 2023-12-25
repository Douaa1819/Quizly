<?php
class ReponseController{

    public $reponse;
    public function getReponseController(){

        $reponse =new Question();
        // $question->idQ=$id;

    }
}
?>


<?php
require_once "../Model/questionmodel.php";

class ReponseControlle
{
    private $reponse;

    public function getReController($p)
    {
        $question = new Question();
        $question->idQ = $p;
        $question->getQuestion();
        
        // $this->idQ = $question->idQ;
        // $this->question = $question->question;
        // $this->idTh = $question->idTh;
        // return $this->question;
    }


}
?>
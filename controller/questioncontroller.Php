<?php
class Questioncontroll extends Question {
    public function __construct() {
        parent::__construct();
        $this->getQuestion();
    }

    // public function show() {
    //     $question = $this->getNextQuestion();
    //     return $question;
    // }
}


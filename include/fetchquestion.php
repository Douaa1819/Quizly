<?php
require_once "../controller/questioncontroller.php";
$i = $_GET['id'];

$objectQuestion = new QuestionControlle();
$questions = $objectQuestion->QuestionControlle();

echo '<h1>' . $questions[$i]['theme'] . '</h1>';
echo $questions[$i]['idQ'] . "- " . $questions[$i]['question'];
?>



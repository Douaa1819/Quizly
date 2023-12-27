
<?php
require_once "../controller/questioncontroller.php";
$i = $_GET['idQ'];

$objectQuestion = new QuestionControlle();
$question = $objectQuestion->QuestionControlle();
shuffle($question);

echo '<h1>' . $question[$i]['theme'] . '</h1>';
echo $question[$i]['idQ'] . "- " . $question[$i]['question'];
?>

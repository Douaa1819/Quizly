<?php
require_once "../controller/questioncontroller.php";
$objectQuestion = new QuestionControlle();
$question = $objectQuestion->QuestionControlle();
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/test.css">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-center bg-no-repeat bg-cover" style="background-image: url('../img/image.jpg');">
    </nav>
    <?php
if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
    echo "<p style='color: white; font-size: 22px; font-weight: bold;'>Let's GOOO $pseudo !</p>";
} else {
    echo "<p style='color: red; font-size: 18px; font-weight: bold;'>mkynch.</p>";
}
?>
<div id="countdown" class=" mx-auto text-9xl font-extralight text-center "></div>
    </div>
    <section id="questionContent" class="container" style="display : none;">
        <div class="QuizSection">
            <p class="text-lg font-semibold mb-4">Question/10 </p>
            <h1 id="questionText" class="text-2xl font-bold mb-6">
            <?php
                echo $question[0]['idQ']."- ".$question[0]['question']."<br>";
            ?>
            </h1>
        </div>

        <div class="check-options">
    <div class="left-radio">
        <div class="answer-card">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="1" onclick="showNextButton()">
            <label class="ml-2">Option 1</label>
        </div>
        <div class="answer-card">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="2" onclick="showNextButton()">
            <label class="ml-2">Option 2</label>
        </div>
    </div>
    <div class="right-radio">
        <div class="answer-card">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="3" onclick="showNextButton()">
            <label class="ml-2">Option 3</label>
        </div>
        <div class="answer-card">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="4" onclick="showNextButton()">
            <label class="ml-2">Option 4</label>
        </div>
    </div>
</div>
         
         <button  type="button" id="nextButton" onclick="showNextQuestion()" class="mt-4 form-radio text-purple-500" style="display: none;">Next</button>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script src="../js/quizjs.js"></script>
    <script src="../js/play.js"></script>

    <script>
    function showNextButton() {
        var checkboxes = document.querySelectorAll('input[name="answer"]');
        var nextButton = document.getElementById('nextButton');
        var isChecked = false;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                isChecked = true;
                break;
            }
        }

        if (isChecked) {
            nextButton.style.display = 'inline-block';
        } else {
            nextButton.style.display = 'none';
        }
    }
     function showNextQuestion(){
     var xml=new XMLHttpRequest();
     xml.onreadystatechange =function(){
        if(this.readyState == 4 && status ==200){
            document.getElementById('questionContent').innerHTML=this.responseText;
        }
     }
     xml.open('GET','../include/fetchquestion.php');
     xml.send();
     }

     
</script>
</body>
</html>
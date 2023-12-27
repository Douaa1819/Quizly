<?php
session_start();
require_once "../controller/questioncontroller.php";
require_once "../controller/reponsecontroller.php";
$i = 0; // Initialiser le compteur
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/test.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-center bg-no-repeat bg-cover" style="background-image: url('../img/image.jpg');">
    <?php
    if (isset($_SESSION['pseudo'])) {
        $pseudo = $_SESSION['pseudo'];
        echo "<p style='color: white; font-size: 22px; font-weight: bold;'>Let's GOOO $pseudo !</p>";
    } else {
        echo "<p style='color: red; font-size: 18px; font-weight: bold;'>mkynch.</p>";
    }
    ?>
    <div id="countdown" class="mx-auto text-9xl font-extralight text-center"></div>
    <button onclick="nextQuestion()" class="fixed top-0 right-0 mt-4 mr-4 bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
    Next
</button>
    <section class="container" style="display: block;">
        <div class="QuizSection">
            <p class="text-lg font-semibold mb-4">Question <?php echo $i+1 ?>/10 </p>
            <h1 id="questionText" class="text-2xl font-bold mb-6">
                <div id="questionContent"></div>
            </h1>
        </div>
        <div id=reponse></div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script src="../js/quizjs.js"></script>
    <script src="../js/play.js"></script>

    <script>
    var i = <?php echo $i; ?>;

    function nextQuestion() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("questionContent").innerHTML = this.responseText;
                var reponseXhttp = new XMLHttpRequest();
                reponseXhttp.onreadystatechange = function() {
                    if (reponseXhttp.readyState == 4 && reponseXhttp.status == 200) {
                        document.getElementById("reponse").innerHTML = reponseXhttp.responseText;
                    }
                };
                reponseXhttp.open("GET", "../include/fetchreponse.php?id=" + i, true);
                reponseXhttp.send();
            }
        };

        if (i === 0) {
            xhttp.open("GET", "../include/fetchquestion.php?id=" + i, true);
            i++;
        } else {
            xhttp.open("GET", "../include/fetchquestion.php?id=" + i++, true);
        }
        xhttp.send();
    }

    window.onload = function() {
        nextQuestion();
    };
</script>


</body>

</html>

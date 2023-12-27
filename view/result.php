<?php
session_start();


if (isset($_SESSION['user_responses'])) {
    foreach ($_SESSION['user_responses'] as $questionId => $response) {
        echo "Question ID: $questionId, Response ID: $response <br>";
    }
} else {
    echo "Aucune réponse enregistrée dans la session.";
}
?>

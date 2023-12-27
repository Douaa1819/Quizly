<?php
session_start();
require_once "../controller/reponsecontroller.php";
$objetReponse = new ReponsControlle();

if (isset($_SESSION['user_responses']) && is_array($_SESSION['user_responses'])) {
    foreach ($_SESSION['user_responses'] as $questionId => $response) {
        echo "Question ID: $questionId, Response ID: $response<br>";
        echo $objetReponse->justificationControlle(intval($response));
    }
    var_dump($objetReponse->justificationControlle(intval($response)));
} else {
    echo "Aucune réponse enregistrée dans la session.";
}
?>

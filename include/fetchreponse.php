<?php
session_start();
require_once "../controller/reponsecontroller.php";
$idQ = $_GET['idQ'];

$objectReponse = new ReponsControlle();
$reponse = $objectReponse->ReponseControlle($idQ);

if (isset($_GET['response'])) {
    $selectedResponse = $_GET['response'];

    $_SESSION['user_responses'][$idQ] = $selectedResponse;
    var_dump($idQ);
}
?>

<div class="check-options" id='reponse'>
    <div class="left-radio">
        <div class="answer-card" id="reponseContent1">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="<?php echo $reponse[0]['idR']?>">
            <label class="ml-2"><?php echo $reponse[0]['idR']?><?php echo $reponse[0]['reponse']?></label>
        </div>
        <div class="answer-card" id="reponseContent2">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="<?php echo $reponse[1]['idR']?>">
            <label class="ml-2"><?php echo $reponse[1]['idR']?><?php echo $reponse[1]["reponse"]?></label>
        </div>
    </div>
    <div class="right-radio">
        <div class="answer-card" id="reponseContent3">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="<?php echo $reponse[2]['idR']?>">
            <label class="ml-2"><?php echo $reponse[2]['idR']?><?php echo $reponse[2]["reponse"]?></label>
        </div>
        <div class="answer-card" id="reponseContent4">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="<?php echo $reponse[3]['idR']?>">
            <label class="ml-2"><?php echo $reponse[3]['idR']?><?php echo $reponse[3]["reponse"]?></label>
        </div>
    </div>
</div>

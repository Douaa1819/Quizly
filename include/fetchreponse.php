<?php
require_once "../controller/reponsecontroller.php";
$i = $_GET['id'];

    $objectReponse = new ReponsControlle();
    $reponse = $objectReponse->ReponseControlle($i);

?>

<div class="check-options" id='reponse'>
    <div class="left-radio">
        <div class="answer-card" id="reponseContent1">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="1">
            <label class="ml-2"><?php echo $reponse[0]['reponse']?></label>
        </div>
        <div class="answer-card" id="reponseContent2">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="2">
            <label class="ml-2"><?php echo $reponse[1]["reponse"]?></label>
        </div>
    </div>
    <div class="right-radio">
        <div class="answer-card" id="reponseContent3">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="3">
            <label class="ml-2"><?php echo $reponse[2]["reponse"]?></label>
        </div>
        <div class="answer-card" id="reponseContent4">
            <input type="radio" name="answer" class="form-radio text-purple-500" value="4">
            <label class="ml-2"><?php echo $reponse[3]["reponse"]?></label>
        </div>
    </div>
   
</div>

<?php
require_once "../controller/questioncontroller.php";
$objectQuestion = new QuestionControlle();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>question</h2>
<?php echo $objectQuestion->getQuesController(2); ?>
</body>
</html>

<?php

var_dump($_POST);


$q1 = $_POST["Q1"];
$q2 = $_POST["Q2"];
$q3 = $_POST["Q3"];
$q4 = $_POST["Q4"];
$q5 = $_POST["Q5"];
$q6 = $_POST["Q6"];
$q7 = $_POST["Q7"];
$q8 = $_POST["Q8"];
$q9 = $_POST["Q9"];
$q10 = $_POST["Q10"];


$total = $q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>診断結果</h1>

    <?php if ($total <= 3) {
        echo "あなたのサイコパス度は30%です。";
    } elseif ($total <= 6) {
        echo "あなたのサイコパス度は60%です。";
    } elseif ($total <= 9) {
        echo "あなたのサイコパス度は90%です。";
    } elseif ($total <= 10) {
        echo "あなたのサイコパス度は100%です。";
    }?>
    
</body>
</html>
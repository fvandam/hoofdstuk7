<?php
$result = '';

if(isset($_POST['send'])){
    $numberOne = $_POST['number1'];
    $numberTwo = $_POST['number2'];
    $mathFunction = $_POST['math'];

    if ($mathFunction == 'up'){
        $sum = $numberOne + $numberTwo;
        $result = "$numberOne + $numberTwo = $sum";
    }elseif ($mathFunction == 'down') {
        $sum = $numberOne - $numberTwo;
        $result = "$numberOne - $numberTwo = $sum";
    }elseif ($mathFunction == 'countUp') {
        $sum = $numberOne * $numberTwo;
        $result = "$numberOne x $numberTwo = $sum";
    }else{
        $sum = $numberOne/$numberTwo;
        $result = "$numberOne : $numberTwo = $sum";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Getal 1</label>
    <input type="text" name="number1"> <br>
    <input type="radio" name="math" value="up">Optellen
    <input type="radio" name="math" value="down">Aftrekken
    <input type="radio" name="math" value="countUp">Vermenigvuldigen
    <input type="radio" name="math" value="part">delen <br>
    <label>Getal 2</label>
    <input type="text" name="number2"><br>
    <input type="submit" name="send" value="send"><br>
    <?php
    echo $result;
    ?>
</form>
</body>
</html>

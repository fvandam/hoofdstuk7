<?php
session_start();
$fruit = '';
if (!isset($_SESSION['fruits'])){
    $_SESSION['fruits'] = array();
}


if (isset($_POST['send'])){
    $fruit = $_POST['fruit'];
    $_SESSION['fruits'][] = $fruit;

    foreach($_SESSION['fruits'] as &$data){

        $fruit = $fruit + $data;
    }

    echo $_SESSION['fruits'];


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
<label>Fruitsoorten</label>
<input type="text" name="Fruit"> <br>
<input type="submit" name="send" value="send"><br>
<p>---------------</p><br>
<input type="submit" name="function" value="sort">
<input type="submit" name="function" value="shake">
<p>---------------</p> <br>


</body>
</html>

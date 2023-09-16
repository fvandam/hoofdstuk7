<?php
session_start();
$count = 0;
if (!isset($_SESSION['numbers'])){
    $_SESSION['numbers'] = array();
}


if (isset($_POST['send'])){
    $number = $_POST['grade'];
    $_SESSION['numbers'][] = $number;

    foreach($_SESSION['numbers'] as &$data){

        $count = $count + $data;
    }
    $all = count($_SESSION['numbers']);
    $total = $count/$all;
    $total = number_format($total, 2,',','.');
    echo "Er zijn $all nummers aanwezig. <br>";
    echo "Het gemiddelde van deze nummers is: $total";

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
    <label>Cijfer:</label>
    <input type="text" name="grade"> <br>
    <input type="submit" name="send" value="send"> <br>
</form>
</body>
</html>

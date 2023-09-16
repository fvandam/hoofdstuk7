<?php
$result = '';

if (isset($_POST['send'])) {
    $amount = $_POST['amount'];
    $tax = $_POST['tax'];

if ($tax == 'low'){
    $sum = $amount * 1.09;
    $result = "Bedrag inclusief 9% BTW: ".$sum;
}else{
    $sum = $amount * 1.21;
    $result = "Bedrag inclusief 21% BTW: ".$sum;
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
<form method="post" action="">
    <label>Bedrag exclusief BTW</label>
    <input type="number" name="amount">
    <input type="radio" name="tax" value="low">Low
    <input type="radio" name="tax" value="high">High
    <input type="submit" name="send" value="send">
    <?php
    echo $result;
    ?>

</form>
</body>
</html>

<style type="text/css">
    label {
        float: left;
        display: block;
        width: 150px;
    }

    input {
        display: block;
    }
</style>

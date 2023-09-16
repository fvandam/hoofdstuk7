<?php
$result = '';

if (isset($_POST['send'])){
    $price = $_POST['price'];
    $discount = $_POST['discount'];

    $sum = $price / 100 * $discount;
    $result = $price - $sum;
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
    <label>Prijs</label>
    <input type="text" name="price"><br>
    <label>Korting (%)</label>
    <input type="text" name="discount"> <br>
    <input type="submit" name="send" value="send"> <br>

    <?php
    echo $result;
    ?>
</form>
</body>
</html>


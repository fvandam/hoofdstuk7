<?php
if (isset($_POST['send'])){
    $backgroundColor = $_POST['background'];
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
<body class='<?php  if(isset($_POST['send'])){echo $_POST['background'];} ?>'>
<form method="post">
    <input type="radio" name="background" value="red">Rood
    <input type="radio" name="background" value="green">Groen
    <input type="radio" name="background" value="blue">Blauw
    <input type="radio" name="background" value="pink">Roze <br>
    <input type="submit" name="send" value="send">
</form>
</body>
</html>
<style type="text/css">
    .red{
        background-color: red;
    }

    .green{
        background-color: green;
    }

    .blue{
        background-color: blue;
    }

    .pink{
        background-color: pink;
    }

</style>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="Style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="header">جواب</div>
<div class="boxa">
<?php
        $number1 = $_GET["input"];
        $number2 = $_GET["input2"];
        $result1 = "";
        $result2 = "";
        if ($_GET["submit"]) {
            $result1 = $number2 - $number1;
            $result2 = $result1 / $_GET["input"] * 100;
            echo $result2 . "%";
        }


    ?>
</div>
</body>
</html>

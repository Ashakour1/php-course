<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="get">
        <label for="num1">Num1</label><br>
        <input type="text" name ="Num1"><br>
        <label for="num2">Num2</label><br>
        <input type="text" name ="Num2"><br><br>
        <input type="submit"><br><br>
        
    </form>

    <?php

    $number1 = $_GET["Num1"];
    $number2 = $_GET["Num2"];
    
    $total = $number1 + $number2;
    echo $total;
    ?>
</body>
</html>
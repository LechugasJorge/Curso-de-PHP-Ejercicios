<?php
#switch
if ($_POST) {
    $btn=$_POST['botones'];
    switch ($btn) {
        case 1:
        echo"<h1>El usuario presiono el Boton 1</h1>";
        break;
        
        case 2:
        echo"<h1>El usuario presiono el Boton 2</h1>";
        break;
        
        case 3:
        echo"<h1>El usuario presiono el Boton 3</h1>";
        break;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  style="background-color: black; color: white;">
    <form action="" method="post">
        <input type="submit" name="botones" value="1">
        <input type="submit" name="botones" value="2">
        <input type="submit" name="botones" value="3">
    </form>
</body>
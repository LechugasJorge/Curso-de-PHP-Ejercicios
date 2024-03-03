<?php
# If else
if ($_POST) {
    $valorA=$_POST['Valor1'];
    $valorB=$_POST['Valor2'];
if ($valorA!=$valorB) {
    echo "El valor de A es diferente al de B 🤔";
}else {
    echo "El valor de A es Igual al de B 🕵️‍♂️";
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
<body style="background-color: black; color: white;">
<h2>Calculadora Automática</h2>
    <!--Cuando no se pone Action el formulario se mantiene enel mismo fichero-->
    <form action="" method="post">
        <label for="v1">📌 Valor 1: </label>
<input type="text" name="Valor1" id="v1" placeholder="Ingresa el valor 1 🖋"><br>
        <label for="v2">📌 Valor 2: </label>
<input type="text" name="Valor2" id="v2" placeholder="Ingresa el valor 2 🖋"><br>
         <input type="submit" value="🌎 Enviar">
    </form>
</body>
</html>

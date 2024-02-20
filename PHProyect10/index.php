<?php
# Ifs Anidados
if ($_POST) {
    $valorA=$_POST['Valor1'];
    $valorB=$_POST['Valor2'];

    $Suma=$valorA+$valorB;#Suma
    $Resta=$valorA-$valorB;#Resta
    $Division=$valorA/$valorB;#División
    $Multiplicacion=$valorA*$valorB;#Multiplicación

    echo
    "<h1><br>".$Suma.
    "<br>".$Resta.
    "<br>".$Division.
    "<br>".$Multiplicacion.
    "</h1>";
    //Con ifs anidados
    if ($valorA==$valorB) {//== Comparación
        echo "A -> ".$valorA." es Igual que el valor de b -> ".$valorB;
        if ($valorA==1) {
            echo "A -> ".$valorA." es iguala a 1";
        }
        if ($valorA==2) {
            echo "A -> ".$valorA." esigual a 2 ";
        }
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
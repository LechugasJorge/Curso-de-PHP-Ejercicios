

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: black; color: white; ">
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

<?php
    #Operadores Relacionales
if ($_POST) {
    $valorA = $_POST['Valor1'];
    $valorB = $_POST['Valor2'];
    
    if ($valorA > $valorB) {
        echo "El valor A ($valorA) es mayor que el valor B ($valorB)<br>";
    }
    if ($valorA == $valorB) {
        echo "El valor A ($valorA) es igual al valor B ($valorB)<br>";
    }
    if ($valorA === $valorB) {
        echo "El valor A ($valorA) es idéntico al valor B ($valorB) en tipo y valor<br>";
    }
    if ($valorA != $valorB) {
        echo "El valor A ($valorA) no es igual al valor B ($valorB)<br>";
    }
    if ($valorA <> $valorB) {
        echo "El valor A ($valorA) no es igual al valor B ($valorB)<br>";
    }
    if ($valorA !== $valorB) {
        echo "El valor A ($valorA) no es idéntico al valor B ($valorB) en tipo o valor<br>";
    }
    if ($valorA < $valorB) {
        echo "El valor A ($valorA) es menor que el valor B ($valorB)<br>";
    }
    if ($valorA <= $valorB) {
        echo "El valor A ($valorA) es menor o igual que el valor B ($valorB)<br>";
    }
    if ($valorA >= $valorB) {
        echo "El valor A ($valorA) es mayor o igual que el valor B ($valorB)<br>";
    }
}   // Mas operadores Relacionales: ==, ===, !=, <>, !==, >, <, >=, <=
?>      
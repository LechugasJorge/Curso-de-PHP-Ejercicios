<?php
echo "<h1>Ciclo Do While en PHP 🐘</h1>";
$numeroinicial=0;
$numerolimite=10;
echo "<p>El numero final es: $numerolimite 🏁</p>
    <p>El numero Inicial es: $numeroinicial</p><h3>Inicia Ciclo ♻</h3>";
do{
    echo "<p>Número de Vuelta: $numeroinicial</p>";
    $numeroinicial++;//Incremento dentro del ciclo do while
}while($numeroinicial<=$numerolimite);
?>

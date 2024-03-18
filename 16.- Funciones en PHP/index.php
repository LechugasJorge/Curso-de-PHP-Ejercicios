<?php
echo "<h1>Funciones en PHP 🐘</h1>";
//Declaracion de la funcion
function Saludar($Nombre, $Apellido=""){
//$Nombre parametro obligatorio, $Apellido="" parametro Inicializado No obligatorio
    echo'Hola '. $Nombre." ". $Apellido. "<br/>";
}
//Llamada a la funcion
Saludar("Lechu.Dev");
Saludar("Develoteca");
Saludar("Mundo","Magico");
Saludar("Jorge","Fuentes");
Saludar("Thomas","Anderson");
Saludar("Neo");
?>

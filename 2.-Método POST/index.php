<!--Método _POST-->
<?php
// Recibimos informacion del formulario con método post
if ($_POST) {
$respuesta1=$_POST ['pregunta1'];
echo "<h1>¡¡Hola ".$respuesta1."!! 🧟‍♂️ </h1>";
}
?>
<!-- Este es mi HTML normal Desde aqui creamos un formulario y enviamos las respuestas atravez del método post-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHProject2</title>
</head>
<body style="background-color: black; color: white; ">
    <p>Este es mi primer ☝ Formulario 👨‍💻</p>
    <h2>Con uso de PHP 🐘</h2>
<!--Formulario-->
<form action="index.php" method="POST">
        <label for="p1"> 🕵️‍♂️ Nombre: </label>
    <input type="text"  id="p1" name="pregunta1" placeholder="Escribe tu nombre 🖋"><br>
    <input type="submit" value="🌎 Enviar ">
    </form>
</body>
</html>

# PHProyect 2

![Resultado](Resultado.png)

<details>
  <summary>¿Qué hace este programa?</summary>
  <p>
    Este código en PHP se encarga de recibir información de un formulario utilizando el método POST. Si se envían datos mediante el formulario, se recoge la respuesta a la pregunta1 y se muestra un saludo personalizado en un encabezado h1.
  </p>
</details>

## Information

- Title:  `PHProyect 2`
- Authors:  `Jorge Lechu-Dev`

## Install & Dependence

- Apache
- PHP

<details>
  <summary>
  <h2> Código 👨‍💻 </h2>
  </summary>

```php
<!-- Método _POST -->
<?php
// Comprobamos si se han enviado datos mediante el método POST
if ($_POST) {
    // Si hay datos recibidos, almacenamos la respuesta a la pregunta1 en la variable $respuesta1
    $respuesta1 = $_POST['pregunta1'];
    // Mostramos un saludo personalizado utilizando la respuesta recibida
    echo "<h1>¡¡Hola ".$respuesta1."!! 🧟‍♂️ </h1>";
}
?>
<!-- Este es mi HTML normal. Desde aquí creamos un formulario y enviamos las respuestas a través del método post -->
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
    <!-- Formulario -->
    <form action="index.php" method="POST">
        <label for="p1">🕵️‍♂️ Nombre:</label>
        <input type="text" id="p1" name="pregunta1" placeholder="Escribe tu nombre 🖋"><br>
        <input type="submit" value="🌎 Enviar">
    </form>
</body>
</html>
```

</details>

## Uso

1. Guarda el código PHP en un archivo con extensión `.php`, por ejemplo, `mi_pagina.php`.

2. Coloca este archivo en el directorio raíz de tu servidor web local (por ejemplo, en la carpeta `htdocs` si estás utilizando Apache).

3. Abre un navegador web y navega a la dirección donde has alojado el archivo, por ejemplo, `http://localhost/mi_pagina.php`.

4. Verás la página web generada por el script PHP.

5. ¡Experimenta modificando el código PHP y observa cómo afecta el resultado en la página web!

## Herarquia de Directorios

![alt text](image-1.png)

## Code Details

### Tested Platform

- Software

  ```txt
  OS: Windows 10 Pro for Workstations
  Sistema operativo de 64 bits
  PHP: PHP 8.2.12 (cli)
  Server version: Apache/2.4.58 (Win64)
  ```

- Hardware

```txt
  CPU: Intel(R) Core(TM) i3-7100U CPU @ 2.40GHz   2.40 GHz
  GPU: Intel(R) HD Graphics 620
```

## References

Obtenido de este curso;

 [![Obtenido de](image.png)](https://www.youtube.com/watch?v=nCB1gEkRZ1g)

<!-- Redes Sociales -->
<h2 align="center">Conéctate conmigo</h2>
<p align="center">
  
  <a href="https://www.linkedin.com/in/jorgelechugas/">
    <img src="https://img.shields.io/badge/LinkedIn-%230077B5?style=for-the-badge&logo=LinkedIn&logoColor=white" alt="LinkedIn">
</a>
<!-- Twitter -->
<a href="https://twitter.com/Lechu_Dev">
  <img src="https://img.shields.io/badge/Twitter-%231DA1F2?style=for-the-badge&logo=Twitter&logoColor=white" alt="Twitter">
</a>
  <!-- Twitch -->
  <a href="https://www.twitch.tv/lechugaslettuches">
    <img src="https://img.shields.io/badge/Twitch-%239146FF?style=for-the-badge&logo=Twitch&logoColor=white" alt="Twitch">
  </a>

  <!-- YouTube -->
  <a href="https://www.youtube.com/channel/UCCVH3mvZFNs9vZQP_3PL_jw">
    <img src="https://img.shields.io/badge/YouTube-%23FF0000?style=for-the-badge&logo=YouTube&logoColor=white" alt="YouTube">
  </a>
<a href="https://www.youtube.com/channel/UCA-UArQPMiba7YgPw7OsgHg">
    <img src="https://img.shields.io/badge/YouTube-%23FF0000?style=for-the-badge&logo=YouTube&logoColor=white" alt="YouTube">
  </a>

<!-- GitHub -->
<a href="https://github.com/usuario">
  <img src="https://img.shields.io/badge/GitHub-%23181717?style=for-the-badge&logo=GitHub&logoColor=white" alt="GitHub">
</a>

  <!-- Facebook -->
  <a href="https://www.facebook.com/profile.php?id=61550480867105">
    <img src="https://img.shields.io/badge/Facebook-%231877F2?style=for-the-badge&logo=Facebook&logoColor=white" alt="Facebook">
  </a>
  <!-- Instagram -->
  <a href="https://www.instagram.com/lechugasskate/">
    <img src="https://img.shields.io/badge/Instagram-%23E4405F?style=for-the-badge&logo=Instagram&logoColor=white" alt="Instagram">
  </a>

</p>

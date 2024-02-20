# PHProyect 3

<details>
  <summary>¿Qué hace este programa?</summary>
  <p>
    Este código PHP verifica si se han enviado datos mediante el método GET. Si se han enviado datos, recoge la respuesta a 'p1' y muestra un saludo personalizado en un encabezado h1.
  </p>

![alt text](Formulario.png)
![alt text](Resultado.png)

</details>

## Information

- Title:  `PHProyect 3`
- Authors:  `Jorge Lechu-Dev`

## Install & Dependence

- Apache
- PHP

<details>
  <summary>
  <h2> Código 👨‍💻 </h2>
  </summary>

```php
<?php
// Comprobamos si se han enviado datos mediante el método GET
if ($_GET) {
    // Si hay datos recibidos, almacenamos la respuesta a 'p1' en la variable $r1
    $r1 = $_GET['p1'];
    
    // Mostramos un saludo personalizado utilizando la respuesta recibida
    echo "<h1>¡¡Hola ✌ ".$r1."!! 🤖</h1>";
}
?>
```

</details>

## Uso

1. Guarda el código PHP en un archivo con extensión `.php`, por ejemplo, `mi_pagina.php`.

2. Coloca este archivo en el directorio raíz de tu servidor web local (por ejemplo, en la carpeta `htdocs` si estás utilizando Apache).

3. Abre un navegador web y navega a la dirección donde has alojado el archivo, por ejemplo, `http://localhost/mi_pagina.php`.

4. Verás la página web generada por el script PHP, que incluirá un título, un subtítulo y un párrafo con mensajes estáticos.

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

# 16.- Funciones en PHP🐘

<details>  <summary><h3> ¿Qué hace este programa? 🤔</h3> </summary>

## Funciones en PHP

Las funciones en PHP son bloques de código que realizan una tarea específica y pueden ser reutilizadas en diferentes partes de un programa. Estas funciones permiten modularizar el código, lo que significa dividirlo en partes más pequeñas y manejables, lo cual facilita el mantenimiento y la depuración del código.

## Declaración de Funciones

```php
function nombre_de_la_funcion($parametro1, $parametro2, ...) {
    // Código que realiza la tarea deseada
    return $resultado; // Opcional: devuelve un valor si es necesario
}
```

- function: Palabra clave para declarar una función.
- nombre_de_la_funcion: Nombre asignado a la función.
- $parametro1, $parametro2, ...: Parámetros opcionales que puede aceptar la función.
- {}: Encierra el cuerpo de la función, donde se escribe el código que realiza la tarea deseada.
- return $resultado;: Opcional; devuelve un valor al final de la función si es necesario.

Utilización de Funciones:
Una vez definida, una función puede ser utilizada en cualquier parte del programa llamándola por su nombre seguido de paréntesis, pasando los argumentos necesarios si la función los acepta.

Ejemplo:

```php
nombre_de_la_funcion($valor1, $valor2);

```

![alt text](image-1.png)

</details>

## Information 🗂

- Title:  `Funciones en PHP 🐘`
- Recreación de código por:
  - `Jorge A. Fuentes Jiménez` 👨‍💻 [@Lechu-Dev](https://github.com/LechugasJorge)

## Install & Dependence

- [![Apache](https://img.shields.io/badge/Apache-HTTP_Server-557697?style=flat-square&logo=apache)](https://httpd.apache.org/)
- [![PHP](https://img.shields.io/badge/PHP-Hypertext_Preprocessor-777BB4?style=flat-square&logo=php)](https://www.php.net/)
- [![Visual Studio Code](https://img.shields.io/badge/Visual_Studio_Code-007ACC?style=flat-square&logo=visual-studio-code)](https://code.visualstudio.com/)

<details>
  <summary>
  <h2> Código 👨‍💻 </h2>
  </summary>

```php
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
```

Se puede copiar y pegar

</details>
<details>
  <summary>

## Uso

  ¡Experimenta con el código y aprende!

</summary>

1. Descarga y guarda el código PHP en un archivo con extensión `.php`, por ejemplo, `mi_pagina.php`.

2. Coloca este archivo en el directorio raíz de tu servidor web local (por ejemplo, en la carpeta `htdocs` si estás utilizando Apache).

3. Abre un navegador web y navega a la dirección donde has alojado el archivo, por ejemplo, `http://localhost/mi_pagina.php`.

4. Verás la página web generada por el script PHP, que incluirá un título, un subtítulo y un párrafo con mensajes estáticos.

5. ¡Experimenta modificando el código PHP y observa cómo afecta el resultado en la página web!

</details>

## 🟢 Jerarquía de Directorios

![alt text](image-2.png)

## Mi Equipo de Computo 🖥

- Software 👾

  ```txt
  OS: Windows 10 Pro for Workstations
  Sistema operativo de 64 bits
  PHP: PHP 8.2.12 (cli)
  Server version: Apache/2.4.58 (Win64)
  ```

- Hardware 🖥

```txt
  CPU: Intel(R) Core(TM) i3-7100U CPU @ 2.40GHz   2.40 GHz
  GPU: Intel(R) HD Graphics 620
```

## References

Obtenido de;

`CURSO php desde cero`

 [![Obtenido de](image.png)](https://www.youtube.com/watch?v=nCB1gEkRZ1g)

Muchas Gracias al canal

- [@Develoteca - Oscar Uh](https://www.youtube.com/@Develoteca)

<!-- Redes Sociales -->
<h2 align="center">Conécta conmigo</h2>
<p align="center">
  <a href="https://www.linkedin.com/in/jorgelechugas/">
    <img src="https://img.shields.io/badge/LinkedIn-%230077B5?style=for-the-badge&logo=LinkedIn&logoColor=white" alt="LinkedIn"></a>
<!-- Twitter -->
<a href="https://twitter.com/Lechu_Dev">
  <img src="https://img.shields.io/badge/Twitter-%231DA1F2?style=for-the-badge&logo=Twitter&logoColor=white" alt="Twitter"></a>
  <!-- Twitch -->
  <a href="https://www.twitch.tv/lechugaslettuches">
    <img src="https://img.shields.io/badge/Twitch-%239146FF?style=for-the-badge&logo=Twitch&logoColor=white" alt="Twitch">
  </a>
</p><p align="center">
  <!-- YouTube -->
  <a href="https://www.youtube.com/channel/UCCVH3mvZFNs9vZQP_3PL_jw">
    <img src="https://img.shields.io/badge/YouTube-%23FF0000?style=for-the-badge&logo=YouTube&logoColor=white" alt="YouTube">
  </a>
<a href="https://www.youtube.com/channel/UCA-UArQPMiba7YgPw7OsgHg">
    <img src="https://img.shields.io/badge/YouTube-%23FF0000?style=for-the-badge&logo=YouTube&logoColor=white" alt="YouTube">
  </a>
</p><p align="center">
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
<style>
  /* Estilos para la animación */
  details {
    background-color: #222222;
    padding: 10px;
    border: 1px solid #454545;
    border-radius: 5px;
    margin-bottom: 10px;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
  }
  summary {
    cursor: pointer;
    user-select: none; /* Evitar la selección de texto */
    transition: color 0.3s ease-out;
  }
  summary:hover {
    color: #007bff; /* Cambiar color al pasar el mouse */
  }
</style>

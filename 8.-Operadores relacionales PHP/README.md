# 8.- Operadores relacionales PHP  🐘

<details>  <summary><h3> ¿Qué hace este programa? 🤔</h3> </summary>
  <p>
 Los operadores relacionales en PHP se utilizan para comparar dos valores y determinar la relación entre ellos. Aquí tienes una lista de los operadores relacionales y lo que hacen:

- `==`: Comprueba si dos valores son iguales.
- `===`: Comprueba si dos valores son idénticos tanto en valor como en tipo de datos.
- `!=` o `<>`: Comprueba si dos valores no son iguales.
- `!==`: Comprueba si dos valores no son idénticos tanto en valor como en tipo de datos.
- `>`: Comprueba si el primer valor es mayor que el segundo.
- `<`: Comprueba si el primer valor es menor que el segundo.
- `>=`: Comprueba si el primer valor es mayor o igual que el segundo.
- `<=`: Comprueba si el primer valor es menor o igual que el segundo.

Sobre el programa proporcionado, parece ser una calculadora simple que compara dos valores ingresados por el usuario y muestra un mensaje si el primer valor es mayor que el segundo. Este es el flujo del programa:

1. Se utiliza el método POST para obtener los valores ingresados por el usuario.
2. Se almacenan los valores en las variables `$valorA` y `$valorB`.
3. Se verifica si `$valorA` es mayor que `$valorB` utilizando el operador relacional `>`.
4. Si la condición es verdadera, se muestra un mensaje indicando que `$valorA` es mayor que `$valorB`.

  </p>

![alt text](image-1.png)

</details>

## Information 🗂

- Title:  `Operadores relacionales PHP 🐘`
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

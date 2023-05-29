<?php
    /**
     * ! 1. (5) INTRODUCCIÓN PHP
     * *Que es PHP?
     * 
     * PHP es un lenguaje de programación para crear aplicaciones 
     * web dinámicas en el servidor.
     * Permite generar contenido personalizado en
     * tiempo real y se integra fácilmente con HTML.
     * Es ampliamente utilizado debido a su 
     * facilidad de uso y compatibilidad con diferentes
     * sistemas operativos y servidores web.
     * 
     * !! 1.1. (5) ESTRUCTURA BÁSICA DE UN PROYECTO PHP
     * ?Es importante tener en cuenta que los proyectos PHP !REQUIEREN¡
     * ??ser almacenados en el documentRoot del servidor web.
     * *El documentRoot es la carpeta principal del servidor Apache.
     * @example: /var/www/html (Linux)
     * @example: C:\xampp\htdocs (Windows)
     * 
     * !!ESTRUCTURA BÁSICA DE UN PROYECTO WEB/PHP
     * *CSS
     * ? ESTILOS (Cascading Style Sheets)
     * *JS
     * ? CÓDIGO JAVASCRIPT (JavaScript)
     * *IMG
     * ? IMÁGENES (Images)
     * *SCRIPTS
     * ? CÓDIGO PHP (PHP)
     * *UPLOADS
     * ?(Archivos subidos por los usuarios)
     * *INDEX.PHP (Página principal)
     * ?(Página principal del proyecto)
     * 
     * !? UN ARCHIVO PHP CONTIENE LA SIGUIENTE SINTAXIS
     * ?             <?php ..(código).. ?>
     * 
     * ! 2. (6) FUNCIONES DE SALIDA
     * *echo
     * Imprime uno o más valores separados por comas.
     * ?echo "Hola Mundo";
     * 
     * *printf
     * Imprime un texto con formato.
     * ??$texto = "Mundo";
     * ?printf("Hola %s", $texto);'
     * !!!! %s es un marcador de posición para una cadena de texto. 
     * @return string printf "Hola Mundo"
     * 
     * *sprintf
     * Devuelve un texto con formato.
     * ??$texto = "Mundo";
     * ?$saludo = sprintf("Hola %s", $texto);
     * !!!! solamente devuelve el dato más no lo imprime.
     * 
     * *var_dump
     * Imprime el tipo de dato y el valor de una variable.
     * ?$texto = "Mundo";
     * ?var_dump($texto);
     * @return mixed var_dump "string(5) "Mundo""
     * 
     *  ! 3. (7) VARIABLES Y CONSTANTES
     * *Variables 
     * se definen como un signo $ antes del nombre de la variable.
     * ?$nombre = "Juan";
     * 
     * *Constantes
     * se definen con la función define().
     * ?define("PI", 3.1416);
     * 
     * !! 3.1. (7) TIPOS DE DATOS
     * 
     * !!! |°J°| SIEMPRE COLOCAR EL TIPO DE DATO DE LA VARIABLE.
     * *Enteros
     * Son números enteros sin decimales.
     * ?$numero = 200;
     * 
     * *Flotantes
     * Son números con decimales.
     * ?$numero = 200.5;
     * 
     * *Cadenas de texto
     * Son cadenas de texto.
     * ?$texto = "Hola Mundo";
     * 
     * *Booleanos
     * Son valores de verdadero o falso.
     * ?$verdadero = true;
     * ?$falso = false;
     * 
     * *Nulos
     * Son valores nulos.
     * ?$nulo = null;
     * 
     * *Arrays
     * Son arreglos de datos.
     * ?$array = [];
     * 
     * *Objetos
     * Son instancias de una clase.
     * ?$objeto = new stdClass();
     * 
     * *Recursos
     * Son referencias a recursos externos.
     * ?$archivo = fopen("archivo.txt", "r");
     * @method fopen funciona para abrir un archivo.
     * 
     */
?>
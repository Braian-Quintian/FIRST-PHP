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
     * !! 4. (8) TIPOS DE DATOS
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
     *
     *
     * !Declare strict types sirve para que php sea mas estricto 
     * *con los tipos de datos en las funciones, programacion orientada a objetos
     * *arrays, etc.
     * *Si se coloca en 1, php sera mas estricto
     * *Si se coloca en 0, php sera menos estricto
     * ?? declare( strict_types = 1 ); 
     * 
     * 
     * ! 5. (9) OPERADORES
     * 
     * ! 5.1 (9) OPERADORES ARITMÉTICOS
     * *Suma
     * ?$suma = 2 + 2;
     * 
     * *Resta
     * ?$resta = 2 - 2;
     * 
     * *Multiplicación
     * ?$multiplicacion = 2 * 2;
     * 
     * *División
     * ?$division = 2 / 2;
     * 
     * *Módulo
     * ?$modulo = 2 % 2;
     * 
     * *Exponencial
     * ?$exponencial = 2 ** 2;
     * 
     * !! 5.2. (9) OPERADORES DE ASIGNACIÓN
     * *Asignación
     * ?$numero = 2;
     * 
     * !! 5.3. (9) OPERADORES DE ARRAY
     * *Unión
     * ?$union = [1, 2] + [3, 4];
     * 
     * *Igualdad
     * ?$igualdad = [1, 2] == [3, 4];
     * 
     * *Identidad
     * ?$identidad = [1, 2] === [3, 4];
     * 
     * *Desigualdad
     * ?$desigualdad = [1, 2] != [3, 4];
     * 
     * *Desigualdad
     * ?$desigualdad = [1, 2] <> [3, 4];
     * 
     * *No identidad
     * ?$noIdentidad = [1, 2] !== [3, 4];
     * 
     * !! 5.4 (9) BITWISE OPERATORS
     * *And
     * ?$and = [1, 2] & [3, 4];
     * 
     * *Xor
     * ?$xor = [1, 2] ^ [3, 4];
     * 
     * *Or
     * ?$or = [1, 2] | [3, 4];
     * 
     * *Shift left
     * ?$shiftLeft = [1, 2] << [3, 4];
     * 
     * *Shift right
     * ?$shiftRight = [1, 2] >> [3, 4];
     * 
     * *Not
     * ?$not = ~[1, 2];
     * 
     * !! 5.5. (9) OPERADORES DE COMPARACIÓN
     * *Igual que
     * ?$igualQue = [1, 2] == [3, 4];
     * 
     * *Idéntico que
     * ?$identicoQue = [1, 2] === [3, 4];
     * 
     * *Diferente que
     * ?$diferenteQue = [1, 2] != [3, 4];
     * 
     * *No identico que
     * ?$noIdenticoQue = [1, 2] !== [3, 4];
     * 
     * *No igual que
     * ?$noIgualQue = [1, 2] <> [3, 4];
     * 
     * *Mayor que
     * ?$mayorQue = [1, 2] > [3, 4];
     * 
     * *Menor que
     * ?$menorQue = [1, 2] < [3, 4];
     * 
     * *Mayor o igual que
     * ?$mayorOIgualQue = [1, 2] >= [3, 4];
     * 
     * *Menor o igual que
     * ?$menorOIgualQue = [1, 2] <= [3, 4];
     * 
     * *Spaceship
     * se utiliza para comparar dos expresiones y devolver un valor negativo
     * cero o positivo según la relación entre ellas.
     * / -1 Si Izquierda es menor que Derecha
     * / 0 Si Izquierda es igual a Derecha
     * / 1 Si Izquierda es mayor que Derecha
     * ?$spaceship = [1, 2] <=> [3, 4];
     * 
     * !! 5.6. (9) EXECUTION OPERATORS
     * *Ejecución
     * ?$ejecucion = `ls -la`; 
     * 
     * !! 5.7. (9) OPERADORES DE CONTROL DE ERRORES
     * @ = at sign
     * *Control de errores
     * control de errores, se utiliza para suprimir los mensajes de error
     * ?$controlErrores = @file_get_contents("archivo.txt");
     * 
     * !! 5.8. (9) OPERADORES DE INCREMENTO/DECREMENTO
     * *Pre-incremento
     * ?$preIncremento = ++$numero;
     * 
     * *Post-incremento
     * ?$postIncremento = $numero++;
     * 
     * *Pre-decremento
     * ?$preDecremento = --$numero;
     * 
     * *Post-decremento
     * ?$postDecremento = $numero--;
     * 
     * ! 5.9. (9) OPERADORES LÓGICOS
     * *And
     * ?$and = true && false;/*
     * 
     * *Or
     * ?$or = true || false;
     * 
     * *Xor
     * ?$xor = true xor false;
     * 
     * *And lógico
     * ?$andLogico = true and false;
     * 
     * *Or lógico
     * ?$orLogico = true or false;
     * 
     * *XOr lógico
     * ?$xorLogico = true xor false;
     * 
     * *Not
     * ?$not = !true;
     * 
     * 
     * ! 6. (10) Arreglos, Arreglos asociativos y funciones para arreglos
     * 
     * * Convertir el texto del array en un json
     * ? header('Content-Type: application/json');
     * 
     * * Array indexado
     *  un arreglo indexado (los índices son números)
     * @var array $nombres
     * ?$nombres = array('Juan', 'Pedro', 'Luis', 'Carlos');
     * ?print_r($nombres);
     * 
     * * Array asociativo
     * un arreglo asociativo (los índices son nombres)
     * @var array $edades
     * ? $edades = array(
     * ?'Juan' => 20,
     * ?'Pedro' => 21,
     * ?'Luis' => 22,
     * ?'Carlos' => 23);
     * ?'Roberto' => 24);
     * ??print_r($edades);
     * 
     * * Array multidimensional
     * un arreglo multidimensional (un arreglo dentro de otro arreglo)
     * @var array $personas
     * 
     * ?$personas = array(
     * ?"Juan" => array('Ciudad' => 'Barcelona', 'Pais' => 'España', 'edad' => 35),
     * ?"Pedro" =>array('Ciudad' => 'París', 'Pais' => 'Francia', 'edad' => 37),
     * ?"Luis" =>array('Ciudad' => 'Londres', 'Pais' => 'Reino Unido', 'edad' => 32),
     * ?"Carlos" =>array('Ciudad' => 'Berlín', 'Pais' => 'Alemania', 'edad' => 41),
     * ?"Roberto" =>array('Ciudad' => 'Roma', 'Pais' => 'Italia', 'edad' => 39)
     * ?);
     * 
     * *Ejemplo de como insertar un dato nuevo al array Multidimensional
     * ?$personas["Pedro"]["Altura"] = 1.60;
     * ?print_r($personas);
     *
     * *Ejemplo para acceder a un dato del array Multidimensional
     *  ?echo $personas["Pedro"]["Pais"];
     * 
     */
?>
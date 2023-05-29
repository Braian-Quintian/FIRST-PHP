<?php
    /**
     * DATOS
     * *Variables
     * ?$nombre = "Juan";
     * 
     * *Constantes
     * ?define("NOMBRE", "Juan");
     */
    /**
     * Funciones de salida
     * *echo
     * ?echo "Hola mundo";
     * 
     * *printf
     * ?$texto = "Mundo";
     * ?printf("Hola %s", $texto);
     * 
     * ??%S es para cadenas de texto insertar variables
     * 
     * *sprintf
     * ?$texto = "Mundo";
     * ?$mensaje = sprintf("Hola %s", $texto);
     * 
     * !var_dump sirve para mostrar el tipo de dato y el valor de la variable
     * 
     * ?define("MENSAJE", "Hola mundo");
     * ?var_dump(MENSAJE)
     * @return string (10) "Hola mundo"
     */
    /**
     * Tipos de datos
     * *Boolean
     * ?$logeado = true;
     * ? var_dump($logeado);
     * 
     * *Integer
     * ?$numero = 200;
     * ?var_dump($numero);
     * 
     * *Float
     * ?$float = 200.5;
     * ?var_dump($float);
     * 
     * *String
     * ?$nombre = "Juan";
     * ?var_dump($nombre);
     * 
     * *Array
     * ?$array = [];
     * ?var_dump($array);
     */
    /**
     * !Colocar el tipo de dato siempre
     * *string
     * *integer
     * *float
     * *boolean
     * *array
     * *object
     * *null
     * *resource
     * ?? $nombre = (string) "Juan";
     */
    /**
     * !Declare strict types sirve para que php sea mas estricto 
     * *con los tipos de datos en las funciones, programacion orientada a objetos
     * *arrays, etc.
     * *Si se coloca en 1, php sera mas estricto
     * *Si se coloca en 0, php sera menos estricto
     * ?? declare( strict_types = 1 ); 
     */
?>
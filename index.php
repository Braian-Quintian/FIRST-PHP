<?php
    /**
     * ! 1. (5) INTRODUCCIÓN PHP
     * *Que es PHP?
     * 
     * | PHP es un lenguaje de programación para crear aplicaciones 
     * | web dinámicas en el servidor.
     * | Permite generar contenido personalizado en
     * | tiempo real y se integra fácilmente con HTML.
     * | Es ampliamente utilizado debido a su 
     * | facilidad de uso y compatibilidad con diferentes
     * | sistemas operativos y servidores web.
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
     * | Imprime un texto con formato.
     * ??$texto = "Mundo";
     * ?printf("Hola %s", $texto);'
     * !!!! %s es un marcador de posición para una cadena de texto. 
     * @return string printf "Hola Mundo"
     * 
     * *sprintf
     * | Devuelve un texto con formato.
     * ??$texto = "Mundo";
     * ?$saludo = sprintf("Hola %s", $texto);
     * !!!! solamente devuelve el dato más no lo imprime.
     * 
     * *var_dump
     * | Imprime el tipo de dato y el valor de una variable.
     * ?$texto = "Mundo";
     * ?var_dump($texto);
     * @return mixed var_dump "string(5) "Mundo""
     * 
     *  ! 3. (7) VARIABLES Y CONSTANTES
     * *Variables 
     * | se definen como un signo $ antes del nombre de la variable.
     * ?$nombre = "Juan";
     * 
     * *Constantes
     * | se definen con la función define().
     * ?define("PI", 3.1416);
     * 
     * !! 4. (8) TIPOS DE DATOS
     * 
     * !!! |°J°| SIEMPRE COLOCAR EL TIPO DE DATO DE LA VARIABLE.
     * *Enteros
     * | Son números enteros sin decimales.
     * ?$numero = 200;
     * 
     * *Flotantes
     * | Son números con decimales.
     * ?$numero = 200.5;
     * 
     * *Cadenas de texto
     * | Son cadenas de texto.
     * ?$texto = "Hola Mundo";
     * 
     * *Booleanos
     * | Son valores de verdadero o falso.
     * ?$verdadero = true;
     * ?$falso = false;
     * 
     * *Nulos
     * | Son valores nulos.
     * ?$nulo = null;
     * 
     * *Arrays
     * |Son arreglos de datos.
     * ?$array = [];
     * 
     * *Objetos
     * | Son instancias de una clase.
     * ?$objeto = new stdClass();
     * 
     * *Recursos
     * | Son referencias a recursos externos.
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
     * | se utiliza para comparar dos expresiones y devolver un valor negativo
     * | cero o positivo según la relación entre ellas.
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
     * | control de errores, se utiliza para suprimir los mensajes de error
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
     * | un arreglo indexado (los índices son números)
     * @var array $nombres
     * ?$nombres = array('Juan', 'Pedro', 'Luis', 'Carlos');
     * ?print_r($nombres);
     * 
     * * Array asociativo
     * | un arreglo asociativo (los índices son nombres)
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
     * | un arreglo multidimensional (un arreglo dentro de otro arreglo)
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
     * !!6.1 (10) FUNCIONES PARA ARREGLOS
     * 
     * *array_flip()
     * | Intercambia todas las claves de un array con sus valores asociados devolviendo un array cambiado
     * ++ array_flip(array $array): array
     * / $entrada = array("Avion", "Carro", "Moto");
     * / $intercambio = array_flip($entrada);
     * / print_r($intercambio);
     * - Array
     * -(
     * - [naranjas] => 0
     * - [manzanas] => 1
     * - [peras] => 2
     * -)
     * *array_fill()
     * | Rellena un array con un valor especificado
     * °Arroja un E_WARNING si num es menor que cero.
     * ++ array_fill(int $start_index, int $num, mixed $value): array
     * / $a = array_fill(5, 6, 'manzanas');
     * / $b = array_fill(-2, 4, 'fresa');
     * / print_r($a);
     * / print_r($b);
     * - Array
     * -(
     * - [5] => manzanas
     * - [6] => manzanas
     * - [7] => manzanas
     * - [8] => manzanas
     * - [9] => manzanas
     * - [10] => manzanas
     * -)
     * - Array
     * -(
     * - [-2] => fresa
     * - [0] => fresa
     * - [1] => fresa
     * - [2] => fresa
     * -)
     * 
     * *array_filter()
     * | Filtra elementos de un array usando una función de devolución de llamada
     * ° Devuelve el array filtrado.
     * ++ array_filter(array $array, ?callable $callback = null, int $flag = 0): array
     * /function impar($var)
     * /{
     * /    // devuelve si el valor es impar
     * /    return ($var & 1);
     * /}
     * 
     * /function par($var)
     * /{
     * /    // devuelve si el valor es par
     * /    return (!($var & 1));
     * /}
     * 
     * /$array1 =['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
     * /$array2 = [6, 7, 8, 9, 10, 11, 12];
     * 
     * /echo "impar:\n";
     * /print_r(array_filter($array1, "impar"));
     * /echo "par:\n";
     * /print_r(array_filter($array2, "par"));
     * - Array
     * -(
     * - [a] => 1
     * - [c] => 3
     * - [e] => 5
     * -)
     * - Array
     * -(
     * - [0] => 6
     * - [2] => 8
     * - [4] => 10
     * - [6] => 12
     * -)
     * 
     * *array_map()
     * | Aplica la función dada a cada elemento de la matriz dada
     * ° Devuelve un array que contiene todos los elementos de array1 después de aplicar la función callback a cada uno de ellos.
     * ++ array_map(callable $callback, array $array, array ...$arrays): array
     * /function cuadrado($n)
     * /{
     * /    return ($n * $n);
     * /}
     * - Array
     * -(
     * - [0] => 1
     * - [1] => 4
     * - [2] => 9
     * - [3] => 16
     * - [4] => 25
     * -)
     * 
     * *array_reduce()
     * | Reduce un array a un solo valor aplicando una función de devolución de llamada
     * ° Devuelve el valor reducido.
     * ++ array_reduce(array $array, callable $callback, mixed $initial = null): mixed}
     * /function suma($carry, $item)
     * /{
     * /    $carry += $item;
     * /    return $carry;
     * /}
     * /function producto($carry, $item)
     * /{
     * /    $carry *= $item;
     * /    return $carry;
     * /}
     * /$a = [1, 2, 3, 4, 5];
     * /$x = array_reduce($a, "suma"); // calcula la suma de la matriz
     * /$y = array_reduce($a, "producto", 10); // calcula el producto de la matriz, con un valor inicial de 10
     * /echo $x . "\n";
     * /echo $y . "\n";
     * - 15
     * - 1200
     * 
     * *array_key_exists()
     * | Verifica si el índice o clave dada existe en el array
     * ° Devuelve TRUE si el índice dado existe en el array, de lo contrario devuelve FALSE.
     * ++ array_key_exists(mixed $key, array $array): bool
     * /$array = array("first" => 1, "second" => 4);
     * /var_dump(array_key_exists("first", $array));
     * /var_dump(array_key_exists("third", $array));
     * - bool(true)
     * - bool(false)
     * 
     * *in_array()
     * | Comprueba si un valor existe en un array
     * ° Devuelve TRUE si needle se encuentra en el array, FALSE de lo contrario.
     * ++ in_array(mixed $needle, array $haystack, bool $strict = false): bool
     * /$os = array("Mac", "NT", "Irix", "Linux");
     * /if (in_array("Irix", $os)) {
     * /    echo "Got Irix";
     * /}
     * - Got Irix
     * 
     * *array_rand()
     * | Elije uno o más elementos aleatorios de un array
     * ° Si se especifica el parámetro num_req, esta función devolverá un array de claves aleatorias num_req en lugar de una sola clave.
     * ++ array_rand(array $array, int $num_req = 1): int|string|array
     * /$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
     * /$rand_keys = array_rand($input, 2);
     * /echo $input[$rand_keys[0]] . "\n";
     * /echo $input[$rand_keys[1]] . "\n";
     * - Trinity
     * - Morpheus
     *  
     * *array_unique()
     * | Elimina valores duplicados de un array
     * ° Devuelve el array sin duplicados.
     * ++ array_unique(array $array, int $flags = SORT_STRING): array
     * /$input = array("a" => "verde", "rojo", "b" => "verde", "azul", "rojo");
     * /$result = array_unique($input);
     * /print_r($result);
     * - Array
     * -(
     * - [a] => verde
     * - [0] => rojo
     * - [1] => azul
     * -)
     * 
     * *array_intersect()
     * | Calcula la intersección de arrays
     * ° Devuelve un array que contiene todos los valores de array1 que están presentes en todos los argumentos.
     * ++ array_intersect(array $array1, array $array2, array ...$arrays): array
     * /$array1 = array("a" => "verde", "rojo", "azul");
     * /$array2 = array("b" => "verde", "amarillo", "rojo");
     * /$result = array_intersect($array1, $array2);
     * /print_r($result);
     * - Array
     * -(
     * - [a] => verde
     * - [0] => rojo
     * -)
     * 
     * *array_diff()
     * | Calcula la diferencia entre arrays
     * ° Devuelve un array que contiene todos los valores de array1 que no están presentes en ninguno de los demás arrays.
     * ++ array_diff(array $array1, array $array2, array ...$arrays): array
     * /$array1 = array("a" => "verde", "rojo", "azul", "rojo");
     * /$array2 = array("b" => "verde", "amarillo", "rojo");
     * /$result = array_diff($array1, $array2);
     * /print_r($result);
     * - Array
     * -(
     * - [2] => azul
     * -)
     * 
     * *array_push()
     * | Inserta uno o más elementos al final de un array
     * ° Devuelve el número de elementos del array después de la inserción.
     * ++ array_push(array &$array, mixed ...$values): int
     * /$stack = array("naranja", "plátano");
     * /array_push($stack, "manzana", "frambuesa");
     * /print_r($stack);
     * - Array
     * -(
     * - [0] => naranja
     * - [1] => plátano
     * - [2] => manzana
     * - [3] => frambuesa
     * -)
     * 
     * *array_pop()
     * | Extrae el último elemento del final del array
     * °°Esta función arrojará unerror de nivel E_WARNING cuando se invoca con algo distinto de un array.
     * ° Devuelve el valor del último elemento del array, o FALSE si está vacío.
     * ++ array_pop(array &$array): mixed
     * /$stack = array("naranja", "plátano", "manzana", "frambuesa");
     * /$fruit = array_pop($stack);
     * /print_r($stack);
     * - Array
     * -(
     * - [0] => naranja
     * - [1] => plátano
     * - [2] => manzana
     * -)
     * 
     * *array_reverse()
     * | Devuelve un array con los elementos en orden inverso
     * ° Devuelve el array resultante.
     * ++ array_reverse(array $array, bool $preserve_keys = false): array
     * /$input  = array("php", 4.0, array("verde", "rojo"));
     * /$reversed = array_reverse($input);
     * /$preserved = array_reverse($input, true);
     * /print_r($input);
     * /print_r($reversed);
     * /print_r($preserved);
     * - Array
     * -(
     * - [0] => php
     * - [1] => 4
     * - [2] => Array
     * -    (
     * -        [0] => verde
     * -        [1] => rojo
     * -    )
     * -)
     * - Array
     * -(
     * -    [0] => Array
     * -        (
     * -        [0] => verde
     * -        [1] => rojo
     * -        )
     * -
     * -    [1] => 4
     * -    [2] => php
     * -)
     * - Array
     * -(
     * -    [2] => Array
     * -     (
     * -        [0] => verde
     * -        [1] => rojo
     * -     )
     * - 
     * - [1] => 4
     * - [0] => php
     * -)
     * 
     * *array_sum()
     * | Calcula la suma de los valores de un array
     * ° Devuelve la suma de valores como un integer o float; 0 si el array está vacío.
     * ++ array_sum(array $array): int|float
     * /$a = array(2, 4, 6, 8);
     * /echo "sum(a) = " . array_sum($a) . "\n";
     * - sum(a) = 20
     * 
     * *array_product()
     * | Calcula el producto de los valores de un array
     * ° Devuelve el producto de valores como un integer o float; 1 si el array está vacío.
     * ++ array_product(array $array): int|float
     * /$a = array(2, 4, 6, 8);
     * /echo "product(a) = " . array_product($a) . "\n";
     * - product(a) = 384
     * 
     * *array_chunk()
     * | Divide un array en fragmentos de tamaño especificado
     * ° Devuelve un array multidimensional indexado, empezando por índice numérico cero, con cada dimensión conteniendo fragmentos del array de tamaño size.
     * ++ array_chunk(array $array, int $size, bool $preserve_keys = false): array
     * /$input_array = array('a', 'b', 'c', 'd', 'e');
     * /print_r(array_chunk($input_array, 2));
     * /print_r(array_chunk($input_array, 2, true));
     * - Array
     * -(
     * -    [0] => Array
     * -        (
     * -            [0] => a
     * -            [1] => b
     * -        )
     * -
     * -    [1] => Array
     * -        (
     * -            [0] => c
     * -            [1] => d
     * -        )
     * -
     * -    [2] => Array
     * -        (
     * -            [0] => e
     * -        )
     * -)
     * - Array
     * -(
     * -    [0] => Array
     * -        (
     * -            [0] => a
     * -            [1] => b
     * -        )
     * -
     * -    [1] => Array
     * -        (
     * -            [2] => c
     * -            [3] => d
     * -        )
     * -
     * -    [2] => Array
     * -        (
     * -            [4] => e
     * -        )
     * -)
     * 
     * *array_keys()
     * | Devuelve todas las claves o un conjunto de claves de un array
     * ° Devuelve un array con todas las claves del array array.
     * ++ array_keys(array $array, mixed $search_value = null, bool $strict = false): array
     * /$array = array(0 => 100, "color" => "rojo");
     * /print_r(array_keys($array));
     * - Array
     * -(
     * -    [0] => 0
     * -    [1] => color
     * -)
     * 
     * *array_values()
     * | Devuelve todos los valores de un array
     * ° Devuelve un array numérico con los valores del array array.
     * ++ array_values(array $array): array
     * /$array = array("size" => "XL", "color" => "oro");
     * /print_r(array_values($array));
     * - Array
     * -(
     * -    [0] => XL
     * -    [1] => oro
     * -)
     * 
     * *array_walk()
     * | Aplica una función dada a cada miembro de un array
     * ° Devuelve TRUE en caso de éxito o FALSE en caso de error.
     * ++ array_walk(array &$array, callable $callback, mixed $userdata = null): bool
     * /function show_Spanish($n, $m)
     * /{
     * /    echo "La palabra $n tiene $m letras\n";
     * /}
     * /$a = array('Manzana', 'Banana', 'Naranja', 'Fresa');
     * /array_walk($a, 'show_Spanish', 'es');
     * - La palabra Manzana tiene 7 letras
     * - La palabra Banana tiene 6 letras
     * - La palabra Naranja tiene 7 letras
     * - La palabra Fresa tiene 5 letras
     * 
     * 
     * ! 7. (11) ISSET() - EMPTY() - UNSET()
     * *isset()
     * | Determina si una variable está definida y no es NULL
     * ° Devuelve TRUE si var existe y tiene un valor distinto de NULL, FALSE de lo contrario.
     * ++ isset(mixed $var, mixed ...$vars): bool
     * /$var = '';
     * /var_dump(isset($var));
     * /var_dump(isset($var, $var2));
     * - bool(true)
     * - bool(false)
     * 
     * *empty()
     * | Determina si una variable está vacía
     * ° Devuelve FALSE si var existe y tiene un valor no vacío, distinto de cero. De otro modo devuelve TRUE.
     * ++ empty(mixed $var): bool
     * /$var = 0;
     * /var_dump(empty($var));
     * /var_dump(empty($var2));
     * - bool(true)
     * - bool(true)
     * 
     * *unset()
     * | Destruye una variable especificada
     * ° Devuelve TRUE en caso de éxito o FALSE en caso de error.
     * ++ unset(mixed $var, mixed ...$vars): void
     * /$foo = "bar";
     * /unset($foo);
     * /var_dump($foo);
     * - NULL
     * 
     * 
     * ! 8. (12) ESTRUCTURAS CONDICIONALES
     * *if()
     * | Condiciona la ejecución de uno o varios fragmentos de código al valor de una expresión
     * ° Si la expresión es evaluada como TRUE, PHP ejecutará la sentencia y si es evaluada como FALSE la ignorará.
     * ++ if (expr): sentencia
     * /$a = 5;
     * /$b = 10;
     * /if ($a > $b) {
     * /    echo "a es mayor que b";
     * /} elseif ($a == $b) {
     * /    echo "a es igual que b";
     * /} else {
     * /    echo "a es menor que b";
     * /}
     * - a es menor que b
     * 
     * *else()
     * | Sentencia alternativa para if, que ejecutará la sentencia alternativa si la expresión del if original da como resultado FALSE
     * ° Si la expresión del if original da como resultado TRUE, no se ejecutará la sentencia alternativa.
     * ++ else: sentencia
     * /$a = 5;
     * /$b = 10;
     * /if ($a > $b) {
     * /    echo "a es mayor que b";
     * /} elseif ($a == $b) {
     * /    echo "a es igual que b";
     * /} else {
     * /    echo "a es menor que b";
     * /}
     * - a es menor que b
     * 
     * *elseif()
     * | Como puede haber más de una sentencia elseif, se pueden encadenar para crear una estructura if...elseif...else
     * ° Si se utiliza elseif como sentencia alternativa de if, significa que se desea ejecutar una sentencia diferente en caso de que la expresión del if original dé como resultado FALSE.
     * ++ elseif (expr): sentencia
     * /$a = 5;
     * /$b = 10;
     * /if ($a > $b) {
     * /    echo "a es mayor que b";
     * /} elseif ($a == $b) {
     * /    echo "a es igual que b";
     * /} else {
     * /    echo "a es menor que b";
     * /}
     * - a es menor que b
     * 
     * !! 8.1 (12) ESTRUCTURAS DE CONTROL CONDICIONALES
     * *switch()
     * | Es similar a una serie de sentencias IF en la misma expresión
     * ° En muchas ocasiones es más fácil de leer y de escribir. PHP soporta estructuras de control switch de una o múltiples ramas.
     * ++ switch (expr):
     * ++ case expr:
     * ++    sentencias
     * ++    break;
     * ++ default:
     * ++    sentencias
     * ++    break;
     * 
     * 
     * 
     * !!! 8.2. (12) ESTRUCTURAS DE CONTROL ITERATIVAS
     * *while()
     * | Mientras la expresión del while sea evaluada como TRUE, se ejecutará la sentencia while.
     * ° Mientras la expresión del while sea evaluada como TRUE, se ejecutará la sentencia while.
     * ++ while (expr):
     * ++    sentencia
     * /$i = 1;
     * /while ($i <= 5) {
     * /    echo $i++;  '''el valor presentado sería $i antes del incremento'''
     * /}
     * - 1
     * - 2
     * - 3
     * - 4
     * - 5
     * 
     * 
     * 
     * *do-while()
     * | La sentencia do-while es similar a la sentencia while, con la diferencia que la expresión evaluada aparece al final de cada iteración en lugar de al principio.
     * ° La sentencia do-while se ejecutará al menos una vez, independientemente de que la expresión while sea evaluada como TRUE o FALSE.
     * ++ do:
     * ++    sentencia
     * ++ while (expr);
     * /$i = 0;
     * /do {
     * /    echo $i;
     * /} while ($i > 0);
     * - 0
     *  
     * *for()
     * | La sentencia for es una de las más completas de PHP, y permite expresar bucles de manera compacta.
     * ° La sentencia for es una de las más completas de PHP, y permite expresar bucles de manera compacta.
     * ++ for (expr1; expr2; expr3):
     * ++    sentencia
     * /for ($i = 1; $i <= 10; $i++) {
     * /    echo $i;
     * /}
     * - 12345678910
     * 
     * *foreach()
     * | La sentencia foreach proporciona un modo sencillo de iterar sobre arrays.
     * ° foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.
     * ++ foreach (array_expression as $value):
     * ++    sentencia
     * /$array = array(1, 2, 3, 4);
     * /foreach ($array as $valor) {
     * /    echo $valor;
     * /}
     * - 1234
     * 
     * *break()
     * | Finaliza la ejecución de la estructura for, foreach, while, do-while o switch actual
     * ° break acepta un argumento numérico opcional que indica cuántos niveles de estructura anidada se deben romper. El valor por defecto es 1, sólo se rompe la estructura inmediata.
     * ++ break(int $nivel = 1): void
     * /for ($i = 0; $i < 10; $i++) {
     * /    if ($i == 5) {
     * /        break;  '''Sale del bucle for '''
     * /    }
     * /    echo $i;
     * /}
     * - 01234
     * 
     * *continue()
     * | continue es usado dentro de estructuras de control de bucles para saltar la parte del bucle restante de la iteración actual y continuar la ejecución en la evaluación de la condición de dicho bucle.
     * ° continue acepta un argumento numérico opcional que indica cuántos niveles de estructura anidada se deben de saltar. El valor por defecto es 1, saltando a la estructura externa más cercana.
     * ++ continue(int $nivel = 1): void
     * /for ($i = 0; $i < 10; $i++) {
     * /    if ($i == 5) {
     * /        continue;  '''Salta a la siguiente iteración'''
     * /    }
     * /    echo $i;
     * /}
     * - 012346789
     *  
     */
?>
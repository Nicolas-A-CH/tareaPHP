<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Taller 1</h1>
    <h3>Punto 1</h3>
    <p>Desarrollar un algoritmo que muestre en pantalla el mensaje “Hola bienvenido al desarrollo de programación”:</p>
    <?php
        echo '“Hola bienvenido al desarrollo de programación”';
    ?>
    <h3>Punto 2</h3>
    <p> Desarrollar un algoritmo que muestre en pantalla los nombres y apellidos de quien realizó el programa:</p>
    <?php
        echo 'Desarrollado por: Luis Nicolas Arevalo Chiquiza';
    ?>
    <h3>Punto 3</h3>
    <p>Desarrollar un algoritmo que muestre en pantalla un mensaje en el que incluya la
    información del realizador del algoritmo y el mensaje de bienvenida. Por ejemplo si el
    creador se llama XXXX mostrar el siguiente mensaje:
    “Hola XXXX bienvenido a la programación”</p>
    <?php
        $nombreProgramador = "Luis Nicolas Arevalo Chiquiza";
        echo 'Hola ' .$nombreProgramador. ' bienvenido a la programación';
    ?>
    <h3>Punto 4</h3>
    <p>Desarrollar un algoritmo que lea un número y lo muestre en pantalla</p>
        <?php
            $numero = 45;
            echo $numero . "\n";
            echo gettype($numero);
        ?>
    <h3>Punto 5</h3>
    <p>Desarrollar un algoritmo que lea un número y muestre en pantalla el resultado de ese
    número multiplicado por 10.</p>
    <?php
        $numero1 = 20;
        $numero2 = 10;
        print "Los números a usar serán " . $numero1 . " y " . $numero2 . PHP_EOL;
        $resultado = $numero1 * $numero2;
        echo "El resultado sería " . $resultado . PHP_EOL;
    ?>
    <h3>Punto 6</h3>
    <p>Desarrollar un algoritmo que lea dos números y los muestre en pantalla</p>
    <?php
        $numero1 =20;
        $numero2 = 15.7;
        echo 'Los numeros usados para este punto fueron: ' . $numero1 . ' y ' . $numero2 . "\n";
        echo '<br>';
        echo gettype($numero1). "\n";
        echo '<br>';
        echo gettype($numero2);
    ?>
    <h3>Punto 7</h3>
    <p>Desarrollar un algoritmo que permita saber la suma de dos números digitados por el
    usuario.</p>
    <div class="mb-3">
        <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero</label>
        <input type="number" class="form-control" name="numeroUsuario1" placeholder="Numero">
        <label for="exampleFormControlInput2" class="form-label">Ingrese un numero y dele enter</label>
        <input type="number" class="form-control" name="numeroUsuario2" placeholder="Numero">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
        </form>
        <?php
            echo 'el primer numero escrito fue: ' . $_GET["numeroUsuario1"];
            echo '<br>';
            echo 'el segundo numero escrito fue ' . $_GET["numeroUsuario2"];
        ?>
    </div>
    <h3>Punto 8</h3>
    <p> Diseñar un algoritmo que a partir de una cantidad de pesos ingresada, permita tener el
    valor equivalente en dólares y euros (suponga que 1 dólar son 2000 pesos y 1 euro son
    3000 pesos).</p>
    <?php

    // Declaramos las variables
    $pesos = 200000000;
    $dolares = "";
    $euros = "";

    // Convertimos los pesos a dólares
    $dolares = $pesos / 2000;

    // Convertimos los pesos a euros
    $euros = $pesos / 3000;

    // Mostramos los resultados
    echo 'La cantidad de pesos ingresada fue de: ' . $pesos . '<br>';
    echo "El equivalente en dólares es: " . $dolares . '<br>';
    echo "El equivalente en euros es: " . $euros;
    ?>

    <h3>Punto 9</h3>
    <p>Realizar una variación del algoritmo del punto 8 de forma que sea el usuario quien digite
    el valor del dólar y el valor del euro</p>
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese la cantidad en pesoso a convertir</label>
        <input type="number" class="form-control" name="pesos" placeholder="Numero">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
        </form>
    <?php

    // Declaramos las variables
    $pesos = intval($_GET["pesos"]);
    $dolares = "";
    $euros = "";

    // Convertimos los pesos a dólares
    $dolares = $pesos / 2000;

    // Convertimos los pesos a euros
    $euros = $pesos / 3000;

    // Mostramos los resultados
    echo 'La cantidad de pesos ingresada fue de: ' . $pesos . '<br>';
    echo "El equivalente en dólares es: " . $dolares . '<br>';
    echo "El equivalente en euros es: " . $euros;
    ?>
    <h3>Punto 10</h3>
    <p>Diseñar un algoritmo que a partir de grados centígrados digitados por el usuario, pueda
    obtener su equivalente en grados Fahrenheit. Utilice para ello la siguiente fórmula:
    1. F= C*9/5 + 32</p>
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese la temperatura en grados celcios</label>
        <input type="number" class="form-control" name="celcios" placeholder="Temperatura en °C">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
        </form>
    <?php
        // Declaramos las variables
        $gradosCentigrados = intval($_GET["celcios"]);
        $gradosFahrenheit = 0;

        // Comprobamos si el valor ingresado es un número
        if (!is_numeric($gradosCentigrados)) {
            echo "El valor ingresado no es un número.";
            exit;
        }

        // Convertimos los grados centígrados a grados Fahrenheit
        $gradosFahrenheit = round($gradosCentigrados * 9 / 5 + 32, 2);

        // Mostramos los resultados
        echo 'Los grados centígrados ingresados fueron de: ' . $gradosCentigrados . '<br>';
        echo "Los grados centígrados ingresados equivalen a " . $gradosFahrenheit . " grados Fahrenheit.";

    ?>
    <h3>Punto 11</h3>
    <p>Desarrollar un algoritmo que a partir de la fecha de nacimiento digitada (año de
    nacimiento) permita determinar la edad de una persona.</p>
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese su año de nacimiento</label>
        <input type="number" class="form-control" name="añoNacimiento" placeholder="año de nacimiento">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
        </form>
    <?php
        // Declaramos las variables
        $añoActual = date("Y");
        $añoNacimiento = intval($_GET["añoNacimiento"]);
        $edad = 0;
        // Calculamos la edad
        $edad = $añoActual - $añoNacimiento;

        // Mostramos los resultados
        echo "La edad de la persona es de " . $edad . " años.";

    ?>
    <h3>Punto 12</h3>
    <p>Realizar un algoritmo que imprima la tabla de multiplicar del 1 desde o hasta 10</p>
    <?php
        // Declaramos las variables
        $numero = 1;
        // Imprimimos la tabla de multiplicar
        for ($i = 0; $i <= 10; $i++) {
            echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
        }
    ?>
    <h3>Punto 13</h3>
    <p>Realizar un algoritmo que imprima la tabla de multiplicar del 5 desde o hasta 10</p>
    <?php
        // Declaramos las variables
        $numero = 5;
        // Imprimimos la tabla de multiplicar
        for ($i = 0; $i <= 10; $i++) {
            echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
        }
    ?>
    <h3>Punto 14</h3>
    <p>Realizar un algoritmo que imprima la tabla de multiplicar del número digitado por pantalla desde o hasta 10</p>
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero para mostrarle su tabla de multiplicar</label>
        <input type="number" class="form-control" name="tablaMultiplicar" placeholder="numero para ver la tabla de multiplicar">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
        </form>
    <?php
        // Declaramos las variables
        $numero = intval($_GET["tablaMultiplicar"]);
        // Imprimimos la tabla de multiplicar
        for ($i = 0; $i <= 10; $i++) {
            echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
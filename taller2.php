<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taller2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
    <h1>Taller 2</h1>
    <h3>Punto 1</h3>
    <p>Diseñar un Algoritmo que permita determinar a partir de dos números digitados cuál de los
    dos es mayor.</p>
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero</label>
        <input type="number" class="form-control" name="numeroUsuario1" placeholder="numero">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero</label>
        <input type="number" class="form-control" name="numeroUsuario2" placeholder="numero">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
        </form>
    <?php
        $numero1 = intval($_GET["numeroUsuario1"]);
        $numero2 = intval($_GET["numeroUsuario2"]);
        
        $numeroMayor = max($numero1, $numero2);
        
        echo "El número mayor es $numeroMayor";
    ?>
    <h3>Punto 2</h3>
    <p>Diseñar un Algoritmo que permita determinar a partir de tres números ingresados por teclado
    cual de tres números es mayor</p>
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero</label>
        <input type="number" class="form-control" name="numeroUsuario1" placeholder="numero">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero</label>
        <input type="number" class="form-control" name="numeroUsuario2" placeholder="numero">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero</label>
        <input type="number" class="form-control" name="numeroUsuario3" placeholder="numero">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
        </form>
        <?php
        $numero1 = intval($_GET["numeroUsuario1"]);
        $numero2 = intval($_GET["numeroUsuario2"]);
        $numero3 = intval($_GET["numeroUsuario3"]);
        $numeroMayor = max($numero1, $numero2, $numero3);
        
        echo "El número mayor es $numeroMayor";
    ?>
    <h3>Punto 3</h3>
    <p>Diseñar un Algoritmo que permita determinar a partir de tres números ingresados por teclado
    cual de tres números es mayor</p>
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero</label>
        <input type="number" class="form-control" name="numeroPar" placeholder="numero">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
        </form>
    <?php
        // Declaramos la variable
        $numero = intval($_GET["numeroPar"]);
        // Comprobamos si el número es divisible por 2
        if ($numero % 2 == 0) {
            echo 'El número ' . $numero . ' es par.';
        } else {
            echo 'El número ' . $numero . ' no es par.';
        }
    ?>
    <h3>Punto 4</h3>
    <p>Diseñar un Algoritmo que me permita definir si un número ingresado es par o impar.</p>
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero</label>
        <input type="number" class="form-control" name="numeroPar" placeholder="numero">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
        </form>
    <?php
        // Declaramos la variable
        $numero = intval($_GET["numeroPar"]);
        // Comprobamos si el número es divisible por 2
        if ($numero % 2 == 0) {
            echo 'El número ' . $numero . ' es par.';
        } else {
            echo 'El número ' . $numero . ' es Impar.';
        }
    ?>
    <h3>Punto 5</h3>
    <p> Una comercializadora de frutas, vende únicamente dos clases de frutas: peras y manzanas, el
    kilo de pera tiene un valor de $1.500 y el de manzana es de $2.500. Se debe diseñar un
    Algoritmo que permita calcular el valor a pagar por un cliente, teniendo en cuenta la
    restricción de que el cliente compra pera o manzana, pero no ambas simultáneamente.
    Además debe generar una salida que contenga lo siguiente
    A. Articulo comprado
    B. Valor a pagar
    C. Mensaje que diga “GRACIAS POR LA COMPRA”
    </p>
    <label for="">Seleccione qué artículo desea comprar</label>
<select name="articulo" id="articuloScrip" class="form-select" aria-label="Default select example" onchange="mostrarDiv()">
  <option value="null">-- Seleccione una opción --</option>
  <option value="Peras">Peras</option>
  <option value="Manzanas">Manzanas</option>
</select>

<div id="manzanas" class="d-none">
  <label for="">¿Cuántas manzanas desea llevar? Recuerde que el kilo de manzana tiene un valor de $2.500</label>
  <form action="">
    <label for="manzanasInput" class="form-label">Ingrese el kilogramo de manzanas a llevar</label>
    <input type="number" class="form-control" id="manzanasInput" name="Manzanas" placeholder="Número">
    <div class="invalid-feedback">
      Ingrese un valor válido.
    </div>
    <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
  </form>
</div>

<div id="peras" class="d-none">
  <label for="">¿Cuántas peras desea llevar? Recuerde que el kilo de pera tiene un valor de $1.500</label>
  <form action="">
    <label for="perasInput" class="form-label">Ingrese el kilogramo de peras a llevar</label>
    <input type="number" class="form-control" id="perasInput" name="Peras" placeholder="Número">
    <div class="invalid-feedback">
      Ingrese un valor válido.
    </div>
    <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
  </form>
</div>

<script>
function mostrarDiv() {
  var select = document.getElementById("articuloScrip");
  var selectedOption = select.options[select.selectedIndex].value;

  // Ocultar todos los divs
  document.getElementById("manzanas").classList.add("d-none");
  document.getElementById("peras").classList.add("d-none");

  // Mostrar el div correspondiente a la opción seleccionada
  if (selectedOption === "Manzanas") {
    document.getElementById("manzanas").classList.remove("d-none");
  } else if (selectedOption === "Peras") {
    document.getElementById("peras").classList.remove("d-none");
  }
}
</script>
    <?php
    /*
        // Declaramos las variables
        $articulo = $_POST("articulo");
        $valor = 0;
        $kilogramosPera = intval($_GET["Peras"]);
        $kilogramosManzana = intval($_GET["Manzanas"]);
        $totalPagar = 0;

        // Comprobamos el artículo comprado
        if ($articulo == "Peras") {
            $valor = 1500;
            $totalPagar = $kilogramosPera * $valor;
        } else if ($articulo == "Manzanas") {
            $valor = 2500;
            $totalPagar = $kilogramosManzana * $valor;
        } else {
        echo "El artículo ingresado no es válido.";
        exit;
        }

        // Imprimimos los resultados
        echo "El artículo comprado es " . $articulo . " y el valor a pagar es $" . $totalPagar . ". <br>";
        echo "GRACIAS POR SU COMPRA";
        */?>
      <h1>Punto 6</h1>
      <p> Diseñar un Algoritmo que lea las tres notas definitivas de un estudiante, las dos primeras
      equivalen cada una al 35% de la nota final y la tercera nota equivale al 30%. En total un
      estudiante necesita una nota superior o igual a 3.5/5.0 para aprobar la materia. Las notas
      digitadas deben estar entre los valores de 0.0 y 5.0.
      </p>

      <form action="" method="get">
    <label for="nota1">Nota 1</label>
    <input type="text" class="form-control" name="nota1" placeholder="Nota 1" pattern="[0-5](\.\d{1,2})?" title="Ingrese un número decimal entre 0.0 y 5.0">

    <label for="nota2">Nota 2</label>
    <input type="text" class="form-control" name="nota2" placeholder="Nota 2" pattern="[0-5](\.\d{1,2})?" title="Ingrese un número decimal entre 0.0 y 5.0">

    <label for="nota3">Nota 3</label>
    <input type="text" class="form-control" name="nota3" placeholder="Nota 3" pattern="[0-5](\.\d{1,2})?" title="Ingrese un número decimal entre 0.0 y 5.0">

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

      <?php
// Verificamos si se enviaron datos mediante el método GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtenemos las notas del formulario
    $nota1 = isset($_GET["nota1"]) ? floatval($_GET["nota1"]) : 0;
    $nota2 = isset($_GET["nota2"]) ? floatval($_GET["nota2"]) : 0;
    $nota3 = isset($_GET["nota3"]) ? floatval($_GET["nota3"]) : 0;

    // Calculamos la nota final
    $notaFinal = ($nota1 * 0.35) + ($nota2 * 0.35) + ($nota3 * 0.30);

    // Comprobamos si el alumno aprueba
    if ($notaFinal >= 3.5) {
        echo "El alumno aprobó con una nota de $notaFinal";
    } else {
        echo "El alumno reprobó con una nota de $notaFinal";
    }
}
?>
<h1>Punto 7</h1>
<p>Diseñe un Algoritmo que permita obtener el valor total de una compra, teniendo en cuenta
que se hace un 20% de descuento a los clientes cuya compra supere los $1.000</p>

<form action="">
  <label for="totalCompra">Total de la compra</label>
  <input type="number" class="form-control" id="totalCompra" name="totalCompra" placeholder="Total de la compra" min="0">

  <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<?php
// Declaramos las variables
$totalCompra = floatval($_GET["totalCompra"]);

// Calculamos el descuento
if ($totalCompra > 1000) {
  $descuento = $totalCompra * 0.20;
} else {
  $descuento = 0;
}

// Calculamos el valor final
$valorFinal = $totalCompra - $descuento;

// Mostramos el resultado
echo "El valor final de la compra es $valorFinal";
?>
<h1>Punto 8</h1>
<p>Diseñar un Algoritmo que permita a un obrero calcular su salario semanal, el cual se obtiene
de la siguiente manera:
a) Si trabaja 40 horas o menos se le paga $16 por hora
b) Si trabaja más de 40 horas se le paga $16 por cada una de las primeras 40 horas y $20 más
por cada hora extra</p>

<form action="">
  <label for="horasTrabajadas">Horas trabajadas</label>
  <input type="number" class="form-control" id="horasTrabajadas" name="horasTrabajadas" placeholder="Horas trabajadas" min="0">

  <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<?php
// Declaramos las variables
$horasTrabajadas = floatval($_GET["horasTrabajadas"]);

// Calculamos el salario
if ($horasTrabajadas <= 40) {
  $salario = $horasTrabajadas * 16;
} else {
  $horasExtra = $horasTrabajadas - 40;
  $salario = 40 * 16 + $horasExtra * (16 + 20);
}

// Mostramos el resultado
echo "El salario semanal es $salario";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
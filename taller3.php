<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function validarSeleccion() {
            var peraCheckbox = document.getElementById("pera");
            var manzanaCheckbox = document.getElementById("manzana");

            if (peraCheckbox.checked && manzanaCheckbox.checked) {
                alert("Seleccione solo una fruta a la vez.");
                peraCheckbox.checked = false;
                manzanaCheckbox.checked = false;
            }
        }
    </script>
</head>
<body>
<h1>Punto 1</h1>
<p>Una comercializadora de frutas, vende únicamente dos clases de frutas: peras y manzanas. Se
debe diseñar un programa que permita ingresar por pantalla el precio de venta para cada
fruta, capturar la cantidad de kilos de frutas a comprar porun cliente, calcular el valor a pagar,
teniendo en cuenta la restricción de que el cliente compra pera o manzana, pero no ambas
simultáneamente. Debegenerar una salida que contenga lo siguiente:
• Cantidad de fruta comprada y nombre de la fruta, ejemplo: 5kilos de manzana
• Valor a pagar, ejemplo:totalde la venta$27500 y
• El Mensaje que digaGRACIAS PORLA COMPRA</p>

<form action="" method="get" onsubmit="return validarSeleccion()">
    <label for="fruta">Seleccione una fruta:</label>
    <input type="checkbox" id="pera" name="fruta" value="pera"> Pera
    <input type="checkbox" id="manzana" name="fruta" value="manzana"> Manzana

    <br>

    <label for="precio">Precio por kilo:</label>
    <input type="number" id="precio" name="precio" step="0.01" min="0.01" required> USD por kilo

    <br>

    <label for="cantidad">Cantidad de kilos:</label>
    <input type="number" id="cantidad" name="cantidad" step="0.01" min="0.01" required> kilos

    <br>

    <button type="submit">Calcular Precio</button>

    <?php
    // Obtener los valores del formulario
    $fruta = $_GET["fruta"];
    $precio = floatval($_GET["precio"]);
    $cantidad = floatval($_GET["cantidad"]);

    // Calcular el valor total de la venta
    $total = $precio * $cantidad;

    // Mostrar los resultados
    echo "<p>Cantidad de fruta comprada: $cantidad kilos de $fruta</p>";
    echo "<p>Valor a pagar: Total de la venta $total USD</p>";
    echo "<p>GRACIAS POR LA COMPRA</p>";
    ?>
</form>
<h1>Punto 2</h1>
<p>En un supermercado se hace unapromoción, mediante la cual el cliente obtiene un descuento
dependiendo de un número que se genera al azar. Si el número generado es menor que 74 el
descuento es del 15% sobre el total de la compra, si es mayor o igual a 74 el descuento es del
20%. Obtener cuánto dinero se le descuenta aun cliente.</p>

  <form action="" method="get">
    <label for="totalCompra">Total de la compra</label>
    <input type="number" class="form-control" name="totalCompra" placeholder="Total de la compra" min="0">

    <button type="submit" class="btn btn-primary">Calcular</button>
  </form>

  <?php
  // Declaramos las variables
  $numeroAleatorio = mt_rand(1, 100);
  $totalCompra = floatval($_GET["totalCompra"]);

  // Calculamos el descuento
  if ($numeroAleatorio < 74) {
    $descuento = $totalCompra * 0.15;
    $total = $totalCompra - $descuento;
  } else {
    $descuento = $totalCompra * 0.20;
    $total = $totalCompra - $descuento;
  }

  // Mostramos el resultado
  echo "El descuento es de $descuento" . $total;
  echo 'El total a pagar es ' . $total;
  ?>
  <h1>Punto 3</h1>
  <p>Diseñarun algoritmo que me permita imprimir los números del1 al 10 pero en orden
descendente.</p>
    <?php
        // Imprimimos los números del 1 al 10, empezando por el 10
for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
  }
  
    ?>
    <h3>Punto 4</h3>
    <p>Diseñarun algoritmo que me permita imprimir los números del1 al 10 de forma ascendente y
luego los números del100 al 90 de maneradescendente.</p>
<?php
// Imprimimos los números del 1 al 10 de forma ascendente
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
  }
  
  // Imprimimos los números del 100 al 90 de manera descendente
  for ($i = 100; $i >= 90; $i--) {
    echo $i . "<br>";
  }
?>
<h3>Punto 5</h3>
<p>Diseñarun algoritmo que realice las sumatoriade númerosiniciando en cero hasta un número
digitado por elusuario</p>
<form action="">
    <label for="numero">Número</label>
    <input type="number" class="form-control" id="numero" name="numero" placeholder="Número" min="0">

    <button type="submit" class="btn btn-primary">Calcular</button>
  </form>

  <?php
  // Declaramos las variables
  $numero = floatval($_GET["numero"]);

  // Realizamos la sumatoria
  $suma = 0;
  for ($i = 0; $i <= $numero; $i++) {
    $suma += $i;
  }

  // Mostramos el resultado
  echo "La sumatoria es $suma";
  ?>
  
</body>
</html>
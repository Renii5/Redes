<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01Base</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<h2>Todo lo escrito fuera de las marcas de php es entregado en la respuesta http sin pasar por el procesador php</h2>
<hr>

<?php
$mivariable = "valor1";

echo "<h2> Todo el texto y/o HTML <span> entregado por el procesador PHP </span> usando la sentencia Echo </h2>";
echo "<hr>";

echo "<h2> Sin usar concatenador <span>\$mivariable</span> : $mivariable</h2>";
echo "<h2> Usando concatenador <span>\$mivariable</span> : " . $mivariable . "</h2>";
echo "<hr>";

$mivariable = true;
echo "<h2> Variable tipo booleana (Verdadero) <span>\$mivariable</span> : " . ($mivariable ? 'true' : 'false') . "</h2>";
$mivariable = false;
echo "<h2> Variable tipo booleana (Falso) <span>\$mivariable</span> : " . ($mivariable ? 'true' : 'false') . "</h2>";
echo "<hr>";

define("MiConstante", "ValorConstante");
echo "<h2> <span>MiConstante</span> : " . MiConstante . "</h2>";
echo "<h2>Tipo de <span>MiConstante (tipo)</span> : " . gettype(MiConstante) . "</h2>";
echo "<hr>";

echo "<h2> Arreglos : </h2>";

$aTransporte = array("Auto", "Camion");
echo "<p><span>\$aTransporte[0]</span> : $aTransporte[0]</p>";
echo "<p><span>\$aTransporte[1]</span> : $aTransporte[1]</p>";
echo "<p>Tipo de <span> \$aTransporte </span> : " . gettype($aTransporte) . "</p>";

array_push($aTransporte, "Avion", "Barco");
echo "<h2>Se agregan por programa dos elementos al array</h2>";
echo "<h2>Todos los elementos originales y agregados : </h2>";
foreach ($aTransporte as $maquinas) {
    echo "<ul><li>" . $maquinas . "</li></ul>";
}

$ArrayPalabrasEspaniol = array("Hola", "Adios", "Casa");
$ArrayPalabrasIngles = array("Hello", "Goodbye", "House");
$ArrayPalabrasItaliano = array("Ciao", "Arrivederci", "Casa");
$ArrayPalabrasFrances = array("Bonjour", "au revoir", "Maison");

$aDiccionarioBasico = [
    $ArrayPalabrasEspaniol,
    $ArrayPalabrasIngles,
    $ArrayPalabrasItaliano,
    $ArrayPalabrasFrances,
];

echo "<h2>Arreglo de dos dimensiones(diccionario)</h2>";
echo "<h4>La variable \$aDiccionarioBasico tiene el siguiente tipo: array</h4>   ";

echo "<table>";
echo "<tr>";
echo "<th>Español</th><th>Inglés</th><th>Italiano</th><th>Francés</th>";
echo "</tr>";

for ($i = 0; $i < count($aDiccionarioBasico)-1; $i++) {
    echo "<tr>";
    foreach ($aDiccionarioBasico as $ArraydePalabras) {
        echo "<td>";
        echo $ArraydePalabras[$i];
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table><br>";
echo "<h3>También se puede declarar de esta manera \$aDiccionarioBasico[0][2]:"  . $aDiccionarioBasico[3][1] . "</h3>";
echo "<h3>Cantidad de elementos del diccionario: <span>".count($aDiccionarioBasico) ."</span></h3>";
echo "<br>";

echo "<h1>Variables tipo arreglo asociativo </h1>";
$renglonDeLiquidacion = ["legEmpleado" => "c0001", "periodoLiquidado" => "Enero de 2023", "salarioBasico" => 20000, "fechaIngr" => "02/04/2019"];
echo "<h4>Legajo de empleado: " . $renglonDeLiquidacion['legEmpleado'] . "</h4>";
echo "Legajo de empleado: " . ($renglonDeLiquidacion['legEmpleado']);
echo "<br>";
echo "Salario básico de empleado: " . $renglonDeLiquidacion['salarioBasico'];
echo "<br>";
echo "Fecha de ingreso: " . ($renglonDeLiquidacion['fechaIngr']);
echo "<br>";

echo "<h2>Expresiones aritméticas</h2>";
$y = 2;
$x = 8;
$z = $y + $x;
$m = $x - $y;
$s = $x * $y;
$d = $x / $y;
echo "La variable \$y tiene el siguiente valor: " . $y;
echo "<br>";
echo "<br>La variable \$x tiene el siguiente valor: " . $x;
echo "<br>";
echo "<br>La variable \$y tiene el siguiente tipo: " . gettype($y);
echo "<br>";
echo "<br>La variable \$x tiene el siguiente tipo: " . gettype($x);
echo "<br>";
echo "<br>Una suma entre \$x + \$y: " . $z;
echo "<br>";
echo "<br>Una resta entre \$x - \$y: " . $m;
echo "<br>";
echo "<br>Una multiplicación entre \$x * \$y: " . $s;
echo "<br>";
echo "<br>Una división entre \$x / \$y: " . $d;
?>

</body>
</html>
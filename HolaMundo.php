<?php
//DEFINICION DE VARIABLES
$nombre = "Juan";
$apellido = "Pérez";
$edad = 30;
//flotantes
$altura = 1.75;
//boleanos
$esEstudiante = true;
$esEmpleado = false;
//arreglos
$colores = array("rojo", "verde", "azul");
$colores[1] = "amarillo"; // Cambia el segundo elemento a "amarillo"
$numeros = array(1, 2, 3, 4, 5); 

//Imprimir
echo "Hola";
echo "<h1>Hola Mundo</h1>";
echo $nombre;
echo $nombre." " . $apellido;

//bucles
for ($i = 0; $i < 5; $i++) {
    echo "<br>El valor de i es: " . $i;
}
//length de un arreglo
for ($i = 0; $i < count($colores) ; $i++) {
    echo "<br>Color:".$colores[$i];
}

//condicionales
if ($esEstudiante) {
    echo "<br>Es estudiante";
} else {
    echo "<br>No es estudiante";
}
//elif
if ($esEmpleado) {
    echo "<br>Es empleado";
} elseif ($esEstudiante) {
    echo "<br>Es estudiante pero no empleado";
} else {
    echo "<br>No es estudiante ni empleado";
}
//switch
switch ($nombre) {
    case "Juan":
        echo "<br>Hola Juan";
        break;
    case "Pedro":
        echo "<br>Hola Pedro";
        break;
    default:
        echo "<br>Hola desconocido";
        break;
}
//while
$i = 0;
while ($i < 5) {
    echo "<br>El valor de i es: " . $i;
    $i++;
}
//funciones
function suma($a, $b) {
    $resultado = $a + $b;
    echo "<br>LA suma es".$resultado;
}

echo suma(5, 10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="display-4">Hola Mundo</h1>
        <?php echo $nombre; ?>
        <p class="lead">Bienvenido a mi primera página web con Bootstrap 5.</p>
        <button class="btn btn-primary">Haz clic aquí</button>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<title>Asignaturas FCA-UNAM</title>
<script  src="js/jquery-3.3.1.slim.min.js"> </script>
<script  src="js/popper.min.js"> </script>
<script  src="js/bootstrap.min.js"> </script>
</head>
<body>
<?php include 'php/encabezado.php'; ?>
<?php include 'php/menu.php'; ?>
   <div class="col-xl-12" id="result" src="consultar.php"  frameborder="0">
    <table class="table table-striped">
    <thead>
    <tr>
    <th scope="col"></th>
    <th scope="col">Id</th>
    <th scope="col">Empresa u Organizacion</th>
    <th scope="col">Asignatura</th>
    <th scope="col">Carreras Aceptadas</th>
    <th scope="col">Lugar</th>
    <th scope="col">Semestre</th>
    <th scope="col">Dias</th>
    <th scope="col">Hora de inicio</th>
    <th scope="col">Hora de termino</th>
    <th scope="col">Cupo</th>
    </tr>
</thead>
<tbody>
<?php
$i = 0;
$x = 0;
// detalles de la conexion
$conn_string = "host=rigel.fca.unam.mx port=5432 dbname=li314290195 user=li314290195 password=trigo360 options='--client_encoding=UTF8'";
 

$conn = pg_connect($conn_string);
$carreras = pg_query ( $conn , "SELECT id,nomorg, asignatura, carrera, lugar, semestre, dias,horainicio, fin, cupo FROM asigemp" );
if (! $carreras ) 
echo "Ocurrió un error.\n" ; 

while ( $carrera= pg_fetch_array ( $carreras )) {
	echo "<tr> <th scope='row'></th>";
	for ($i = 0; $i <= 10; $i++) {
    echo "<td>" . $carrera[$i]."</td>";
}
    echo "</tr>";
}

// Close connection
pg_close($conn);
?>
</tbody>
</table>
</div>
</div>
</body>
</html>

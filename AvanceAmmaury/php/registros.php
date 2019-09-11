<!DOCTYPE html>
<html lang="es">

<head>
	<title>Registro Exitoso</title>
	<meta charset="UTF-8">
	<meta http-equiv="Refresh" content="5;url=http://rigel.fca.unam.mx/~li314290195/asignaturasfca/lista.php">
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="alert alert-success" role="alert">
 Registrado Exitosamente!
</div>
<?php

$carrera = $_POST["carrera"];
$nomorg = $_POST['nomorg'];
$asignatura = $_POST["asignatura"];
$semestre = $_POST["semestre"];
$cupo = $_POST["cupo"];
$inicio = $_POST["incio"];
$fin = $_POST["fin"];
$lugar = $_POST["lugar"];
$dias = $_POST ["dias"];

$conn_string = "host=rigel.fca.unam.mx port=5432 dbname=li314290195 user=li314290195 password=trigo360 options='--client_encoding=UTF8'";
$conn = pg_connect($conn_string);
$carreras = pg_query ( $conn , "INSERT INTO asigemp (nomorg, asignatura, carrera, lugar, semestre, dias,horainicio, fin, cupo) VALUES ('$nomorg', '$asignatura','$carrera[0] $carrera[1] $carrera[2] $carrera[3]', '$lugar', '$semestre', '$dias[0] $dias[1]','$inicio','$fin','$cupo');" );

// Close connection
pg_close($conn);
?>
</body>
</html>

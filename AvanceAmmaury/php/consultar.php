<meta charset="UTF-8">
<?php
$i = 0;
$x = 0; qwew
// detalles de la conexion
$conn_string = "host=rigel.fca.unam.mx port=5432 dbname=li314290195 user=li314290195 password=trigo360 options='--client_encoding=UTF8'";
 
$stat = pg_connection_status($conn_string);
echo $stat

$conn = pg_connect($conn_string);
$carreras = pg_query ( $conn , "SELECT id,nomorg, asignatura, carrera, lugar, semestre, dias,horainicio, fin, cupo FROM asigemp" );
if (! $carreras ) 
echo "Ocurrió un error me caga todo.\n" ; 

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

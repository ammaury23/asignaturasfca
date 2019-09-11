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
<h1>Horarios asignaturas empresariales</h1>
<div class="containerfluid-xl-12">
    <div class="col-xl-12" id="tabla" >
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
        <?php include 'php/tabla.php'; ?>
        </tbody>
        </table>
    </div>
</div>
</body>
</html>

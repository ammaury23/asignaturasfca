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
</div>

<div class="container">
    <div class="col-xl-12 collapse" id="result" src="consultar.php"  frameborder="0">
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
<?php include 'consultar.php'; ?>
 </tbody>
</table>
</div>
    <div class="row collapse" id="form">
   <div class="col-xl-6 "  frameborder="0"> 
    <form action="registros.php" method="post">
  <legend>Empresa u Organización:</legend><input type="text" name="nomorg" required size="50%">
  <legend>Asignatura:</legend><input type="text" name="asignatura" required size="50%">
 
  <legend>Dias de Clase: </legend>
    <input type="checkbox" name="dias[]" value="Lunes">Lunes &nbsp;
    <input type="checkbox" name="dias[]" value="Martes">Martes &nbsp;
    <input type="checkbox" name="dias[]" value="Miércoles">Miércoles &nbsp;
    <input type="checkbox" name="dias[]" value="Jueves">Jueves &nbsp;
    <input type="checkbox" name="dias[]" value="Viernes">Viernes &nbsp;


   <legend >Carrera(s) que acepta: </legend>
    <input type="checkbox" name="carrera[]" value="Administración">Administración &nbsp;
    <input type="checkbox" name="carrera[]" value="Contaduría" >Contaduría <br>
    <input type="checkbox" name="carrera[]" value="Informática" >Informática &nbsp; &nbsp; &nbsp; &nbsp; 
    <input type="checkbox" name="carrera[]" value="Negocios Internacionales" requiered>Negocios Internacionales <br>
  
   <legend>Horario: </legend><p> De &nbsp; <select name="incio" required>
    <option value="">--:--</option>
    <option value="7:00">7:00</option>
    <option value="8:00">8:00</option>
    <option value="9:00">9:00</option>
    <option value="10:00">10:00</option>
    <option value="11:00">11:00</option>
    <option value="12:00">12:00</option>
    <option value="13:00">13:00</option>
    <option value="14:00">14:00</option>
    <option value="15:00">15:00</option>
    <option value="16:00">16:00</option>
    <option value="17:00">17:00</option>
    <option value="18:00">18:00</option>
    <option value="19:00">19:00</option>
    <option value="20:00">20:00</option>
    <option value="21:00">21:00</option>
    <option value="22:00">22:00</option> 
  </select>&nbsp; A &nbsp;
  <select name="fin" required> 
    <option value="">--:--</option>
    <option value="7:00">7:00</option>
    <option value="8:00">8:00</option>
    <option value="9:00">9:00</option>
    <option value="10:00">10:00</option>
    <option value="11:00">11:00</option>
    <option value="12:00">12:00</option>
    <option value="13:00">13:00</option>
    <option value="14:00">14:00</option>
    <option value="15:00">15:00</option>
    <option value="16:00">16:00</option>
    <option value="17:00">17:00</option>
    <option value="18:00">18:00</option>
    <option value="19:00">19:00</option>
    <option value="20:00">20:00</option>
    <option value="21:00">21:00</option>
    <option value="22:00">22:00</option> 
  </select> </p>
  <fieldset>  
 <fieldset>
  <legend>Semestre:</legend>
<input type="radio" name="semestre" value=" 6to semestre en adelante " requiered>6+ &nbsp;&nbsp;
    <input type="radio" name="semestre" value= " 7mo semestre en adelante " required>7+&nbsp;&nbsp;
    <input type="radio" name="semestre" value= " 8vo semestre  " required>8+ &nbsp;&nbsp;
</fieldset>
 <p> <legend>Lugar: </legend><input type="text" name="lugar" required size="50%"></p>
  <p> <legend>Cupo:</legend> <input type="number" name="cupo" min="1" max="100" required></p></div>   
   <input type="reset" class="btn btn-danger btn xl" value="Borrar"> 
   <input type="submit" class="btn btn-success btn xl" value="Enviar">
        </div> </div>

</body>

</html> 

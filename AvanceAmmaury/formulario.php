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
<form action="php/registros.php" method="post" >
<div class="container">
<h1 > Registro de nueva asignatura </h1>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="empresa" class="font-weight-bold">Empresa u Organización</label>
      <input type="text" class="form-control" id="empresa" name="nomorg" placeholder="Ej. Apple" required>
    </div>
    <div class="form-group col-md-6">
      <label for="asignatura" class="font-weight-bold">Asignatura</label>
      <input type="text" class="form-control" id="asignatura" name="asignatura" placeholder="Ej. Riesgos financieros en los portafolios" required>
    </div>

<div class="form-group col-md-2">
  <label class="font-weight-bold mx-auto">Dias de clase</label> <br>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="dias[]" value="Lunes" id="Lunes">
  <label class="form-check-label" for="Lunes"> Lunes </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="dias[]" value="Martes" id="Martes">
  <label class="form-check-label" for="Martes"> Martes </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="dias[]" value="Miércoles" id="Miércoles">
  <label class="form-check-label" for="Miércoles"> Miércoles </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="dias[]" value="Jueves" id="Jueves">
  <label class="form-check-label" for="Jueves"> Jueves </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="dias[]" value="Viernes" id="Viernes">
  <label class="form-check-label" for="Viernes"> Viernes </label>
  </div>
</div>
<div class="form-group col-md-3">
  <label class="font-weight-bold">Licenciaturas Aceptadas</label> <br>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="carrera[]" value="Administración" id="Administración">
  <label class="form-check-label" for="Administración"> Administración </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="carrera[]" value="Contaduría" id="Contaduría">
  <label class="form-check-label" for="Contaduría"> Contaduría </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="carrera[]" value="Informática" id="Informática">
  <label class="form-check-label" for="Informática"> Informática </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="carrera[]" value="Negocios Internacionales" id="Negocios Internacionales">
  <label class="form-check-label" for="Negocios Internacionales"> Negocios Internacionales </label>
  </div>
</div>
<div class="form-group col-md-2">
    <label for="inicio" class="font-weight-bold">Horario</label> <br>
    De &nbsp;
  <select name="incio" id="incio"required>
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
    </select> <br> <br> a &nbsp; &nbsp;
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
  </select>
</div>
<div class="form-group col-md-3">
 <label class="font-weight-bold">Semestres Aceptados</label>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked required>
        6º semestre en adelante
      </label>
    </div>
<div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked required>
        7º semestre en adelante
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked required>
        8º semestre en adelante
        </label>
    </div>
    </div>
<div class="col-md-2">
      <label for="cupo" class="font-weight-bold">Cupo</label>
      <input type="number" class="form-control" min="1" max="100" id="cupo" name="cupo" placeholder="Numero entero" required>
</div>
<div class="form-group col-md-12">
      <label for="lugar" class="font-weight-bold">Lugar</label>
      <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Ej. FCA Salon A-001" required>
    </div>

<div class="form-group col-md-6">
      <label class="font-weight-bold">Temario</label>
      <div class="custom-file">
    <input type="file" class="custom-file custom-file-input" id="customFile" required="" ="required="" ">
    <label class="custom-file-label" for="customFile" >Seleccionar Temario</label>
  </div>
    </div>

<div class="form-group col-md-6">
  <label class="font-weight-bold">Infografia</label>
      <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
</div>
    </div>

  <input  type="reset" class="btn btn-danger btn xl ml-auto" value="Borrar"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" class="btn btn-success btn xl" value="Enviar">
  </div>
</form>

</body>
</html>

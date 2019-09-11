<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Asignaturas FCA-</title>
  <script  src="js/jquery-3.3.1.slim.min.js"> </script>
  <script  src="js/popper.min.js"> </script>
  <script  src="js/bootstrap.min.js"> </script>
</head>
<body>
  <?php include 'php/encabezado.php'; ?>
  <?php include 'php/menu.php'; ?>
  <div class="container">
    <h1> Registro de nueva asignatura </h1>
    <div class="form-row">
      <label class="font-weight-bold mx-auto" for="empresa">Selecciona una empresa</label>
      <div class="form-group col-md-10">
        <select class="form-control" id="empresa" name="nomorg">
          <option selected disabled>--Empresas u organizaciones--</option>
          <?php
          $i = 0;
        // detalles de la conexion
          $conn_string = "host=rigel.fca.unam.mx port=5432 dbname=diplomadotic user=diplomadotic password=iVPmUsY options='--client_encoding=UTF8'";
          $conn = pg_connect($conn_string);
          $empresas = pg_query ( $conn , "SELECT nomemp FROM empresa" );
          if (! $empresas ) 
            echo "Ocurrió un error.\n" ; 
          while ( $empresa= pg_fetch_array ( $empresas )) {
            echo "<option>" . $empresa[$i]."</option>";
          }
        // Close connection
          pg_close($conn);
          ?> 
          <option disabled >--En caso de no encontrar la empresa deberas agregarla--</option>
        </select> 
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Agregar Asignatura </button>
        </div>
        <div class="collapse"  id="collapseExample">
        
        </div>
        
        <div class="form-row">
        <label class="font-weight-bold mx-auto col-md-12" for="empresa">Selecciona una asignatura empresarial u organizacional</label>
      <div class="form-group col-md-10">
        <select class="form-control" id="asignatura" name="asignatura">
          <option  disabled selected >--Asignaturas--</option>
          <?php
          $i = 0;
        // detalles de la conexion
          $conn_string = "host=rigel.fca.unam.mx port=5432 dbname=li314290195 user=li314290195 password=trigo360 options='--client_encoding=UTF8'";
          $conn = pg_connect($conn_string);
          $asignaturas = pg_query ( $conn , "SELECT asignatura FROM asigemp" );
          if (! $asignaturas ) 
            echo "Ocurrió un error.\n" ; 
          while ( $asignatura= pg_fetch_array ( $asignaturas )) {
            echo "<option value='". $asignatura[$i]."'>" . $asignatura[$i]."</option>";
          }
        // Close connection
          pg_close($conn);
          ?> 
          <option value="" disabled="">--En caso de no encontrar la asignatura deberas agregarla--</option>
        </select>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Agregar Asignatura</button>
      </div>
      <div id="collapseTwo" class="col-md-12 collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <iframe src="http://rigel.fca.unam.mx/~diplomadotic/asignaturasfca/formulario.php" frameborder="0"></iframe>
      </div>
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
      <select name="incio" id="incio" >
        <option value="">--:--</option>
        <option value='7:00'>7:00</option>
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
      <select name="fin" >
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
        <input type="radio" class="form-check-input" name="semestre" id="semestre6" value="6º "  >
        6º semestre en adelante
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="semestre" id="semestre7" value="7º " >
        7º semestre en adelante
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="semestre" id="semestre8" value="8º "  >
        8º semestre en adelante
      </label>
    </div>
  </div>
  <div class="col-md-2">
    <label for="cupo" class="font-weight-bold">Cupo</label>
    <input type="number" class="form-control" min="1" max="100" id="cupo" name="cupo" placeholder="Numero entero" >
  </div>
  <div class="form-group col-md-12">
    <label for="lugar" class="font-weight-bold">Lugar</label>
    <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Ej. FCA Salon A-001" >
  </div>

  <div class="form-group col-md-6">
    <label class="font-weight-bold">Temario</label>
    <div class="custom-file">
      <input type="file" class="custom-file custom-file-input" id="customFile" >
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
  </div>
  <input  type="reset" class="btn btn-danger btn xl ml-auto" value="Borrar"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" class="btn btn-success btn xl" value="Enviar">
  </form>
 </body>
</html>

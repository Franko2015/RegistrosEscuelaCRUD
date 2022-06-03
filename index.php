<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Colegio</title>
    <link rel="stylesheet" href="/Apps/estiloInicio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-dark" href="index.php">Página principal</a>
        </li>
    
        <div class="navbar-collapse collapse" id="navbar01">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" font-size:" 150%;">&nbsp;&nbsp;Datos</a>
    
                  <div class="dropdown-menu dropdown-hover" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="verAlumno.php">Alumnos</a>
                  <a class="dropdown-item" href="verProfesor.php">Profesores</a>
                </div>
              </li>
            </ul>
          </div>
      </ul>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar01" aria-controls="navbar01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="navbar-collapse collapse" id="navbar01">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" font-size:" 150%;">&nbsp;&nbsp;Registrar</a>
    
                  <div class="dropdown-menu dropdown-hover" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="addAlumno.php">Alumno</a>
                  <a class="dropdown-item" href="addProfesor.php">Profesor</a>
                </div>
              </li>
            </ul>
          </div>
    </nav>
<center>
    <div class="target-alumnos">
      <h3>Alumnos</h3>
      <br>
<?php include("conectar.php"); 
  $sql="SELECT MAX(idAlumno) as a from tblAlumno";
    $result=mysqli_query($con,$sql);

    while($mostrar=mysqli_fetch_assoc($result)) { ?>
      <h2><?php echo $mostrar['a'] ?></h2>
      <?php } ?>
    </div>
    <div class="target-profesores">
      <h3>Profesores</h3>
      <br>
<?php include("conectar.php"); 
  $sql="SELECT MAX(idProfesor) as p from tblProfesor";
    $result=mysqli_query($con,$sql);

    while($mostrar=mysqli_fetch_assoc($result)) { ?>
      <h2><?php echo $mostrar['p'] ?></h2>
      <?php } ?>
    </div>
  </center>

</html>

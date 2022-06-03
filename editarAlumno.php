<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insertar Alumno</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
<div class="container">
  <h2>Insersión de alumno</h2>
<br>
  <form action="procesoEditarAlumno.php" method="POST">
<?php
$id=$_GET['id'];
include("conectar.php");
$sql="SELECT * from tblAlumno WHERE idAlumno = '$id'";
$result=mysqli_query($con,$sql);
while($mostrar=mysqli_fetch_assoc($result)) {
?>
      <input type="hidden" name="identified" value="<?php echo $mostrar['idAlumno']; ?>">
    <div class="form-group">
      <label for="nombre">Nombres:</label>
      <input type="text" class="form-control" id="nombre" value="<?php echo $mostrar['nombresAlumno']; ?>" name="nombres">
    </div>
    <div class="form-group">
      <label for="apellidos">Apellidos:</label>
      <input type="text" class="form-control" id="apellidos" value="<?php echo $mostrar['apellidosAlumno']; ?>" name="apellidos">
    </div>
    <div class="form-group">
      <label for="contraseña">Contraseña:</label>
      <input type="text" class="form-control" id="contraseña" value="<?php echo $mostrar['contraseñaAlumno']; ?>" name="pswd">
    </div>

    <?php } ?>

    <button type="submit" class="btn btn-primary">Editar</button>   <a href="verAlumno.php"><input type="button" class="btn btn-primary" value="Volver"></a>
  </form>
</div>

</body>
</html>
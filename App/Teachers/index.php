<!DOCTYPE html>
<html>
<head>
	  <title>Datos de alumnos</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../App/css/navbar.css">
    <link rel="stylesheet" href="../../App/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="btn btn-dark" href="../../">Página principal</a>
    </li>
    <div class="navbar-collapse collapse" id="navbar01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" font-size:" 150%;">&nbsp;&nbsp;Datos</a>

            <div class="dropdown-menu dropdown-hover" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="../../App/Students/">Alumnos</a>
            <a class="dropdown-item" href="../../App/Teachers/">Profesores</a>
          </div>
        </li>
      </ul>
    </div>
  </ul>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar01" aria-controls="navbar01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="container mx-auto m-2">
<a href="create.html" class="btn btn-outline-dark">Agregar Profesor</a>
<center>
  <table class="table table-hover table-responsive-md m-3" border="2">
    <thead>
      	<tr align="center">
	      <th>Id</th>
	      <th>Nombre</th>
	      <th>Apellido</th>
	      <th>Contraseña</th>
	      <th>Acción</th>
    	</tr>
    </thead>
    <tbody>
<?php

include("../connection/conn.php");

  $sql="SELECT * from tblProfesor";
    $result=mysqli_query($con,$sql);

    while($mostrar=mysqli_fetch_assoc($result)) { ?>

    <tr align="center">
      <td><?php echo $mostrar['idProfesor'] ?></td>
      <td><?php echo $mostrar['nombresProfesor'] ?></td>
      <td><?php echo $mostrar['apellidosProfesor'] ?></td>
      <td><?php echo $mostrar['contraseñaProfesor'] ?></td>
      <td><a href="edit.php?id=<?php echo $mostrar['idProfesor']; ?>">Editar</a></td>
    </tr>
  <?php } ?>
    </tbody>
  </table>
</center>
</div>

</body>
</html>
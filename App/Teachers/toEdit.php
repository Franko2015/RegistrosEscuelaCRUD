<?php
include("../connection/conn.php");

$id=$_POST['id'];
$nombre=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$contraseña=$_POST['pswd'];

$consultaActualizar="UPDATE tblProfesor SET nombresProfesor='$nombre', apellidosProfesor='$apellido', contraseñaProfesor='$contraseña' WHERE idProfesor = '$id'";

$resultado= mysqli_query($con, $consultaActualizar);

if ($resultado) {
echo "<script>
		alert('Datos actualizados'); 
		window.location= 'index.php'
	</script>";
}else{
	echo "<script>alert('No han sido actualizados los datos');
			windows.history.go(-1);</script>";
}
?>
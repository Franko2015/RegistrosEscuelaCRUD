<?php
include("../connection/conn.php");

$id=$_POST['id'];
$nombre=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$contraseña=$_POST['pswd'];

$consultaActualizar="UPDATE tblAlumno SET nombresAlumno='$nombre', apellidosAlumno='$apellido', contraseñaAlumno='$contraseña' WHERE idAlumno = '$id'";

$resultado= mysqli_query($con, $consultaActualizar);

if ($resultado) {
echo "<script>
		alert('Datos actualizados'); 
		window.location= 'verAlumno.php'
	</script>";
}else{
	echo "<script>alert('No han sido actualizados los datos');
			windows.history.go(-1);</script>";
}
?>
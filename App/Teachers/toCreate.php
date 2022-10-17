<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("../connection/conn.php");

$nombre=$_POST['name'];
$apellido=$_POST['last_name'];
$contraseña=base64_encode($_POST['pswd']);

$consulta="INSERT INTO `tblProfesor` (nombresProfesor, apellidosProfesor, contraseñaProfesor, tipo) VALUES ('$nombre', '$apellido', '$contraseña', 'Profesor');";

$resultado=mysqli_query($con,$consulta);
if($resultado){
echo "<script>
		alert('La ficha del profesor ha sido creada'); 
		window.location= 'index.php'
	</script>";
mysqli_close($con);


}else{
	echo "<script>alert('No se pudo insertar'); windows.history.go(-1);</script>";
	header("Location: index.php");
}

?>
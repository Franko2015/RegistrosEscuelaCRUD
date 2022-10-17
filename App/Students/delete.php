<?php

include("../connection/conn.php");

$id=$_GET['id'];

$consultaEliminar="DELETE FROM tblAlumno WHERE idAlumno = '$id'";

$resultado= mysqli_query($con, $consultaEliminar);

if($resultado){
	
echo "<script>
		alert('El alumno ha sido eliminado'); 
		window.location= 'index.php'
	</script>";

}else{
	echo "<script>alert('No se pudo eliminar'); windows.history.go(-1);</script>";
}
?>
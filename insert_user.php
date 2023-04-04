<?php
	include('conn.php');
	$con = connection();
	
	$no = $_POST['nombre'];
	$ap = $_POST['apellidos'];
	$em = $_POST['correo'];
	$ti = $_POST['tipoUsuario'];
	$ci = $_POST['ci'];
	$co = $_POST['password'];
	$te = $_POST['telefono'];
	$di = $_POST['direccion'];
	


	$sql = "INSERT INTO users (nombre,apellido,email,tipoUsuario,ci,contraseña,telefono,direccion)".
	"values('$no','$ap','$em','$ti','$ci','$co','$te','$di')";
	$query = mysqli_query($con,$sql);
	if($query){
		header("location: index.html"); 
	}

?>
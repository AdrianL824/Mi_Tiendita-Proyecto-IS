<?php
	include('conn.php');
	$con = connection();
	
	$no = $_POST['nombre'];
	$ap = $_POST['apellido'];
	$em = $_POST['email'];
	$ti = $_POST['tipoUsuario'];
	$ci = $_POST['ci'];
	$co = $_POST['contraseña'];
	$te = $_POST['telefono'];


	$sql = "INSERT INTO users (nombre,apellido,email,tipoUsuario,ci,contraseña,telefono)".
	"values('$no','$ap','$em','$ti','$ci','$co','$te')";
	$query = mysqli_query($con,$sql);
	if($query){
		header("location: index.php"); 
	}

?>
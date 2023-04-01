<?php

	include('conn.php');
	$con = connection();

	$id = $_POST['id'];
	$na = $_POST['neame'];
	$la = $_POST['lastname'];
	$us = $_POST['username'];
	$pa = $_POST['password'];
	$em = $_POST['email'];
	
	$sql = "UPDATE users SET nombre = '$na', apellido= '$la' , username = '$us', password = '$pa' , email = '$em' WHERE id = '$id'";
	
	$query = mysqli_query($con,$sql);
	
	if($query){
		header("location: index.html"); 
	}

?>
<?php
	include('conn.php');
	$con = connection();
	$id = $_GET['id'];
	echo $id;
	$sql = "DELETE FROM users WHERE id = '$id'";
	$query  = mysqli_query($con, $sql);
	
	if($query){
		Header("location: index.php"); 
	}
?>
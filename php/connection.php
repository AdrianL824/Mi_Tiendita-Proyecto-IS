<?php
	function conn(){
		$conn = mysqli_connect("localhost","root","","ttienda");	
		return $conn;
	}
?>
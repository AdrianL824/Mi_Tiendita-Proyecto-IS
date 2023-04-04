<?php
	function conn(){
		$conn = mysqli_connect("localhost","root","osito2021","ttienda");	
		return $conn;
	}
?>
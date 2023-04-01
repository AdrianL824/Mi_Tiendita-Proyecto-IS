<?php
	function connection(){
		$conn = mysqli_connect('localhost','root','123','example');
		return $conn;		
	}

?>
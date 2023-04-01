<?php 
	include('conn.php');
	$con = connection();
	$id = $_GET['id'];

	$sql = "SELECT * FROM users WHERE id = '$id'";
	$query  = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edita info user</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="users-form">
		<form action="edit_user.php" method="POST">
			<h1>Editar usuario</h1>
			<input type="hidden" name = "id" value = "<?= $row['id'] ?>" >
			<input type="text" name = "neame" placeholder="nombre" value = "<?= $row['nombre'] ?>">
			<input type="text" name = "lastname" placeholder="apellido"value = "<?=$row['apellido'] ?>">
			<input type="text" name = "username" placeholder="name user"value = "<?=$row['username']?>">
			<input type="text" name = "password" placeholder="password"value = "<?=$row['password']?>">
			<input type="text" name = "email" placeholder="email"value = "<?=$row['email']?>">
			<input type="submit"  value="Actualizar user">
		</form>
	</div>
</body>
</html>
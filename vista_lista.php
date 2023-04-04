<?php
    include('php/connection.php');
    /*include('index.php');*/
    $con = conn();
    $sql = 'SELECT id, nombre, apellido, email, telefono,ci,direccion, tipo_usr FROM users';
    $query = mysqli_query($con,$sql);
    
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/app_modal_user.css">
    <link rel="stylesheet" href="css/lista_usr.css">
</head>
<body>
    <header class="header">
        <img class="imglogo" src="logito.png" alt="">
        <!-- Mi Tiendida -->
    </header>
    <nav class="nav">
        <ul class="list">


            <li class="list__item">
                <div class="list__button">
                    <a href="index.php" class="nav__link">Inicio</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <a href="#" class="nav__link">Usuario</a> 
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="form_validacion.html" class="nav__link nav__link--inside">Registrar usuario</a>
                    </li>
                    <li class="list__inside">
                        <a href="vista_lista.php" class="nav__link nav__link--inside">Lista de usuarios</a>
                    </li>
                </ul>
            </li>     
        </ul>
    </nav>
    <main class="main">
        <div class="users-table">
        <h2 style = "color : Blue; text-align:center;">Usuario Registrado</h2>
        <table>
            <thead> <!-- encabezado -->
                <tr>
                    <th width= "1px">Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>CI</th>
                    <!--th>Dirección</th-->
                    <th>Usuario</th>
                    <th width= "3px"></th>
                    <th ></th>
                </tr>
            </thead>
            <tbody><!-- cuerpo de la lista -->
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr style="font-size:15px;">
                    <th><?= $row['id']?></th>
                    <th><?= $row['nombre']?></th>
                    <th><?= $row['apellido']?></th>
                    <th><?= $row['email']?></th>
                    <th><?= $row['telefono']?></th>
                    <th><?= $row['ci']?></th>
                    <th><?= $row['tipo_usr']?></th>

                    <th><a href="#?id= <?= $row['id']?>" class = "users-table--edit">Editar</a></th>
                    <th><a href="#?id= <?= $row['id']?>" class = "users-table--delete">Eliminar</a></th>   
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>


    </main>
    
    <script src="js/main.js"></script>
	<script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>
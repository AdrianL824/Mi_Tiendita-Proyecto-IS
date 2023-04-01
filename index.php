
<?php

	include('conn.php');
	$con = connection();
	$sql = 'SELECT * FROM users';
	$query = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú despegable</title>
    <!--link rel="stylesheet" href="app.css"-->
    <link rel="stylesheet" href="app_form_user.css">
</head>
<body>
    <header class="header">
        logo
	</header>	
    <nav class="nav">
        <ul class="list">

            <li class="list__item">
                <div class="list__button">
                    <a href="index.html" class="nav__link">Inicio</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <a href="#" class="nav__link">Usuario</a> 
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="form_usr.html" class="nav__link nav__link--inside">Registrar Usuario</a>
                    </li>

                    <!-- <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                    </li> -->
                </ul>

            </li>

            <!-- <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <a href="#" class="nav__link">Proveedor</a>
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Regirtar proveedor</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                    </li>
                </ul>

            </li> -->

        </ul>
    </nav>
    <main class="main" >
        <h1 class= "titulo-seccion" >FORMULARIO DE REGISTRO</h1>
        <form action="insert_user.php" method = 'POST'>
            <table style= "margin: 0px auto; justify-content: center;">
               <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
              <tr>
                <td width= "380px">
                  <label for="">Nombres:</label><br>
                  <input type="text"  name= "nombre" placeholder="Ingrese nombres">
                </td>
                <td></td>
                <td colspan="2" >
                  <label for="tipo-usuario" >Tipo de Usuario:</label><br>
                  <select id = "tipo-usuario" name="tipoUsuario" Style = "color:gray;">
                      <option value="selecion_tipo_usuario">Seleccione tipo de usuario</option>
                      <option value="Vendedor ">Vendedor</option>
                      <option value="Almacenero">Almacenero</option>
                      <option value="Gerente">Gerente</option>
                  </select>
                  

                </td>
              </tr>

              <tr>
                <td>
                  <label for="">Apellidos:</label><br>
                  <input type="text" name= "apellido" placeholder="Ingrese apellidos">
                </td>
                <td></td>
                <td>
                  <label for="">Numero de telefono:</label><br>
                  <input type="text" name= "telefono" placeholder="Ingrese Número">
                </td>
                <td width="280px">
                  <label for="">CI</label>
                  <input type="text" name= "ci"placeholder="Ingrese ci">
                </td>
              </tr>
              <tr>
                <td>
                    <label for="">Correo electrónico:</label><br>
                    <input type="text" name= "email"placeholder="ejemplo@servidor.com">
                </td>
                <td></td>
                <td>
                  <label for="">Contraseña:</label><br>
                  <input type="text" name= "contraseña"placeholder="Ingrese Contraseña">
                </td>
                <td>
                  <label for="">Confirmar contraseña</label>
                  <input type="text" name= "contraseñaConf" placeholder="Ingrese Contraseña">
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td colspan= "2">
                    <input type= "submit" action="index.php" value= "Cancelar">
                    <input type="submit" value = "Guardar">
                </td>
                
              </tr>
            </table>   
            
        </form>
    </main>
    
    <script src="main.js"></script>
</body>
</html>

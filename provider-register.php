<?php
  require './config/config.php';
  require './helpers/providers.php';
  require './helpers/auth.php';

  sessionValidate();

  <?php
  if($_SERVER["REQUEST_METHOD"] == "POST") { //verifica si se ha enviado el formulario por POST
      $correo = isset($_POST["correo"]) ? $_POST["correo"] : ""; //obtiene el valor del campo de correo del formulario
      $contrasena = isset($_POST["contrasena"]) ? $_POST["contrasena"] : ""; //obtiene el valor del campo de contraseña del formulario
  
      if(empty($correo)) { //verifica si el campo de correo está vacío
          echo "El campo de correo está vacío"; //mensaje de error si el campo está vacío
      } else {
          $correo = ""; //vacía el campo de correo
      }
  
      if(empty($contrasena)) { //verifica si el campo de contraseña está vacío
          echo "El campo de contraseña está vacío"; //mensaje de error si el campo está vacío
      } else {
          $contrasena = ""; //vacía el campo de contraseña
      }
  }
  ?>
  <?php
  if($_SERVER["REQUEST_METHOD"] == "POST") { //verifica si se ha enviado el formulario por POST
      $nombre = $_POST["nombre"]; //obtiene el valor del campo de nombre del formulario
      $apellido = $_POST["apellido"]; //obtiene el valor del campo de apellido del formulario
      $ciudad = $_POST["ciudad"]; //obtiene el valor del campo de ciudad del formulario
      $categoria = $_POST["categoria"]; //obtiene el valor del campo de categoría del formulario
      $num_celular = $_POST["num_celular"]; //obtiene el valor del campo de número de celular del formulario
      $correo = $_POST["correo"]; //obtiene el valor del campo de correo electrónico del formulario
      $contrasena = $_POST["contrasena"]; //obtiene el valor del campo de contraseña del formulario
  
      if(empty($nombre)) { //verifica si el campo de nombre está vacío
          echo "El campo de nombre está vacío"; //mensaje de error si el campo está vacío
      } else {
          $nombre = ""; //vacía el campo de nombre
      }
  
      if(empty($apellido)) { //verifica si el campo de apellido está vacío
          echo "El campo de apellido está vacío"; //mensaje de error si el campo está vacío
      } else {
          $apellido = ""; //vacía el campo de apellido
      }
      >
  
  require './views/provider-register.view.php';

?>
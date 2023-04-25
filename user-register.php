<?php 
  require './config/config.php';
  require './helpers/users.php';


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    createUser($_POST);
<<<<<<< HEAD
  }

=======

    $pop = 'Usuario guardado exitosamente';
    header('location: '. RAIZ . "/user-register.php?pop=$pop");
  }
  
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
  require './views/user-register.view.php';

?>
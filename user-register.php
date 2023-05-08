<<<<<<< HEAD
<?php
  require './config/config.php';
  require './helpers/users.php';
  require './helpers/auth.php';

  sessionValidate();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    createUser($_POST);
=======
<?php 
  require './config/config.php';
  require './helpers/users.php';


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    createUser($_POST);
<<<<<<< HEAD
  }

=======
>>>>>>> feature/Reg_prov-btn_cancel

    $pop = 'Usuario guardado exitosamente';
    header('location: '. RAIZ . "/user-register.php?pop=$pop");
  }
  
<<<<<<< HEAD
=======
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
>>>>>>> feature/Reg_prov-btn_cancel
  require './views/user-register.view.php';

?>
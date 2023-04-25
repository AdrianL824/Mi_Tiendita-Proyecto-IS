<?php 
  require './config/config.php';
  require './helpers/users.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
<<<<<<< HEAD
    updateUser($_POST);
=======
    updateUser($_POST, (int) $_GET['id']);

    $pop = 'Usuario guardado exitosamente';
    header('location: '. RAIZ . "/users.php?pop=$pop");
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
  }

  $id = (int) $_GET['id'];
  $user = getUserByID($id);

  require './views/user-edit.view.php';

?>
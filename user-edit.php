<?php 
  require './config/config.php';
  require './helpers/users.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    updateUser($_POST, (int) $_GET['id']);

    $pop = 'Usuario guardado exitosamente';
    header('location: '. RAIZ . "/users.php?pop=$pop");
  }

  $id = (int) $_GET['id'];
  $user = getUserByID($id);

  require './views/user-edit.view.php';

?>
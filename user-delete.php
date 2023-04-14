<?php 
  require './config/config.php';
  require './helpers/users.php';


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = (int) $_GET['id'];
    deleteUser($id);

    $pop = "Usuario eliminado correctamente";
    header('location: '. RAIZ . '/users.php?pop=' . $pop);
  }

?>
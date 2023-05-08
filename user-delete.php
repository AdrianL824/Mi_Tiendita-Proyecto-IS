<?php 
  require './config/config.php';
  require './helpers/users.php';


<<<<<<< HEAD
=======
  

>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = (int) $_GET['id'];
    deleteUser($id);

<<<<<<< HEAD
    header('location: '. RAIZ . '/users.php');
=======
    $pop = "Usuario eliminado correctamente";
    header('location: '. RAIZ . '/users.php?pop=' . $pop);
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
  }

?>
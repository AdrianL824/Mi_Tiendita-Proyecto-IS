<?php
  require './config/config.php';
  require './helpers/users.php';
  require './helpers/providers.php';
  require './helpers/products.php';
  require './helpers/files.php';
  require './helpers/auth.php';

  sessionValidate();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = isset($_GET['id']) ? (int) $_GET['id'] : "";

    $url;

    switch($_GET['type']){

      case 'users':
        deleteUser($id);
        $pop = "Usuario eliminado correctamente";
        $url = '/users.php?pop=' . $pop;
      break;

      case 'providers':
        deleteProvider($id);
        $pop = "Proveedor eliminado correctamente";
        $url = '/providers.php?pop=' . $pop;
      break;

      case 'products':
        $product = getProductByID($id);
        deleteProduct($id);

        deleteFile($product['thumb'], 'products');
        $pop = "Producto eliminado correctamente";
        $url = '/products.php?pop=' . $pop;
      break;
    }
    header('location: '. RAIZ . $url);
  }else{

    $url;

    switch($_GET['type']){
      case 'session':
        closeSession();
        $pop = "Sesion Finalizada";
        $url = '/login.php?pop=' . $pop;
      break;
    }
  
    header('location: '. RAIZ . $url);
  }

?>
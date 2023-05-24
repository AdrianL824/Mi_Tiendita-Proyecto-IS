<?php
  require './config/config.php';
  require './helpers/products.php';
  require './helpers/providers.php';
  require './helpers/files.php';
  require './helpers/auth.php';

  sessionValidate();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_POST['image'] = saveImage($_FILES['imagen'], 'products'); 
    $user_id = (int) $_SESSION['user']['id'];
    createProduct($_POST, $user_id);

    $pop = 'Producto guardado exitosamente';
    header('location: '. RAIZ . "/product-register.php?pop=$pop");
  }

  $providers = getProviders();
  
  require './views/product-register.view.php';

?>
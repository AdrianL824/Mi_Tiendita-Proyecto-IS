<?php
  require './config/config.php';
  require './helpers/products.php';
  require './helpers/files.php';
  require './helpers/auth.php';

  sessionValidate();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = (int) $_GET['id'];

    if($_FILES['imagen']['size'] == 0){
      updateProduct($_POST, $id);
    }else{
      $product = getProductByID($id);
      deleteFile($product['thumb'], 'products');
      $_POST['image'] = saveImage($_FILES['imagen'], 'products');
      updateFileProduct($_POST, $id);
    }

    $pop = 'Producto guardado exitosamente';
    header('location: '. RAIZ . "/products.php?pop=$pop");
  }

  $id = (int) $_GET['id'];
  $product = getProductByID($id);
  $providers = getProviders();

  require './views/product-edit.view.php';

?>
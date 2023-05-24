<?php
  require './config/config.php';
  require './helpers/products.php';
  require './helpers/providers.php';
  require './helpers/shops.php';
  require './helpers/users.php';
  require './helpers/auth.php';

  sessionValidate();


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = (int) $_GET['id'];

    $user_id = (int) $_SESSION['user']['id'];
    $product = getProductByID($id);
    $_POST["provider_id"] = getProviderByName($_POST["provider_selected"], $product['product_type'])["id"];
    $_POST["product_id"] = $id;

    createShop($_POST, $user_id);
  }


  $id = (int) $_GET['id'];
  $product = getProductByID($id);
  $providers = getProviderByType($product['product_type']);

  require './views/shopping.view.php';

?>
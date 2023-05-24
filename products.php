<?php
  require './config/config.php';
  require './helpers/products.php';
  require './helpers/shops.php';
  require './helpers/users.php';
  require './helpers/auth.php';

  sessionValidate();

  $products = getProducts();
  
  require './views/products.view.php';

?>
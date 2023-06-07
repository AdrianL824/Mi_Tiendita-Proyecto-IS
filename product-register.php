<?php
//configuraciones
  require './config/config.php';
  require './helpers/products.php';
  require './helpers/providers.php';
  require './helpers/files.php';
  require './helpers/auth.php';

  sessionValidate();

  

  $providers = getProvidersNoRepeat();
  
  require './views/product-register.view.php';

?>
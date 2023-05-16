<?php
  require './config/config.php';
  require './helpers/providers.php';
  require './helpers/users.php';
  require './helpers/auth.php';

  sessionValidate();

  $providers = getProviders();
  

?>
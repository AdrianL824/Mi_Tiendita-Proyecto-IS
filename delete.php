<?php
  require './config/config.php';
  require './helpers/users.php';
  require './helpers/providers.php';
  require './helpers/auth.php';

  sessionValidate();

  $url;

  switch($_GET['type']){
    case 'session':
      closeSession();
      $pop = "Sesion Finalizada";
      $url = '/login.php?pop=' . $pop;
    break;
  }

?>
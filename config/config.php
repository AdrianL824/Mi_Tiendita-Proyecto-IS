<?php

  require './config/db.php';

<<<<<<< HEAD
  define('RAIZ', 'http://localhost/ProyectoIS/Mi_Tiendita-Proyecto-IS');
=======
  define('RAIZ', 'http://localhost/Mi_Tiendita-Proyecto-IS');
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1


  $DB_CONFIG = [
    'host' => 'sql9.freesqldatabase.com',
    'port' => '3306',
    'name' => 'sql9611059',
    'user' => 'sql9611059',
    'pass' => 'LkcxBGFRwD'
  ];

  define('CONNECT', conexion($DB_CONFIG));

?>
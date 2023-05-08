<<<<<<< HEAD
<?php session_start();

  require './config/db.php';

  define('RAIZ', 'http://localhost:7200/tiendita');
=======
<?php

  require './config/db.php';

<<<<<<< HEAD
  define('RAIZ', 'http://localhost/ProyectoIS/Mi_Tiendita-Proyecto-IS');
=======
  define('RAIZ', 'http://localhost/Mi_Tiendita-Proyecto-IS');
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
>>>>>>> feature/Reg_prov-btn_cancel


  $DB_CONFIG = [
    'host' => 'sql9.freesqldatabase.com',
    'port' => '3306',
    'name' => 'sql9611059',
    'user' => 'sql9611059',
    'pass' => 'LkcxBGFRwD'
  ];

<<<<<<< HEAD
  if(isset($_SESSION['user'])){
    $AUTH = $_SESSION['user'];
  }

=======
>>>>>>> feature/Reg_prov-btn_cancel
  define('CONNECT', conexion($DB_CONFIG));

?>
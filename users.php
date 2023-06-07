<<<<<<< HEAD
<?php
  require './config/config.php';
  require './helpers/users.php';
  require './helpers/auth.php';

  sessionValidate();
=======
<?php 
  require './config/config.php';
  require './helpers/users.php';
>>>>>>> feature/Reg_prov-btn_cancel

  $users = getUsers();
  

  require './views/users.view.php';

?>
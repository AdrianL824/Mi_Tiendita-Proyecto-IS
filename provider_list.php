<?php
  require './config/config.php';
  require './helpers/providers.php';
  require './helpers/users.php';
  require './helpers/auth.php';

  sessionValidate();

  $providers = getProviders();
  

  require './views/providers.view.php';

?>
<html>
<body>
  <h1>
    lista de productos
  </h1>
</body>

</html>
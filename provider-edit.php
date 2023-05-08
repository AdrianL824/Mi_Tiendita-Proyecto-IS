<?php
  require './config/config.php';
  require './helpers/providers.php';
  require './helpers/auth.php';

  if(isset($_POST['submit'])){
    $id = (int) $_GET['id'];
    updateProvider($_POST, $id);
    header('Location: ' . RAIZ . '/providers.php?pop=' . urlencode('Proveedor guardado exitosamente'));
    exit();
}

$id = (int) $_GET['id'];
$provider = getProviderByID($id);

require './views/provider-edit.view.php';
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
  <?php
  require('../layout/header.php');
  require_once('../../controller/UserController.php');
  $perfil = new perfilInformation();
  $userPerfil = $perfil->showProfile();
  echo $userPerfil['NickName'];
  ?>
</body>
<br><br><br><br><br><p><a href="../components/cerrarSesion.php">Cerrar Sesion</a></p>
</html>
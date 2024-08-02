<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  require_once('../../controller/UserController.php');

  $perfil = new perfilInformation();
  $userPerfil = $perfil->showProfile();
  echo $userPerfil['NickName'];
  ?>
</body>
</html>
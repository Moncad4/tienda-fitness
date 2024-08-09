<?php
require_once('../../controller/UserController.php');
$perfil = new perfilInformation();
$userPerfil = $perfil->showProfile();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/perfil.css">
</head>
<body class="body-perfil">
  <?php
  require('../layout/header.php');
  ?>

  <div class="titulo-perfil">
    <h1>Perfil</h1>
  </div>
  <div class="container-perfil">
    <div class="subContainer-perfil">
      <div class="perfil-content-izquierda">
        <img src="../img/pared-verde.jpeg" alt="">
        <h2>Cliente</h2>
      </div>

      <div class="perfil-content-derecha">
        <h2>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
          </svg>
          <span>Nombre: <?php echo $userPerfil['NickName']?></span>
        </h2>

        <h2>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
          </svg>
          <span>Apellido: <?php echo $userPerfil['LastName']?></span>
        </h2>

        <h2>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
          <path d="M3 7l9 6l9 -6" />
        </svg>
          <span>Correo: <?php echo $userPerfil['Email']?></span>
        </h2>
      </div>
    </div>
</div>
</body>
</html>
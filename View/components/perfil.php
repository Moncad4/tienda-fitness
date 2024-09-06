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
  <title>Perfil de Usuario</title>
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/perfil.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="body-perfil">
  <?php require('../layout/header.php'); ?>

  <section class="perfil-container">
    <div class="perfil-info">
      <div class="perfil-picture">
        <img src="../img/nosotros-inicio.jpg" alt="Perfil">
        <h4><?php echo $userPerfil['NickName'] . ' ' . $userPerfil['LastName']; ?></h4>
      </div>

      <div class="perfil-actions">
        <a href="#" class="perfil-action-button">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
          </svg>
          <span>Perfil</span>
        </a>

        <a href="#" class="perfil-action-button">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5" />
            <path d="M12 12l8 -4.5" />
            <path d="M8.2 9.8l7.6 -4.6" />
            <path d="M12 12v9" />
            <path d="M12 12l-8 -4.5" />
          </svg>
          <span>Pedidos</span>
        </a>

        <a href="#" class="perfil-action-button">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-history" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 8l0 4l2 2" />
            <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
          </svg>
          <span>Historial</span>
        </a>
      </div>
    </div>

    <div class="perfil-details">
      <div class="detail-item">
        <h3>Nombre</h3>
        <span><?php echo $userPerfil['NickName']; ?></span>
      </div>

      <div class="detail-item">
        <h3>Apellido</h3>
        <span><?php echo $userPerfil['LastName']; ?></span>
      </div>

      <div class="detail-item">
        <h3>Correo</h3>
        <span><?php echo $userPerfil['Email']; ?></span>
      </div>
    </div>
  </section>
</body>
</html>

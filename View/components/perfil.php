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

  <section class="container-sectionPerfil">
    <div class="subContainer-deailsPerfil">
      <div class="picture-Perfil">
        <img src="../img/nosotros-inicio.jpg" alt="">
        <h4> <?php echo $userPerfil['NickName']; echo ' '; echo $userPerfil['LastName']; ?> </h4>
      </div>

      <div class="container-buttonsPerfil">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
      </svg>

      <button class="buttonPerfil" type="button">
        <span class="name-buttonPerfil">Perfil</span>
          <span class="icon-buttonPerfil">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-badge-right-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M7 6l-.112 .006a1 1 0 0 0 -.669 1.619l3.501 4.375l-3.5 4.375a1 1 0 0 0 .78 1.625h6a1 1 0 0 0 .78 -.375l4 -5a1 1 0 0 0 0 -1.25l-4 -5a1 1 0 0 0 -.78 -.375h-6z" stroke-width="0" fill="currentColor" />
            </svg>
          </span>
      </button>
      </div>

      <div class="container-buttonsPerfil">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5" />
        <path d="M12 12l8 -4.5" />
        <path d="M8.2 9.8l7.6 -4.6" />
        <path d="M12 12v9" />
        <path d="M12 12l-8 -4.5" />
      </svg>

      <button class="buttonPerfil" type="button">
        <span class="name-buttonPerfil">Pedidos</span>
        <span class="icon-buttonPerfil">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-badge-right-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M7 6l-.112 .006a1 1 0 0 0 -.669 1.619l3.501 4.375l-3.5 4.375a1 1 0 0 0 .78 1.625h6a1 1 0 0 0 .78 -.375l4 -5a1 1 0 0 0 0 -1.25l-4 -5a1 1 0 0 0 -.78 -.375h-6z" stroke-width="0" fill="currentColor" />
          </svg>
        </span>
      </button>
      </div>

      <div class="container-buttonsPerfil">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-history" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 8l0 4l2 2" />
        <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
      </svg>

      <button class="buttonPerfil" type="button">
        <span class="name-buttonPerfil">Historial</span>
        <span class="icon-buttonPerfil">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-badge-right-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M7 6l-.112 .006a1 1 0 0 0 -.669 1.619l3.501 4.375l-3.5 4.375a1 1 0 0 0 .78 1.625h6a1 1 0 0 0 .78 -.375l4 -5a1 1 0 0 0 0 -1.25l-4 -5a1 1 0 0 0 -.78 -.375h-6z" stroke-width="0" fill="currentColor" />
          </svg>
        </span>
      </button>
      </div>
    </div>

    <div class="subContainer-informationPerfil">
      <div class="information-nickName">
        <h3>Nombre</h3>
        <span> <?php echo $userPerfil['NickName'] ?> </span>
      </div>

      <div class="information-lastName">
        <h3>Apellido</h3>
        <span> <?php echo $userPerfil['LastName'] ?> </span>
      </div>

      <div class="information-email">
        <h3>Correo</h3>
        <span> <?php echo $userPerfil['Email'] ?> </span>
      </div>

    </div>
  </section>
</body>
<!-- echo $userPerfil['NickName'] -->
</html>
<?php
define('BASE_URL', 'http://localhost/tienda-fitness/');
require_once __DIR__ . '/../../controller/UserController.php';
$perfil = new headerInformation();
$userPerfil = $perfil->showProfileHeader();
?>

<link rel="stylesheet" href="../css/header.css">

<body class="">
    <header class="container-header">
      <nav class="navegador">
        <div class="contenedor-logo">
          <a href="<?php echo BASE_URL; ?>View/principal.php"><h2>Fitprogmer</h2></a>
        </div>
        <div class="div-list-nav">
          <ul class="list-nav">
            <li class="principal-btns"><a href="<?php echo BASE_URL; ?>View/principal.php">Inicio</a></li>
            <li class="principal-btns"><a href="<?php echo BASE_URL; ?>View/components/tienda.php">Tienda</a></li>
            <li class="principal-btns"><a href="#">Nosotros</a></li>
            <li class="principal-btns"><a href="<?php echo BASE_URL; ?>View/components/ayudas.php">Ayudas</a></li>
            <li class="principal-btns"><a href="#">Contacto</a></li>
            <li class="inicio-sesion principal-btns">
                <?php if(isset($userPerfil)){ ?>
                <ul class="menu-inicioSesion">
                  <li>
                  <a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                      <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                      <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                    </svg>
                    <span>Cuenta&#11167;</span>
                  </a>
                  <ul>
                    <li><a href="<?php echo BASE_URL; ?>View/components/perfil.php">Perfil</a></li>
                    <li><a href="<?php echo BASE_URL; ?>View/components/cerrarSesion.php">Cerrar sesion</a></li>
                  </ul>
                  </li>
                </ul>
                <?php } else { ?>
                  <a href="<?php echo BASE_URL; ?>View/components/iniciarSesion.php">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                      <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                      <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                    </svg>
                  <span>Iniciar Sesion</span>
                  </a>
                <?php } ?>
            </li>





            <li class="carrito-compras">
              <div class="icon-cart">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                  <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                  <path d="M17 17h-11v-14h-2" />
                  <path d="M6 5l14 1l-1 7h-13" />
                </svg>
                <span>0</span>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    
    <div class="cartTab">
    <h2>Carrito de compras</h2>
    <div id="cartTab"></div>
    <div class="btn-carrito">
      <button class="close-carrito">Close</button>
      <button class="checkout-carrito">Check Out</button>
    </div>

    </div>
  <script src="../js/carrito-compra.js"></script>
</body>

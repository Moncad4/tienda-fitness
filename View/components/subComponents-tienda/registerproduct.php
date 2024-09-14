<link rel="stylesheet" href="../../css/registerproduct.css">
<link rel="stylesheet" href="../../css/tienda.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


<?php
define('BASE_URL', 'http://localhost/tienda-fitness/');
require_once('../../../controller/UserController.php');
require_once __DIR__ . '/../../../controller/productController.php';
$perfil = new perfilInformation();
$userPerfil = $perfil->showProfile();

$detailsControllerProduct = new ProductoController();
$productos = $detailsControllerProduct->viewProductoController();

$detailsControllerProduct = new ProductConsultingModel();
$total = $detailsControllerProduct->ConsultingProductoModel();

$detailsUserController = new UserConsultingModel();
$totalUser = $detailsUserController->ConsultingUserModel();
?>

<body class="bgadm">
<div>
<nav class="nav-dashboard">
  <div class="navdiv-img">
    <img src="../../img/entrenador.png" class="admilogo" alt="">
    <span class="NameUserBanner"> <?php echo $userPerfil['NickName']?></span>
  </div> 
  <div class="navright-items">
  ♥ <a href="<?php echo BASE_URL; ?>View/components/cerrarSesion.php">◙</a>  
  <div>
</nav>
<div class="dashboard-admin">
  <div class="divdashboard-left">
    <aside class="leftnavasidecontainer">
      <ul class="uldadboard-left">
      <label for="">Discover</label>
        <li><button class="leftnavaside principalProductoBoton">♪ Principal</button></li>
        <li class="leftnavaside">♠ 2</li>
        <li class="leftnavaside">♦ 3</li>
      </ul>
      <ul class="uldadboard-left">
      <label for="">Tools</label>
        <li><button class="leftnavaside registerProductBoton">◙ Registrar</button></li>
        <li><button href="" class="leftnavaside eliminarProductBoton">♀ Eliminar</button></li>
        <li><button class="leftnavaside modificarProductBoton">► Modificar</button></li>
      </ul>
      <ul class="uldadboard-left">
        <label for="">Finance</label>
        <li class="leftnavaside">↨ 1</li>
        <li class="leftnavaside">↑ 2</li>
        <li class="leftnavaside">↓ 3</li>
      </ul>
    </aside>
  </div>
  <div class="dashboard-principal">
    <div class="dbprincipal-gridtop">
      <div class="gridquarter">
        <h2>
          <?php echo $total; ?>
        </h2>
        <br>
        <span class="dashboardproductcounter">
          Total de productos
        </span>
      </div>
      <div class="gridquarter">
        <h2>
          <?php echo $totalUser; ?>
        </h2>
        <br>
        <span class="dashboardproductcounter">
          Usuarios registrados
        </span>
      </div>
      <div class="gridquarter">33</div>
      <div class="gridquarter">44</div>
    </div>
    <div class="dbprincipal-gridbottom">
      <div class="gripquarterbottom">55</div>
      <div class="gripquarterbottom">66</div>
    </div>
  </div>
  <!-- registro de productos -->
  <div class="dashbardpresentacion">
    <div class="bgregistercontainer-admi dashboardadministrator-add">
      <div class="register-containerAdm1 containderAdm-view" id="register">
        <form class="form-style" action="../../../index.php" method = "post" enctype = "multipart/form-data"> 
          <div class="top">
            <label for="">Registrar productos</label>
          </div>
          <div class="input-box">
              <div class="input-box">
                  <input type="text" class="input-field" placeholder="Nombre del producto" name="product" required>
              </div>
          </div>

          <div class="input-box">
              <input type="number" class="input-field" placeholder="Precio del producto" name="price" required>
          </div>

          <div class="input-box">
              <input type="number" class="input-field" placeholder="Descuento del producto" name="discount" required>
          </div>

          <div class="input-box">
              <input type="number" class="input-field" placeholder="Precio y vista del descuento" name="priceDiscount" required>
          </div>

          <!-- imagen -->
          <div class="input-box">
              <input type="file" class="input-field" placeholder="Imagen" name="image1" required>
            </div>

            <div class="input-box">
                <textarea type="text" class="input-field" placeholder="Descripcion" name="description" required></textarea>
            </div>
            
            <div class="input-box">
                <input type="hidden" name = "accionProduct" value = "RegisterProduct" >
                <input type="submit" value="Registrar Producto" class="submit">
            </div>
        </form>
      </div>
    </div>
<!-- Modificación de productos -->
    <div class="bgregistercontainer-admi dashboardadministrator-edict">
        <div class="dashboardedict-container" id="register">
            <div class="edict-tittle">
              <label for="">Modificar productos</label>
            </div>
              <?php foreach($productos as $producto){ ?>  
                <div class="dashboardedict-cartgridproductcontent">
                    <div class="dashboardelete-infoproducts">
                      <div class="dashboardelete-titleproduct"> 
                        <h3 class="dashboardelete-idproduct">ID</h3><?php echo $producto['product_id'] ?>
                        <h3><?php echo $producto['tittle'] ?></h3>
                      </div>
                      <div class="dashboardelete-imgproductcontainer">
                        <img class="dashboardelete-imgproduct" src="../../../imgProduct/<?php echo $producto['image'] ?>" alt=""></p> 
                        <div class="dashboardelete-parrproduct">
                          <p> 
                          <br>Precio: <?php echo $producto['price'] ?>
                          <br>Descuento: <?php echo $producto['discount'] ?>
                          <br>Precio con descuento: <?php echo $producto['priceDiscount'] ?>
                          </p>
                        </div>
                      </div>
                      <div class="dashboardedict-svgcotainer">
                        <a href="#modal-<?php echo $producto['product_id']; ?>" class="addcart-text detailsproducts-link">
                          <svg class="dashboardedict-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/>
                          </svg>
                        </a>
                      <!-- esta parte se edita con el css y javascript de la tienda -->
                        <div id="modal-<?php echo $producto['product_id']; ?>" class="detailsproducts-modal">
                          <div class="detailsproductsmodal-content">
                            <div class="detailsproducts-header">
                              <span class="detailsproducts-x">
                                <a href="#" class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" />
                                  </svg>
                                </a>
                              </span> 
                            </div>

                            <div class="register-containerAdm1 containderAdm-view" id="register">
                              <form class="form-style" action="../../../index.php" method = "post" enctype = "multipart/form-data"> 
                                <div class="top">
                                  <label for="">Registrar productos</label>
                                </div>
                                <div class="input-box">
                                  <div class="input-box">
                                    <input type="text" class="input-field" placeholder="Nombre del producto" name="product" value="<?= $producto['tittle'] ?>" required>
                                  </div>
                                </div>

                                <div class="input-box">
                                  <input type="number" class="input-field" placeholder="Precio del producto" name="price" value="<?= $producto['price'] ?>" required>
                                </div>

                                <div class="input-box">
                                  <input type="number" class="input-field" placeholder="Descuento del producto" name="discount" value="<?= $producto['discount'] ?>" required>
                                </div>

                                <div class="input-box">
                                  <input type="number" class="input-field" placeholder="Precio y vista del descuento" name="priceDiscount" value="<?= $producto['priceDiscount'] ?>" required>
                                </div>

                                <!-- imagen -->
                                <div class="input-box">
                                  <input type="file" class="input-field" placeholder="Imagen" name="image1" value="<?= $producto['image'] ?>" required>
                                </div>

                                <div class="input-box">
                                  <textarea class="input-field" placeholder="Descripción" name="description" required><?= $producto['description'] ?></textarea>
                                </div>
  
                                <div class="input-box">
                                    <input type="hidden" name = "accionProduct" value = "RegisterProduct" >
                                    <input type="submit" value="Registrar Producto" class="submit">
                                </div>
                              </form>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                </div>
              <?php } ?>
        </div>
    </div>
    <!-- Eliminación de productos -->
    <div class="bgregistercontainer-admi dashboardadministrator-delete">
      <div class="dashboardelete-container" id="register">
          <div class="delete-tittle">
            <label for="">Eliminar productos</label>
          </div>
            <?php foreach($productos as $producto){ ?>  
              <div class="dashboardelete-cartgridproductcontent">
                  <div class="dashboardelete-infoproducts">
                    <div class="dashboardelete-titleproduct"> 
                      <h3 class="dashboardelete-idproduct">ID</h3><?php echo $producto['product_id'] ?>
                      <h3><?php echo $producto['tittle'] ?></h3>
                    </div>
                    <div class="dashboardelete-imgproductcontainer">
                      <img class="dashboardelete-imgproduct" src="../../../imgProduct/<?php echo $producto['image'] ?>" alt=""></p> 
                      <div class="dashboardelete-parrproduct">
                        <p> 
                        <br>Precio: <?php echo $producto['price'] ?>
                        <br>Descuento: <?php echo $producto['discount'] ?>
                        <br>Precio con descuento: <?php echo $producto['priceDiscount'] ?>
                        </p>
                      </div>
                    </div>
                    <div class="dashboardelete-svgcotainer">
                      <form action="../../../controller/dashboardeleteproduct.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $producto['product_id']; ?>">
                        <button type="submit" class="delete-button">
                          <svg class="dashboardelete-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                          </svg>
                        </button>
                      </form>
                    </div>
                  </div>
              </div>
            <?php } ?>
      </div>
    </div>
  </div>
</div>
    
<script src="../../js/dashboard.js"></script>
</body>


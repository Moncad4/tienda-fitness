<link rel="stylesheet" href="../../css/registerproduct.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


<?php
define('BASE_URL', 'http://localhost/tienda-fitness/');
require_once('../../../controller/UserController.php');
require_once __DIR__ . '/../../../controller/productController.php';
$perfil = new perfilInformation();
$userPerfil = $perfil->showProfile();
$detailsControllerProduct = new ProductoController();
$productos = $detailsControllerProduct->viewProductoController();
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
      <div class="gridquarter">11</div>
      <div class="gridquarter">22</div>
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
      <div class="register-containerAdm1 containderAdm-view" id="register">
      <form class="form-style" action="../../../index.php" method = "post" enctype = "multipart/form-data"> 
          <div class="top">
            <label for="">Modificar productos</label>
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
                <input type="submit" value="Modificar Producto" class="submit">
            </div>
        </form>
      </div>
    </div>
    <!-- Eliminación de productos -->
    <div class="bgregistercontainer-admi dashboardadministrator-delete">
      <div class="dashboardelete-container" id="register">
          <div class="top delete-tittle">
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


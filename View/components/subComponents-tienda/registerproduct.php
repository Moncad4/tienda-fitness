<link rel="stylesheet" href="../../css/registerproduct.css">
<?php
define('BASE_URL', 'http://localhost/tienda-fitness/');
require_once('../../../controller/UserController.php');
$perfil = new perfilInformation();
$userPerfil = $perfil->showProfile();
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
    
    <div class="bgregistercontainer-admi dashboardadministrator-delete">
      <div class="register-containerAdm1 containderAdm-view" id="register">
      <form class="form-style" action="../../../index.php" method = "post" enctype = "multipart/form-data"> 
          <div class="top">
            <label for="">Eliminar productos</label>
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
                <input type="submit" value="Eliminar Producto" class="submit">
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../../js/dashboard.js"></script>
</body>


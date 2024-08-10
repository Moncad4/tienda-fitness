

<link rel="stylesheet" href="../../css/iniciarSesion.css">
<body class="bgadm">
<div>
<nav class="nav-dashboard">
  <span><!-- <?php $userPerfil['NickName']?> -->User</span>
  ♥ ◙  
</nav>
<div class="dashboard-admin">
  <div class="divdashboard-left">
    <aside class="leftnav">
      <ul class="uldadboard-left">
      <label for="">Discover</label>
        <li class="leftnavaside">1</li>
        <li class="leftnavaside">2</li>
        <li class="leftnavaside">3</li>
      </ul>
      <ul class="uldadboard-left">
      <label for="">Tools</label>
        <li class="leftnavaside">1</li>
        <li class="leftnavaside">2</li>
        <li class="leftnavaside">3</li>
      </ul>
      <ul class="uldadboard-left">
        <label for="">Finance</label>
        <li class="leftnavaside">1</li>
        <li class="leftnavaside">2</li>
        <li class="leftnavaside">3</li>
      </ul>
    </aside>
  </div>
  <div class="bgregistercontainer-admi">
    <div class="register-containerAdm containderAdm-view" id="register">
      <form action="../../../index.php" method = "post" enctype = "multipart/form-data"> 
        <div class="top">
            <header>Registrar productos</header>
        </div>
        <div class="two-forms">
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Nombre del producto" name="product" required>
                <i class="bx bx-user"></i>
            </div>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Precio del producto" name="price" required>
            <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Descuento del producto" name="discount" required>
            <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Precio y vista del descuento" name="priceDiscount" required>
            <i class="bx bx-envelope"></i>
        </div>
        <!-- imagen -->
        <!-- <div class="input-box">
            <input type="load" class="input-field" placeholder="Imagen" name="image" required>
            <i class="bx bx-lock-alt"></i>
          </div> -->
          <div class="input-box">
              <textarea type="text" class="input-field" placeholder="Descripcion" name="description" required></textarea>
              <i class="bx bx-user"></i>
          </div>
          <div class="input-box">
              <input type="hidden" name = "accionProduct" value = "RegisterProduct" >
              <input type="submit" value="Register Product" class="submit">
          </div>
      </form>
    </div>
  </div>
</div>
</body>
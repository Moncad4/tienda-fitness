<link rel="stylesheet" href="../../css/iniciarSesion.css">
<body class="bgadm">
  <div class="register-containerAdm" id="register">
    <form action="../../../index.php" method = "post" enctype = "multipart/form-data"> 
      <div class="top">
          <header>Registrar productos</header>
      </div>
      <div class="two-forms">
          <div class="input-box">
              <input type="text" class="input-field" placeholder="Nombre del producto" name="product" required>
              <i class="bx bx-user"></i>
          </div>
          <div class="input-box">
              <textarea type="text" class="input-field" placeholder="Descripcion" name="description" required></textarea>
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
            <input type="hidden" name = "accionProduct" value = "RegisterProduct" >
            <input type="submit" value="Register Product" class="submit">
        </div>
    </form>
  </div>
</body>
<link rel="stylesheet" href="../../css/iniciarSesion.css">

<body class="bglogin">
  <div class="login-containerAdm " id="login">
    <form action="../../../index.php" method="post" enctype="multipart/form-data">
        <div class="top">
          <header>Login</header>
        </div>
        <div class="input-box">
          <input required type="text" class="input-field" name="Email" placeholder="Email">
          <i class="bx bx-user"></i>
        </div>
        <div class="input-box">
          <input required type="password" class="input-field" name="Passwords" placeholder="Password">
          <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
          <input type="hidden" name="accionAdm" value="Iniciar_SesionAdm">
          <input type="submit" class="submit" value="Iniciar Sesion">
        </div>
        <div class="two-col">
          <div class="two">
            <label><a href="#">Forgot password?</a></label>
          </div>
        </div>
    </form>
  </div>
</body>
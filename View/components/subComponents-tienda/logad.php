<link rel="stylesheet" href="../../css/iniciarSesion.css">
<link rel="stylesheet" href="../../css/registerproduct.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<body class="bglogin">
  <div class="login-containerAdm" id="login">
    <form class="form-panelAdm" action="../../../index.php" method="post" enctype="multipart/form-data">
        <div class="top">
          <p class="title-PanelAdm" for="">Panel de Administrador</p>
        </div>
        <div class="inputAdm-box">
          <input required type="text" class="input-field" name="Email" placeholder="Email">
        </div>
        <div class="inputAdm-box">
          <input required type="password" class="input-field" name="Passwords" placeholder="Password">
        </div>
        <div class="inputAdm-box">
          <input type="hidden" name="accionAdm" value="SesionAdm">
          <input type="submit" class="submit" value="SesionAdm">
        </div>
        <div class="two-col">
          <div class="two">
            <label><a href="#">Forgot password?</a></label>
          </div>
        </div>
    </form>
  </div>
</body>
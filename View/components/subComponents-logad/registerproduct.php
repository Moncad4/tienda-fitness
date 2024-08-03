<link rel="stylesheet" href="../../css/iniciarSesion.css">

<div class="register-containerAdm" id="register">
  <form action="../../index.php" method = "post" enctype = "multipart/form-data"> 
    <div class="top">
        <header>Sign Up</header>
    </div>
    <div class="two-forms">
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Firstname" name="Nick" required>
            <i class="bx bx-user"></i>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Lastname" name="Last" required>
            <i class="bx bx-user"></i>
        </div>
    </div>
    <div class="input-box">
        <input type="text" class="input-field" placeholder="Email" name="Email" required>
        <i class="bx bx-envelope"></i>
    </div>
    <div class="input-box">
        <input type="password" class="input-field" placeholder="Password" name="Pass" required>
        <i class="bx bx-lock-alt"></i>
    </div>
    <div class="input-box">
        <input type="hidden" name = "accion" value = "Register" >
        <input type="submit" value="Register" name = "Register" class="submit">
    </div>     
  </form>
</div>
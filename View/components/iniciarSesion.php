<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/iniciarSesion.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <title>Login & Register</title>
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <a href="./iniciarSesion.php">LOGO</a>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="../principal.php" class="link">Inicio</a></li>
                <li><a href="./tienda.php" class="link">Tienda</a></li>
                <li><a href="#" class="link">Nosotros</a></li>
                <li><a href="./ayudas.php" class="link">Ayudas</a></li>
                <li><a href="#" class="link">Contactos</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->
        <div class="login-container" id="login">
        <form action="../../index.php" method="post" enctype="multipart/form-data">
                <div class="top">
                    <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
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
                  <input type="hidden" name="accion" value="Iniciar_Sesion">
                  <input type="submit" class="submit" value="Iniciar Sesion">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check">
                        <label for="login-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
            </form>
        </div>
        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
        <form action="../../index.php" method = "post" enctype = "multipart/form-data">
            
                <div class="top">
                    <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                    <header>Sign Up</header>
                </div>
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Firstname" name="Nick" requered>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Lastname" name="Last" requered>
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email" name="Email" requered>
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name="Pass" requered>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="hidden" name = "accion" value = "Register" >
                    <input type="submit" value="Register" name = "Register" class="submit">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="register-check">
                        <label for="register-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Terms & conditions</a></label>
                    </div>
                </div>
            
        </form>
        </div>
    </div>
</div>   

<script src="../js/login.js"></script>

</body>
</html>
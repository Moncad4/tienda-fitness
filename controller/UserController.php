<?php
session_start();
require_once(__DIR__.'/../model/UserModel.php');

// Registra los usuarios
class UsersControllerReg{
  public function Registro(){
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
          $Nick = $_POST['Nick'];
          $last = $_POST['Last'];
          $email = $_POST['Email'];
          $pass = $_POST['Pass'];

          $user = new UserModelReg();
          $registro =  $user->SignUpUser($Nick, $last, $email, $pass);

          if($registro){
              echo '<script>alert("REGISTRO EXITOSO");
                  window.location.href = "View/principal.php";
              </script>';
              exit;
          }
          else{
              echo 'ERROR AL REGISTRAR';
          }
      }
  }
}

// Login de usuarios
class LogInController{
  public function LogIn(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $email = $_POST['Email'];
      $pass = $_POST['Passwords'];

      // Validar las credenciales
      $userModel = new UserModelLogIn();
      $user = $userModel->VerificarCredenciales($email, $pass);

      if($user){
        //Inicio exitoso
        $_SESSION['id_usuario'] = $user['id'];
        // $_SESSION['email_usuario'] = $user['Email'];
        // $_SESSION['nombre_usuario'] = $user['NickName'];
        header('location: View/principal.php');
        exit;
      }else{
        echo '<script>alert("CREDENCIALES INCORRECTAS");</script>';
        header('location: View/components/iniciarSesion.php');
        exit;
      }
    } 
  }
}

// Sesiones de usuario verifica y restringe
class perfilInformation{
  public function showProfile(){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }if(isset($_SESSION['id_usuario'])){
      $user_id = $_SESSION['id_usuario'];
      $userModel = new userModel();
      $usuario = $userModel->getUserById($user_id);
      return $usuario;
    }else{
      error_log("Redireccionando a iniciarSesion.php porque no se encontró la sesión ID");
      header('Location: ../../View/components/iniciarSesion.php');
      exit;
    }
  }
}

// Menu desplegable de usuarios 
class headerInformation{
  public function showProfileHeader(){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }if(isset($_SESSION['id_usuario'])){
      $user_id = $_SESSION['id_usuario'];
      $userModel = new userModel();
      $usuario = $userModel->getUserById($user_id);
      return $usuario;
    }else{
      error_log("Redireccionando a iniciarSesion.php porque no se encontró la sesión ID");
    }
  }
}

// Login administrator panel
class LogInAdmController{
  public function LogInAdm(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $emailAdm = $_POST['Email'];
      $passAdm = $_POST['Passwords'];

      // Validar las credenciales
      $userModelAdm = new UserModelLogInAdm();
      $userAdm = $userModelAdm->VerificarCredencialesAdm($emailAdm, $passAdm);
      
      if($userAdm){
        $_SESSION['id_usuario'] = $userAdm['id'];
        header('location: View/components/subComponents-tienda/registerproduct.php');
        exit;
      }else{
        echo '<script>alert("CREDENCIALES INCORRECTAS");</script>';
        header('location: View/components/subComponents-tienda/logad.php');
        exit;
      }
    } 
  }
}
?>

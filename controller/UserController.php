<?php
require_once(__DIR__.'/../Model/UserModel.php');

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
        $_SESSION['email_usuario'] = $user['Email'];
        $_SESSION['contraseña_usuario'] = $user['Passwords'];
        $rol = $user['Rol'];
        if($rol === 'Administrador'){
            header('Location: View/principal.php');
            exit;
        }else{
            echo '<script>alert("No se encontro el Usuario");</script>';
            header('Location: View/components/iniciarSesion.php');
            exit;
        }
        
    }else{
        echo '<script>alert("CREDENCIALES INCORRECTAS");</script>';
      }
    } 
  }
}
?>
?>
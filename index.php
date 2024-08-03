<?php
require_once(__DIR__.'/controller/UserController.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['accion'])){
        if($_POST['accion'] === 'Register'){
          $userscontroller = new UsersControllerReg();
          $userscontroller->Registro();
        }elseif($_POST['accion'] === 'Iniciar_Sesion'){
          $logincontroller = new LogInController();
          $logincontroller->LogIn();
        }
    }
    if (isset($_POST['accionAdm']) && $_POST['accionAdm'] === 'Iniciar_SesionAdm'){
      $admcontroller = new LogInAdmController();
      $admcontroller->LogInAdm();
    }
}
?>
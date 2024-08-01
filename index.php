<?php
require_once(__DIR__.'/Controller/UserController.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['accion'])){
        if($_POST['accion'] === 'Register'){
            $userscontroller = new UsersControllerReg();
            $userscontroller->Registro();
        }
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['accionLogIn'])){
      if($_POST['accionLogIn'] === 'Iniciar_Sesion'){
          $logincontroller = new LogInController();
          $logincontroller->LogIn();
      }
  }
}
?>
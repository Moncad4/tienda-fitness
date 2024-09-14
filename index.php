<?php
require_once(__DIR__.'/controller/productController.php');
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
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['accionProduct'])){
      if($_POST['accionProduct'] === 'RegisterProduct'){
        $productcontroller = new ProductControllerReg();
        $productcontroller->RegistroProduct();
      }
    }
  }

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if (isset($_POST['accionAdm'])){
    if ($_POST['accionAdm'] === 'SesionAdm'){
      $admcontroller = new LogInAdmController();
      $admcontroller->LogInAdm();
    } 
  } 
} 
?>
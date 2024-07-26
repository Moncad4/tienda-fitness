<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/ayudas.css">
</head>
<body>
  <div class="background-ayudas">
  <?php
  require '../layout/header.php';
  ?>
  
    <section class="section-comp-ayudas">
      <h2>Ayudas</h2>
      <div class="container-comp-ayudas">
        <a href="#">
          <div class="subContainer-comp-ayudas grasa-ayudas">
            <img src="../img/ayudas/perdida-grasa.jpg" alt="">
          </div>
          <div class="subContainer2-comp-ayudas">
            <h3>¿Como quemar grasa?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt architecto voluptatum dolor 
            reprehenderit cupiditate ullam sit libero itaque dolore molestias beatae aperiam ratione quasi.</p>
          </div>
        </a>
      </div>

      <div class="container-comp-ayudas agua-ayudas">
        <a href="#">
          <div class="subContainer-comp-ayudas">
            <img src="../img/ayudas/tomar-agua.jpg" alt="">
          </div>
          <div class="subContainer2-comp-ayudas">
            <h3>¿Por que tomar mas agua?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore veniam dicta dignissimos
            facere, corrupti eius, cum qui eaque eum earum ratione praesentium omnis quod error. Sapiente doloribus!</p>
          </div>
        </a>
      </div>

      <div class="container-comp-ayudas dieta-ayudas">
        <a href="">
          <div class="subContainer-comp-ayudas">
            <img src="../img/ayudas/dieta.jpg" alt="">
          </div>
          <div class="subContainer2-comp-ayudas">
            <h3>Dietas para ganar masa muscular</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam soluta distinctio repellendus facilis minima! 
            Commodi omnis saepe debitis aspernatur voluptate eaque repellat doloribus est amet, numquam quibusdam!</p>
          </div>
        </a>
      </div>
    </section>
  </div>

  <?php
  require '../footer/footer.php'
  ?>
</body>
</html>
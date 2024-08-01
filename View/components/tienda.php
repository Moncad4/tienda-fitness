<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/tienda.css">
</head>
<body>
  <?php
    require '../layout/header.php';
  ?>  
  <div class="mainshop-container">
    <aside class="main-shop-aside">
      <h2>Filtrar Productos</h2>
        <div class="main-shop-filter">
            <h3>Precio</h3>
            <label for="price-min">Mínimo:</label>
            <input type="number" id="price-min" name="price-min" min="0">
            
            <label for="price-max">Máximo:</label>
            <input type="number" id="price-max" name="price-max" min="0">
        </div>
        
        <div class="main-shop-filter">
            <h3>Marca</h3>
            <label><input type="checkbox" name="brand" value="marca1"> Marca 1</label>
            <label><input type="checkbox" name="brand" value="marca2"> Marca 2</label>
            <label><input type="checkbox" name="brand" value="marca3"> Marca 3</label>
        </div>
        
        <div class="main-shop-filter">
            <h3>Categoría</h3>
            <label><input type="checkbox" name="category" value="categoria1"> Categoría 1</label>
            <label><input type="checkbox" name="category" value="categoria2"> Categoría 2</label>
            <label><input type="checkbox" name="category" value="categoria3"> Categoría 3</label>
        </div>
        
        <div class="main-shop-filter">
            <h3>Valoración</h3>
            <div class="days-btn-container">
              <input class="day-btn" id="onestars" type="checkbox" checked="true" />
              <label class="day-label2" for="onestars">1</label>

              <input class="day-btn" id="twostars" type="checkbox" checked="true" />
              <label class="day-label2" for="twostars">2</label>

              <input class="day-btn" id="threestars" type="checkbox" checked="true" />
              <label class="day-label2" for="threestars">3</label>

              <input class="day-btn" id="fourstars" type="checkbox" checked="true" />
              <label class="day-label2" for="fourstars">4</label>

              <input class="day-btn" id="fivestar" type="checkbox" checked="true" />
              <label class="day-label2" for="fivestar">5</label>
            </div>
        </div>
        
        <button type="button" class="filter-button">Aplicar Filtros</button>
    </aside>
    <section class="main-shop">
        <div class="main-shop-publicity">
          <img src="../img/bannershop.jpg" alt="">
        </div>
        <div class="main-shop-searchs">Resultados de 
        </div>
        <div class="main-shop-navfilters">
          <p class="mainshop-navfiltertex">Ordenar por
            <button class="main-shop-btnfilters mainshop-btnfilters-efect2">Top ventas</button>
            <button class="main-shop-btnfilters mainshop-btnfilters-efect2">Ultimo agregado</button>
            <button class="main-shop-btnfilters mainshop-btnfilters-efect2">Promociones</button> 
            <select class="mainshop-btnfil main-shop-btnfilters" name="" id="">
              <option value="">Menor precio</option>
              <option value="">Mayor precio</option>
              <option value="">Top ventas</option>
            </select>
          </p>
        </div>
        <article>
          <div class="articleshop-cards">
            <div class="articleshop-maincards artmaincard1">
              <img class="products-shop" src="../img/tienda/product1.jpeg" alt="">
              <div class="product-information">
                <button class="cart-btn">
                  <span class="icon-container"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  <p class="addcart-text">
                    Add to Cart
                  </p>
                </button>   
                <p class="addcart-text addcart-textindi">
                    Detalles...
                </p>  
              </div>
            </div>
            <div class="articleshop-maincards artmaincard2">
              <img class="products-shop" src="../img/tienda/product2.jpg" alt="">
              <div class="product-information"> 
                <button class="cart-btn">
                  <span class="icon-container"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  <p class="addcart-text">
                    Add to Cart
                  </p>
                </button>  
                <p class="addcart-text addcart-textindi">
                    Detalles...
                </p>   
              </div> 
            </div>
            <div class="articleshop-maincards artmaincard3">
              <img class="products-shop" src="../img/tienda/product3.jpg" alt="">
              <div class="product-information">
                <button class="cart-btn">
                  <span class="icon-container"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  <p class="addcart-text">
                    Add to Cart
                  </p>
                </button> 
                <p class="addcart-text addcart-textindi">
                    Detalles...
                </p>    
              </div> 
            </div>
            <div class="articleshop-maincards artmaincard4">
              <img class="products-shop" src="../img/tienda/suplemento4.PNG" alt="">
              <div class="product-information">
                <button class="cart-btn">
                  <span class="icon-container"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  <p class="addcart-text">
                    Add to Cart
                  </p>
                </button>   
                <p class="addcart-text addcart-textindi">
                    Detalles...
                </p>  
              </div>
            </div>
            <div class="articleshop-maincards artmaincard5">
              <img class="products-shop" src="../img/tienda/product5.jpeg" alt="">
              <div class="product-information">
                  <button class="cart-btn">
                    <span class="icon-container"> 
                      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                    </span>
                    <p class="addcart-text">
                      Add to Cart
                    </p>
                  </button>   
                  <p class="addcart-text addcart-textindi">
                      Detalles...
                  </p>  
                </div>
              </div>
            <div class="articleshop-maincards artmaincard6">
              <img class="products-shop" src="../img/tienda/product6.jpeg" alt="">
              <div class="product-information">
                <button class="cart-btn">
                  <span class="icon-container"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  <p class="addcart-text">
                    Add to Cart
                  </p>
                </button>   
                <p class="addcart-text addcart-textindi">
                    Detalles...
                </p>  
              </div>
            </div>
            <div class="articleshop-maincards artmaincard7">
              <img class="products-shop" src="../img/tienda/product7.jpg" alt="">
              <div class="product-information">
                <button class="cart-btn">
                  <span class="icon-container"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  <p class="addcart-text">
                    Add to Cart
                  </p>
                </button>   
                <p class="addcart-text addcart-textindi">
                    Detalles...
                </p>  
              </div>
            </div>
            <div class="articleshop-maincards artmaincard8">
              <img class="products-shop" src="../img/tienda/product8.jpeg" alt="">
              <div class="product-information">
                <button class="cart-btn">
                  <span class="icon-container"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  <p class="addcart-text">
                    Add to Cart
                  </p>
                </button>   
                <p class="addcart-text addcart-textindi">
                    Detalles...
                </p>  
              </div>
            </div>
            <div class="articleshop-maincards artmaincard9">
              <img class="products-shop" src="../img/tienda/product9.jpeg" alt="">
              <div class="product-information">
                <button class="cart-btn">
                  <span class="icon-container"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  <p class="addcart-text">
                    Add to Cart
                  </p>
                </button>   
                <p class="addcart-text addcart-textindi">
                    Detalles...
                </p>  
              </div>
            </div>
          </div>
      </article>
    </section>
  </div>
    
  <?php
  require '../footer/footer.php'
  ?>
</body>

<?php
    session_start();

    if($_SESSION['user'] == '123'){
    } else{
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Llamamos nuestros estilos -->
    <link rel="stylesheet" href="css/styleClient.css">
    <!-- Tipografía 1 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <!-- Tipografía 2 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Space+Grotesk&display=swap" rel="stylesheet">

</head>

<body>
        
    <header id="header">
        <h1>Shooping car</h1>
        <div>
            <img class="carrito" id="carrito" src="assets/carrito.png" alt="">
            <div id="numero"></div>
        </div>
        
    </header>

    <main>

        <div class="contenedor" id="contenedor">
            <div>
                <img src="assets/img1.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Luna</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img2.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Queen</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img3.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Fe</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img4.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Rich vagos</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img5.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Nube Naruto</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img6.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Rayo</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img7.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Allien</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img8.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Dona</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img9.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Dinosaurio</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img10.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Bill</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img11.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Fantasma</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img12.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Banana</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img13.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Harry Potter</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img14.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Peace</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

            <div>
                <img src="assets/img15.jpg" alt="produc 1">
                <div class="informacion">
                    <p>Puerquito</p>
                    <p class="precio">$180<span>.99</span></p>
                    <button>Comprar</button>
                </div>
            </div>

        </div>

        <a href="index.php" class="btn-flotante">Exit</a>


    </main>
    

    <div id="contenedorCompra">
        <div class="informacionCompra" id="informacionCompra">
            <h2>Cesta</h2>
            <p class="x" id="x">x</p>
        </div>

        <div class="productosCompra" id="productosCompra"></div>
        <div class="total" id="total"></div>
        <button>Finalizar Compra</button>
    </div>
    <script src="js/app.js"></script>
</body>


</html>
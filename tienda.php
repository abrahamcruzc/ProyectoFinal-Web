<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>SneakerBoutique</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="logo-titulo">
                <a href="index.php">
                    <i class="fa-regular fa-circle-dot"></i>
                    <h1>SneakerBoutique</h1>
                </a>
            </div>
            <nav id="nav">
                <a href="index.php" class="selected">Inicio</a>
                <a href="tienda.php">Tienda</a>
                <!--   <a href="blog.html">Blog</a>-->
                <a href="contacto.php">Contacto</a>
                <a href="favoritos.php">Favoritos</a>
                <!-- icono cerrar menu responsive -->
                <span id="close-responsive">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </nav>
            <!-- Boton de login -->
            <form action="login.php">
                <button class="btn-longin">Iniciar Sesión</button>
            </form>

            <div id="nav-responsive">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="carrito">
                <a href="carrito.php"><!--Debe marcar el numero de productos dentro del carrito-->
                    <span class="icono-carrito">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <?php
                            // Inicializar el contador de productos en el carrito
                            $cantidadProductos = 0;

                            // Verificar si hay productos en el carrito
                            if (!empty($_SESSION['tienda'])) {
                                // Sumar la cantidad total de productos, incluyendo las cantidades de productos idénticos
                                foreach ($_SESSION['tienda'] as $detalles) {
                                    $cantidadProductos += $detalles['cantidad'];
                                }
                            }
                        ?>
                        <div class="total-item-carrito">
                            <?php echo $cantidadProductos; ?>
                        </div>
                    </span>
                </a>
            </div>
        </header>

        <section class="contenedor-seccion">
            <div class="fondo-seccion"></div>
            <div class="header-seccion">
                <div class="col">
                    <strong><span class="link-blanco">Inicio</span> / Tienda</strong>
                </div>
                <div class="centro">
                    <h2>Shop</h2>
                </div>
                <div class="col busqueda"><!--La cola de busqueda debe ordenar los productos como se especifica abajo-->
                    <strong>Resultados (1-6)</strong> 
                    <select name="" id="">
                        <option value="">Todos los productos</option>
                        <option value="">Por precio</option>
                        <option value="">Por modelo</option>
                    </select>
                </div>
            </div>

            <section id="productos" class="productos">
                <div class="fila">
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><a href="carrito.php?producto=tenis1"><i class="fa-solid fa-bag-shopping"></i></a></span>
                        </header>
                        <a href="producto1.php">
                            <div class="contenido">
                                <div class="fondo orange">
                                    <div class="circulo"></div>
                                </div>
                                <img src="img/air.png" alt="">
                                <h2>Nike Air Force 1High '07</h2>
                                <h2>$2,899</h2>
                            </div>
                        </a>

                    </div>
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><a href="carrito.php?producto=tenis2"><i class="fa-solid fa-bag-shopping"></i></a></span>
                        </header>
                        
                        <a href="producto2.html">
                            <div class="contenido">
                                <div class="fondo blue">
                                    <div class="circulo"></div>
                                </div>
                                <img src="img/hippie.png" alt="">
                                <h2>Nike Space Hippie</h2>
                                <h2>$2,300</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><a href="carrito.php?producto=tenis3"><i class="fa-solid fa-bag-shopping"></i></a></span><!--Este es el icono para agregar este porducto al carrito-->
                        </header>
                        
                        <a href="producto3.html">
                            <div class="contenido">
                                <div class="fondo green">
                                    <div class="circulo"></div>
                                </div>
                                <img src="img/jordan.png" alt="">
                                <h2>Air Jordan 1 Hihg</h2>
                                <h2>$4,599</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="fila">
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><a href="carrito.php?producto=tenis4"><i class="fa-solid fa-bag-shopping"></i></a></span><!--Este es el icono para agregar este porducto al carrito-->
                        </header>
                        
                        <a href="producto4.html">
                            <div class="contenido">
                                <div class="fondo green">
                                    <div class="circulo"></div>
                                </div>
                                <img src="img/blazer.png" alt="">
                                <h2>Nike Blazer Mid'77 Vintage</h2>
                                <h2>$2,599</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><a href="carrito.php?producto=tenis5"><i class="fa-solid fa-bag-shopping"></i></a></span><!--Este es el icono para agregar este porducto al carrito-->
                        </header>
                        
                        <a href="producto5.html">
                            <div class="contenido">
                                <div class="fondo orange">
                                    <div class="circulo"></div>
                                </div>
                                <img src="img/crater.png" alt="">
                                <h2>Nike Crater Impact</h2>
                                <h2>$2,300</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><a href="carrito.php?producto=tenis6"><i class="fa-solid fa-bag-shopping"></i></a></span>
                        </header>
                        
                        <a href="producto6.html">
                            <div class="contenido">
                                <div class="fondo blue">
                                    <div class="circulo"></div>
                                </div>
                                <img src="img/dunk.png" alt="">
                                <h2>Nike Dunk Low Retro</h2>
                                <h2>$2,600</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>
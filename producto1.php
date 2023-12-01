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
                <a href="carrito.php">
                    <span class="icono-carrito">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <div class="total-item-carrito">
                            2
                        </div>
                    </span>
                </a>
            </div>
        </header>

        <section class="contenedor-seccion">
            <div class="fondo-seccion"></div>
            <div class="header-seccion">
                <div class="col">
                    <strong><span class="link-blanco">Inicio</span> / Producto Detalle</strong>
                </div>
                <div class="centro">
                    <h2>Detalle del Producto</h2>
                </div>
                <div class="col busqueda">
                    <a href="producto2.html">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <section class="detalle-producto">
                <div class="fila">
                    <div class="col izquierda">
                        <h3>Nike Air Max 270 to Chuck Taylors</h3>
                        <p>Átate los cordones 100 % reciclados y empieza con buen pie en el running gracias a la suavidad de las Nike Air Max 270. </p>
                        <div class="miniaturas">
                            <img src="img/mini-shoes1.png" alt="" class="mini-selected" onclick="setMini('0')">
                            <img src="img/mini-shoes2.png" alt="" onclick="setMini('1')">
                            <img src="img/mini-shoes3.png" alt="" onclick="setMini('2')">
                        </div>

                    </div>
                    <div class="col centro">
                        <div class="img-producto" id="img-producto">
                            <img src="img/air.png" alt="" id="imgProducto">
                            <h3 class="precio-producto">$20,000.00</h3>
                        </div>
                    </div>
                    <div class="col derecha">
                        <div class="info-detalle">
                            Review:
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            4.5 (60)
                        </div>
                        <div class="info-detalle"><!--Hacer funcional el cambio de colores para los productos-->
                            Color:
                            <input type="radio" class="color1" checked name="color">
                            <input type="radio" class="color2" name="color"> 
                            <input type="radio" class="color3" name="color"> 
                            <input type="radio" class="color4" name="color">  
                        </div>
                        <div class="info-detalle">
                            Size:
                            <button class="size-selected" onclick="setSize(0)">39</button>
                            <button onclick="setSize(1)">40</button>
                            <button onclick="setSize(2)">42</button>
                        </div>

                        <a class="btn-agregar-carrito" href="carrito.php?producto=tenis1">Agregar al Carrito</a><!--Botón para añadir producto-->
                    </div>
                </div>
            </section>

            <h2 class="subtitulo-seccion">Productos Relacionados</h2>
            
            <section id="productos" class="productos">
                <div class="fila">
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><a href="favoritos.php?producto=tenis1"><i class="fa-solid fa-heart"></i></a></span>
                            <span class="cart"><a href="carrito.php?producto=tenis1"><i class="fa-solid fa-bag-shopping"></i></a></span>
                        </header>
                        <a href="producto.php">
                            <div class="contenido">
                                <div class="fondo orange">
                                    <div class="circulo"></div>
                                </div>
                                <img src="img/air.png" alt="">
                                <h2>Air Force 1 High'07</h2>
                                <h2>$2,899</h2>
                            </div>
                        </a>

                    </div>
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><a href="favoritos.php?producto=tenis1"><i class="fa-solid fa-heart"></i></a></span>
                            <span class="cart"><a href="carrito.php?producto=tenis1"><i class="fa-solid fa-bag-shopping"></i></a></span>
                        </header>
                        
                        <a href="producto2.html">
                            <div class="contenido">
                                <div class="fondo blue">
                                    <div class="circulo"></div>
                                </div>
                                <img src="img/hippie.png" alt="">
                                <h2>Nike Space Hippie</h2>
                                <h2>$2,300</h2>>
                            </div>
                        </a>
                    </div>
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><a href="favoritos.php?producto=tenis1"><i class="fa-solid fa-heart"></i></a></span>
                            <span class="cart"><a href="carrito.php?producto=tenis1"><i class="fa-solid fa-bag-shopping"></i></a></span>
                        </header>
                        
                        <a href="#">
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
                            <span class="like"><a href="favoritos.php?producto=tenis1"><i class="fa-solid fa-heart"></i></a></span>
                            <span class="cart"><a href="carrito.php?producto=tenis1"><i class="fa-solid fa-bag-shopping"></i></a></span>
                        </header>
                        
                        <a href="#">
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
                            <span class="like"><a href="favoritos.php?producto=tenis1"><i class="fa-solid fa-heart"></i></a></span>
                            <span class="cart"><a href="carrito.php?producto=tenis1"><i class="fa-solid fa-bag-shopping"></i></a></span>
                        </header>
                        
                        <a href="#">
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
                            <span class="like"><a href="favoritos.php?producto=tenis1"><i class="fa-solid fa-heart"></i></a></span>
                            <span class="cart"><a href="carrito.php?producto=tenis1"><i class="fa-solid fa-bag-shopping"></i></a></span>
                        </header>
                        
                        <a href="#">
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
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
            <a href="dashboard.html" class="selected">Inicio</a>
            <a href="tienda.php" >Productos</a>
            <a href="administradores.html">Administradores</a>
            <a href="usuarios.html">Usuarios</a>
            <span id="close-responsive">
                    <i class="fa-solid fa-xmark"></i>
                </span>
        </nav>
        <div id="nav-responsive">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="carrito">
            </a>
        </div>
    </header>

    <section class="contenedor-seccion">
        <div class="fondo-seccion"></div>
        <div class="header-seccion">
            <div class="col">
                <strong><span class="link-blanco">Administrador</span> / Inicio</strong>
            </div>
            <div class="centro">
                <h2>Administrador</h2>
            </div>
        </div>

        <section class="detalle-producto">
            <div class="fila">
                <section class="add-products">
                    <h2>Agregar Producto</h2>
                    <form id="product-form" enctype="multipart/form-data">
                        <label for="product-name">Nombre del Producto:</label>
                        <input type="text" id="product-name" name="product-name" required>

                        <label for="product-price">Precio del Producto:</label>
                        <input type="number" id="product-price" name="product-price" required>

                        <label for="product-image">Imagen del Producto:</label>
                        <input type="file" id="product-image" name="product-image" accept="image/*" required>

                        <label for="product-description">Descripción del Producto:</label>
                        <textarea id="product-description" name="product-description" rows="4" required></textarea>

                        <button type="submit">Agregar Producto</button>
                    </form>
                </section>
            </div>
        </section>

    </section>
    </section>
    </section>
</div>

<script src="script.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'db_connection.php';

// Realizar consulta SQL para obtener productos
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar productos
        while ($row = $result->fetch_assoc()) {
            echo "<div class='producto'>";
            echo "<img src='" . $row['imagen'] . "' alt='" . $row['nombre'] . "'>";
            echo "<h3>" . $row['nombre'] . "</h3>";
            echo "<p>Precio: $" . $row['precio'] . "</p>";
            // Puedes agregar más detalles según tu esquema de base de datos
            echo "<a href='tienda.php?producto=" . $row['id'] . "'>Agregar al carrito</a>";
            echo "</div>";
        }
    } else {
        echo "No hay productos disponibles.";
    }

// Cerrar conexión
    $conn->close();
}

?>

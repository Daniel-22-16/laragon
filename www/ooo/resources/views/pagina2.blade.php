<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videojuegos Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0a0a0a;
            color: #fff;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        /* Estilos para el encabezado */
        header {
            background-color: #000;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        /* Estilos para la barra de navegación */
        nav {
            background-color: #222;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
        }
        /* Estilos para el contenido principal */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
            justify-items: center;
        }
        .product-card {
            background-color: #222;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .product-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .product-card h2 {
            margin: 10px 0;
            font-size: 1.5rem;
        }
        .product-card p {
            margin: 5px 0;
            font-size: 1rem;
        }
        .product-card button {
            background-color: #00ccff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .product-card button:hover {
            background-color: #00b3e6;
        }
        /* Estilos para el pie de página */
        footer {
            background-color: #000;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Videojuegos Store</h1>
    </header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Catálogo</a>
        <a href="#">Ofertas</a>
        <a href="#">Contacto</a>
    </nav>
    <div class="container">
        <div class="product-grid">
            <div class="product-card">
                <img src="https://via.placeholder.com/250" alt="Nombre del juego">
                <h2>Nombre del Juego</h2>
                <p>Precio: $XX.XX</p>
                <button>Agregar al carrito</button>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250" alt="Nombre del juego">
                <h2>Nombre del Juego</h2>
                <p>Precio: $XX.XX</p>
                <button>Agregar al carrito</button>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250" alt="Nombre del juego">
                <h2>Nombre del Juego</h2>
                <p>Precio: $XX.XX</p>
                <button>Agregar al carrito</button>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250" alt="Nombre del juego">
                <h2>Nombre del Juego</h2>
                <p>Precio: $XX.XX</p>
                <button>Agregar al carrito</button>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250" alt="Nombre del juego">
                <h2>Nombre del Juego</h2>
                <p>Precio: $XX.XX</p>
                <button>Agregar al carrito</button>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250" alt="Nombre del juego">
                <h2>Nombre del Juego</h2>
                <p>Precio: $XX.XX</p>
                <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
    <footer>
        <p>Videojuegos Store &copy; 2024</p>
    </footer>
</body>
</html>

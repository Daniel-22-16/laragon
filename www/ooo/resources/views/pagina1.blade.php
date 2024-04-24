<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videojuegos Store</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #666;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        section {
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .product {
            background-color: #ffaa00;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: 300px;
            text-align: left;
            animation: changeColor 5s infinite alternate;
        }
        .product img {
            max-width: 100%;
            border-radius: 8px;
        }
        .product h2 {
            margin-top: 0;
        }
        .product p {
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 4px;
            padding: 5px 10px;
            display: inline-block;
        }
        @keyframes changeColor {
            0% { background-color: #ffaa00; }
            25% { background-color: #00ffaa; }
            50% { background-color: #aa00ff; }
            75% { background-color: #ff00aa; }
            100% { background-color: #aaff00; }
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
    <section>
        <div class="product">
            <img src="https://elcomercio.pe/resizer/QrtCqC24s2duI7MeCg4TOAT-ueo=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/7JNEJLD6VFHZJO45MVT2JVUBTI.jpg" alt="Dota 2" width="200" height="200">
            <h2>Dota 2</h2>
            <p>Precio: $9.99</p>
            <button>Agregar al carrito</button>
        </div>
        <div class="product">
            <img src="https://t2.tudocdn.net/622409?w=824&h=494" alt="Nombre del juego" width="200" height="200">
            <h2>mobile legends</h2>
            <p>Precio: $5.99</p>
            <button>Agregar al carrito</button>
        </div>
        <div class="product">
            <img src="https://cdn.akamai.steamstatic.com/steam/apps/1928420/header.jpg?t=1710147691" alt="Nombre del juego" width="200" height="200">
            <h2>farlight 84</h2>
            <p>Precio: $12.99</p>
            <button>Agregar al carrito</button>
        </div>
    </section>
    <footer>
        <p>Videojuegos Store &copy; 2024</p>
    </footer>
</body>
</html>

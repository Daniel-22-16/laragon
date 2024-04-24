<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Ropa</title>
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
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
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
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .product:hover {
            transform: translateY(-5px);
        }
        .product img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .product h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }
        .product p {
            color: #555;
            font-size: 18px;
        }
        .product button {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .product button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tienda de Ropa</h1>
    </header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Catálogo</a>
        <a href="#">Ofertas</a>
        <a href="#">Contacto</a>
    </nav>
    <section>
        <div class="product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuGLJuztgF1LnF7CVOTWimwgYXi2f6yaxP8A&usqp=CAU" alt="Camisa" width="200" height="200">
            <h2>Camisa de Manga Corta</h2>
            <p>Precio: $29.99</p>
            <button>Agregar al Carrito</button>
        </div>
        <div class="product">
            <img src="https://hips.hearstapps.com/hmg-prod/images/4387028711-1-1-1-641c02a47c2fa.jpg?crop=0.661xw:0.441xh;0.151xw,0.268xh&resize=640:*" alt="Pantalón" width="200" height="200">
            <h2>Pantalón Chino</h2>
            <p>Precio: $39.99</p>
            <button>Agregar al Carrito</button>
        </div>
        <div class="product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJ0EU8feHyxLRBKVoVn6EiGE9WOYJyALkWpw&usqp=CAU" alt="Vestido" width="200" height="200">
            <h2>Vestido Floral</h2>
            <p>Precio: $49.99</p>
            <button>Agregar al Carrito</button>
        </div>
    </section>
    <footer>
        <p>Tienda de Ropa &copy; 2024</p>
    </footer>
</body>
</html>

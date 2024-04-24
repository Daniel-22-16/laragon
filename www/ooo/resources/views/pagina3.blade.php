<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artistas de Música</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        a {
            color: #333;
            text-decoration: none;
        }
        /* Estilos para el encabezado */
        header {
            background-color: #333;
            padding: 20px;
            text-align: center;
            color: #fff;
        }
        header h1 {
            margin: 0;
        }
        /* Estilos para la barra de navegación */
        nav {
            background-color: #666;
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
        .artist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
            justify-items: center;
        }
        .artist-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .artist-card:hover {
            transform: translateY(-10px);
        }
        .artist-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .artist-card h2 {
            margin: 10px 0;
            font-size: 1.5rem;
        }
        .artist-card p {
            margin: 5px 0;
            font-size: 1rem;
        }
        .artist-card button {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .artist-card button:hover {
            background-color: #ff4d00;
        }
        /* Estilos para el pie de página */
        footer {
            background-color: #333;
            padding: 20px;
            text-align: center;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Artistas de Música</h1>
    </header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Pop</a>
        <a href="#">Rock</a>
        <a href="#">Rap</a>
        <a href="#">Country</a>
    </nav>
    <div class="container">
        <div class="artist-grid">
            <div class="artist-card">
                <img src="https://via.placeholder.com/250" alt="Nombre del artista">
                <h2>Nombre del Artista</h2>
                <p>Género: Pop</p>
                <button>Ver detalles</button>
            </div>
            <div class="artist-card">
                <img src="https://via.placeholder.com/250" alt="Nombre del artista">
                <h2>Nombre del Artista</h2>
                <p>Género: Rock</p>
                <button>Ver detalles</button>
            </div>
            <div class="artist-card">
                <img src="https://via.placeholder.com/250" alt="Nombre del artista">
                <h2>Nombre del Artista</h2>
                <p>Género: Rap</p>
                <button>Ver detalles</button>
            </div>
            <div class="artist-card">
                <img src="data:image/webp;base64,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" alt="Nombre del artista">
                <h2>Nombre del Artista</h2>
                <p>Género: Country</p>
                <button>Ver detalles</button>
            </div>
        </div>
    </div>
    <footer>
        <p>Artistas de Música &copy; 2024</p>
    </footer>
</body>
</html>

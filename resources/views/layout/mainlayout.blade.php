<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conservación de la Biodiversidad</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #0b2202;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50; /* Verde */
            color: #fff;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Estilos para la sección hero */
        .hero {
            background-image: url('imagen_hero.jpg');
            background-size: cover;
            text-align: center;
            padding: 60px;
            color: #fff;
        }

        .hero h2 {
            font-size: 36px;
        }

        .hero p {
            font-size: 18px;
            margin: 20px 0;
        }

        .hero a {
            display: inline-block;
            background-color: #4CAF50; /* Verde */
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        /* Estilos para la sección info */
        .info {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info h2 {
            color: #4CAF50; /* Verde */
            font-size: 24px;
        }

        .info p {
            font-size: 16px;
        }

        /* Estilos para el pie de página */
        footer {
            background-color: #4CAF50; /* Verde */
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        /* Estilos para enlaces */
        a {
            color: #4CAF50; /* Verde */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Conservación de la Biodiversidad</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Avistamientos</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p>&copy; 2023 Conservación de la Biodiversidad</p>
    </footer>
</body>
</html>
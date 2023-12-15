<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        div {
            padding: 20px;
        }
    </style>
    <!-- Puedes incluir aquí tus estilos, scripts, meta tags, etc. -->
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('ikasleak') }}">Ikasleak</a></li>
            <li><a href="{{ route('ikasleakAdina', ['zbk' => 19]) }}">Ikasleak filtroa</a></li>
            <li><a href="{{ route('ikasgaiak') }}">Ikasgaiak</a></li>
            <li><a href="{{ route('ikasgaiakLetra', ['letra' => 'w']) }}">Ikasgaiak filtroa</a></li>
            <!-- Agrega más elementos de menú según sea necesario -->
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>

    <!-- Puedes incluir aquí scripts adicionales, pie de página, etc. -->
</body>

</html>
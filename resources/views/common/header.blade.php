<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="/">Inicio</a>
        </li>
        <li><a href="/publico">Publico</a></li>
        <li><a href="/privado">Privado</a></li>
        @if(Auth::check())
            <li >
                Bienvenido <b>{{ Auth::user()->Persona->nombre }}.</b> <a href="/logout">Logout</a>

            </li>
        @else 
        <li>
            <a href="/register">Register</a>
        </li>
        <li>
            <a href="/login">Login</a>
        </li>
        @endif
    </ul>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título Aquí</title>
    <!-- Agrega tus enlaces a CSS, JavaScript y otros recursos aquí -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: right;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        @media screen and (max-width: 600px) {
            nav ul {
                text-align: center;
            }

            nav ul li {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/">Inicio</a>
                </li>
                <li><a href="/publico">Público</a></li>
                <li><a href="/privado">Privado</a></li>
                @auth
                    <li>
                        Bienvenido <b>{{ Auth::user()->Persona->nombre }}.</b> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>
    <!-- Contenido de tu página -->
</body>
</html>
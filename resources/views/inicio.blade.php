@include("common/header")
<style>
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

nav {
    background-color: #444;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #ffd700;
}
</style>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice de Administración de Cultus</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h2>BACKOFFICE DE ADMINISTRACIÓN DE CULTUS</h2>
</header>

<nav>
    <ul>
        <li><a href="{{ route('users.index') }}">Menu de usuarios</a></li>
        <li><a href="{{ route('groups.index') }}">Menu de grupos</a></li>
        <li><a href="{{ route('users.userslist') }}">Menu de posts</a></li>
        <li><a href="{{ route('users.userslist') }}">Menu de eventos</a></li>        
    </ul>
</nav>

</body>
</html>

@include("common/footer")
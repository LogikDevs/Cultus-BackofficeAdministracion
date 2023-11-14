@include("common/header")
<style>
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #232423;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

nav {
    background-color: #444;
    display:flex;
    justify-content: center;
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
.ContainerSubHeader{
    background-color: #444;
    display:flex;
    justify-content: center;
    width: 100%;
    margin-top:100px;
    height: 500px;
    align-items: center;

    
}
.Categories{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 200px;
    height: 200px;
    text-align:center;
    background-color: #1d1e1d;  
      margin:20px;
      transition:300ms all ease;
      cursor: pointer;
  
}
.Categories:hover{
transform:scale(1.2);
}

.Categories a{
    color: rgb(80, 142, 80);
    font-weight:bold; 

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
<div class="ContainerSubHeader">
    <div class="Categories">

        <a href="{{ route('users.index') }}">Menu de usuarios</a>
    </div>
    <div class="Categories">
  
    <a href="{{ route('groups.index') }}">Menu de grupos</a>
    </div>
 
    <div class="Categories">
    <a href="{{ route('users.userslist') }}">Menu de posts</a>
    </div>
    <div class="Categories">
    <a href="{{ route('users.userslist') }}">Menu de eventos</a>
    </div>
  
</div>


</body>
</html>

@include("common/footer")
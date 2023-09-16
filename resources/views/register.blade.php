@include("common/header")

<h1>Register</h1>

<form action="/register" method="post">
    @csrf
    Nombre: <input type="text" name="name"> <br>
    Apellido: <input type="text" name="surname"> <br>
    Correo electronico: <input type="text" name="email"> <br>
    Contraseña: <input type="password" name="password"> <br>
    <input type="submit" value="Register">

</form>
@include("common/footer")
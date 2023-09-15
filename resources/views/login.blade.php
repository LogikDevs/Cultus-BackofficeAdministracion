@include("common/header")

<h1>Login</h1>

<form action="/login" method="post">
    @csrf
    Correo electronico: <input type="text" name="email"> <br>
    Contraseña: <input type="password" name="password"> <br>
    <input type="submit" value="Login">

</form>
@include("common/footer")


<!-- Menú de navegación específico para la sección de posts -->


<div class="ContainerUsers">
    <div class="Tittle">
        <h2>Users</h2>
    </div>
    <div class="ContainerData">
        <div class="Block">
            <a href="{{ route('users.userslist') }}">Listar Todos los Usuarios</a>
        </div>
        <div class="Block">
          <a href="{{ route('users.user') }}">Mostrar Usuario por ID</a>
        </div>
        <div class="Block">
           <a href="{{ route('users.email') }}">Mostrar Usuario por Email</a>
    </div>
</div>
<style>
    body{
        margin: 0px;
        background-color:rgb(27, 27, 27); 
    }
    .ContainerUsers{
        width: 100%;
        background-color: rgb(63, 62, 62);
        text-align: center;

    }
    .ContainerData{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .Block{
        width: 200px;
        height: 200px;
        margin: 20px;
        background-color: rgb(21, 21, 21);
        display: flex;

        align-items: center;
        justify-content: center;
        
    }
    .Tittle{
        margin-top: 100px;
    }
    *{
        color: green;
    }
    .Block a{
    color:  rgb(80, 142, 80);
}
</style>
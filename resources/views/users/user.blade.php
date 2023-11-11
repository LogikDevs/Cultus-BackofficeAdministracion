@extends('layouts.app')

@section('content')
<style>
.usuario-container {
    max-width: 800px;
    margin: 0 auto;
}

.usuario {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.usuario-title {
    font-size: 24px;
    margin-bottom: 20px;
}

.usuario-list {
    list-style-type: none;
    padding: 0;
}

.usuario-item {
    margin-bottom: 10px;
}

.usuario-label {
    font-weight: bold;
    margin-right: 10px;
}

.usuario-img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.usuario-no-image {
    color: #777;
}

</style>
@section('content')

    <div class="usuario-container">
    <nav>
            <ul>
                    <form action="{{ route('users.user') }}" method="get">
                        @csrf
                        <label for="user_id">Mostrar Usuario por ID:</label>
                        <input type="text" name="id" id="user_id" required>
                        <button type="submit">Buscar</button>
                    </form>
                </li>
            </ul>
        </nav>
    @if($user)

        <div class="usuario">
            <h1 class="usuario-title">Detalles del Usuario</h1>
            <ul class="usuario-list">
                <li class="usuario-item">
                    <span class="usuario-label">ID:</span>
                    <span class="usuario-value">{{ $user->id }}</span>
                </li>
                <li class="usuario-item">
                    <span class="usuario-label">Nombre:</span>
                    <span class="usuario-value">{{ $user->name }}</span>
                </li>
                <li class="usuario-item">
                    <span class="usuario-label">Apellido:</span>
                    <span class="usuario-value">{{ $user->surname }}</span>
                </li>
                <li class="usuario-item">
                    <span class="usuario-label">Edad:</span>
                    <span class="usuario-value">{{ $user->age }}</span>
                </li>

                <li class="usuario-item">
                    <span class="usuario-label">Email:</span>
                    <span class="usuario-value">{{ $user->email }}</span>
                </li>
            </ul>

            <div class="usuario-image">
                @if($user->profile_pic)
                    <img src="{{ asset('path/to/profile/images/' . $user->profile_image) }}" alt="Imagen de perfil" class="usuario-img">
                @else
                    <p class="usuario-no-image">No hay imagen de perfil disponible.</p>
                @endif
            
                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-3">Eliminar Usuario</button>
            </form>     
            </div>
        </div>
       @endif
    </div>
@endsection


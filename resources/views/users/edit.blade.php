
@extends('layouts.app')

<style>
.usuario-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh; 
}

.usuario {
    
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px; 
    width: 100%;
}

.usuario-title {
    font-size: 24px;
    margin-bottom: 20px;
}

.usuario-form label {
    font-weight: bold;
    margin-bottom: 5px;
}

.usuario-form input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

.usuario-form button {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.usuario-form button:hover {
    background-color: #0056b3;
}

.usuario-form .error-message {
    color: #dc3545;
    margin-top: 5px;
}

</style>
@section('content')
<li><a href="{{ route('users.index') }}">Volver al menu</a></li>
    <div class="usuario">
        <h1>Editar Usuario</h1>
        @if($user)
            @if(session()->has('success'))
                 <div class="alert alert-success">
                     {{ session()->get('success') }}
                 </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
             </div>
            @endif
            <form action="{{ route('users.update', ['user' => $user->id]) }}" method="put">
                @csrf
                @method('PUT')

                <li class="usuario-item">
                    <span class="usuario-label">ID:</span>
                    <span class="usuario-value">{{ $user->id }}</span>
                </li>
                
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                </div>

                <div class="form-group">
                    <label for="surname">Apellido:</label>
                    <input type="surname" name="surname" id="surname" class="form-control" value="{{ $user->surname }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Edad:</label>
                    <input type="age" name="age" id="age" class="form-control" value="{{ $user->age }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
        @else
            <p>Usuario no encontrado.</p>
        @endif
    </div>
@endsection

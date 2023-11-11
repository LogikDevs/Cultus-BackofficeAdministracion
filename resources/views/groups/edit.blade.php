
@extends('layouts.app')

<style>
.group-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh; 
}

.group {
    
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px; 
    width: 100%;
}

.group-title {
    font-size: 24px;
    margin-bottom: 20px;
}

.group-form label {
    font-weight: bold;
    margin-bottom: 5px;
}

.group-form input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

.group-form button {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.group-form button:hover {
    background-color: #0056b3;
}

.group-form .error-message {
    color: #dc3545;
    margin-top: 5px;
}

</style>
@section('content')
<li><a href="{{ route('groups.index') }}">Volver al menu</a></li>
    <div class="group">
        <h1>Editar Grupo</h1>
        @if($group)
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
            <form action="{{ route('groups.update', ['group' => $group->id_group]) }}" method="put">
                @csrf
                @method('PUT')

                <li class="group-item">
                    <span class="group-label">ID:</span>
                    <span class="group-value">{{ $group->id_group }}</span>
                </li>
                
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $group->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripcion:</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ $group->description }}" required>
                </div>
                <div class="form-group">
                     <label for="privacy">Privacidad:</label>
                        <select name="privacy" id="privacy" class="form-control" required>
                         <option value="Public" {{ $group->privacy == 'Public' ? 'selected' : '' }}>Public</option>
                          <option value="Private" {{ $group->privacy == 'Private' ? 'selected' : '' }}>Private</option>
                        </select>
                </div>

                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
        @else
            <p>Group no encontrado.</p>
        @endif
    </div>
@endsection

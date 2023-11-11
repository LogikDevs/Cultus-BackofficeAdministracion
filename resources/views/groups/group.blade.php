@extends('layouts.app')

@section('content')
<style>
.group-container {
    max-width: 800px;
    margin: 0 auto;
}

.group {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.group-title {
    font-size: 24px;
    margin-bottom: 20px;
}

.group-list {
    list-style-type: none;
    padding: 0;
}

.group-item {
    margin-bottom: 10px;
}

.group-label {
    font-weight: bold;
    margin-right: 10px;
}

.group-img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.group-no-image {
    color: #777;
}

</style>
@section('content')

    <div class="group-container">
    <nav>
            <ul>
                    <form action="{{ route('groups.group') }}" method="get">
                        @csrf
                        <label for="group_id">Mostrar Groupo por ID:</label>
                        <input type="text" name="id" id="group_id" required>
                        <button type="submit">Buscar</button>
                    </form>
                </li>
            </ul>
        </nav>
    @if($group)

        <div class="group">
            <h1 class="group-title">Detalles del Grupo</h1>
            <ul class="group-list">
                <li class="group-item">
                    <span class="group-label">ID:</span>
                    <span class="group-value">{{ $group->id }}</span>
                </li>
                <li class="group-item">
                    <span class="group-label">Nombre:</span>
                    <span class="group-value">{{ $group->name }}</span>
                </li>
                <li class="group-item">
                    <span class="group-label">Descripcion:</span>
                    <span class="group-value">{{ $group->description }}</span>
                </li>
                <li class="group-item">
                    <span class="group-label">privacidad:</span>
                    <span class="group-value">{{ $group->privacy }}</span>
                </li>

                <li class="group-item">
                    <span class="group-label">Creado:</span>
                    <span class="group-value">{{ $group->created_at }}</span>
                </li>
            </ul>

            <div class="group-image">
                @if($group->picture)
                    <img src="{{ asset('path/to/profile/images/' . $group->picture) }}" alt="Imagen de perfil" class="group-img">
                @else
                    <p class="group-no-image">No hay imagen disponible.</p>
                @endif
            </div>
        </div>
       @endif
    </div>
@endsection


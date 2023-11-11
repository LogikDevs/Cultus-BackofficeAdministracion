<!-- show all users with the function in the controller  
@extends('layouts.app')-->
<style>
    .grupos {
        margin: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>

@section('content')
    <div class="grupos">

        <table class="table table-bordered">    
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fotos</th>
                    <th>Privacidad</th>                    
                    <th>Creado</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groups as $group)
                    <tr>
                        <td>{{ $group->id }}</td>
                        <td>{{ $group->name }}</td>
                        <td>{{ $group->description }}</td>
                        <td>{{ $group->picture}}</td>
                        <td>{{ $group->privacy}}</td>
                        <td>{{ $group->created_at }}</td>
                        <td>  
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $groups->links() }}        
    </div>
@endsection


<!-- show all users with the function in the controller  
@extends('layouts.app')-->
<style>
    .usuarios {
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
    <div class="usuarios">

        <table class="table table-bordered">    
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Age</th>
                    <th>Gender</th>                    
                    <th>Email</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
            @if($users)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->age}}</td>
                        <td>{{ $user->gender}}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-3">Eliminar Usuario</button>
                         </form>
                         </td>
                         <td>
                            <form action="{{ route('users.edit', ['user' => $user->id]) }}" method="put">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger mt-3">Editar Usuario</button>
                          </form>
                          </td>           
                    </tr>
                @endforeach
            </tbody>
            
        </table>

        {{ $users->links() }}  
        @endif      
    </div>
@endsection


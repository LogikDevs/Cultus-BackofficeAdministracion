<!-- show all posts with the function in the controller  
@extends('layouts.app')-->
<style>
    .posts {
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
    <div class="posts">

        <table class="table table-bordered">    
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID usuario</th>
                    <th>ID evento</th>
                    <th>ID grupo</th>
                    <th>Texto</th>
                    <th>Latitud</th>                    
                    <th>Longitud</th>
                    <th>Fecha</th>
                    <th>Votos</th>
                    <th>Comentarios</th>
                    <th>Creado</th>
                </tr>
            </thead>
            <tbody>
            @if($posts)
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id_post }}</td>
                        <td>{{ $post->fk_id_user }}</td>
                        <td>{{ $post->fk_id_event }}</td>
                        <td>{{ $post->fk_id_group}}</td>
                        <td>{{ $post->text}}</td>
                        <td>{{ $post->latitud }}</td>
                        <td>{{ $post->longitud }}</td>
                        <td>{{ $post->date }}</td>
                        <td>{{ $post->votes }}</td>
                        <td>{{ $post->comments }}</td>
                        <td>{{ $post->created_at }}</td>                        
                        <td>
                        <form action="{{ route('posts.destroy', ['post' => $post->id_post]) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-3">Eliminar post</button>
                         </form>
                         </td>
                         <td>
                            <form action="{{ route('posts.edit', ['post' => $post->id_post]) }}" method="put">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger mt-3">Editar post</button>
                          </form>
                          </td>           
                    </tr>
                @endforeach
            </tbody>
            
        </table>

        {{ $posts->links() }}  
        @endif      
    </div>
@endsection


@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div>
                <h5>Autor: {{ $post->user->name }}</h5>
                <h5>Autor: {{ $post->user->surname }}</h5>
                <h2>{{ $post->text }}</h2>
            </div>
            <br>
            <br>
        @endforeach


        {{ $posts->links() }}
    </div>
@endsection
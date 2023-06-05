@extends('layouts.app')

@section('content')
<a class="btn btn-success my-3" href="{{route('posts.create')}}">crear publicación</a>
<table class="table">
    <head>
        <tr>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>posted</th>
            <th colspan="2">Acciones</th>
        </tr>
    </head>
    <tbody>
        @foreach ($posts as $p)
        <tr>
            <td> {{$p->title}}</td>
            <td> {{$p->category_id->title}}</td>
            <td>{{$p->posted}}</td>
            <td width="10px">
                <a class="btn btn-primary" href="{{route('post.edit', $p)}}">editar</a>
                <a class="btn btn-primary" href="{{route('post.show', $p)}}">ver</a>
                <form action="{{route ('post.destroy', $p)}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn.danger mt-2" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$posts->links()}}
@endsection

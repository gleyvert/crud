@extends('layouts.plantilla')

@section('title', 'show Curso: ' . $curso->name)

@section('content')

<h1 style="color:red;">bienvenido al curso: {{$curso->name}}</h1>
<!--<h1 style="color:green;">Mientras me como un </h1>-->
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
<p><strong>Categoría:</strong> {{$curso->categoria}}</p>
<p>{{$curso->description}}</p>

<form action="{{route('cursos.destroy', $curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@endsection


@extends('layouts.plantilla')

@section('title', 'index')

@section('content')

<h1 style="color:red;">bienvenido a la pagina cursos</h1>
<a href="{{route('cursos.create')}}">Cursos Crear</a>
<a href="{{route('cursos.create')}}">Crear cursos</a>
<ul>
    @foreach ($cursos as $curso)
        <li>
            <a href="{{route('cursos.show', $curso)}}"> <!--al poner $curso nada mas y $curso->name o slug no lo definimos porte lo define en el modelo curso a que url nos vamos a referir-->
                {{$curso->name}}
            </a>
        </li>
    @endforeach
</ul>
{{$cursos->links()}}

@endsection

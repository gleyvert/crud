@extends('layouts.plantilla')

@section('title', 'index')

@section('content')

<h1 style="color:red;">bienvenido a la pagina cursos</h1>
<a href="{{route('cursos.create')}}">Cursos Crear</a>
<a href="{{route('cursos.create')}}">Crear cursos</a>

@php
    $type="danger"
@endphp
<x-alert :type="$type" id="alerta"> <!-- title="Titulo de la alerta" <-este es el titulo que va en la etiqueta de alert en caso de que no quiera usar title por slot como abajo para el componente alert -->
    <x-slot name="title">
        este es el titulo desde el slot
    </x-slot>
    <p>este es la alerta del index de curso</p>
</x-alert>
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

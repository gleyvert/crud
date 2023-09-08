@extends('layouts.plantilla')

@section('title', 'show Curso: ' . $curso)

@section('content')

<h1 style="color:red;">bienvenido al curso: {{$curso}}</h1>
<h1 style="color:green;">Mientras me como un {{$manguito}}</h1>


@endsection


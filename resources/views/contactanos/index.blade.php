@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')

<h1>Dejanos un mensaje</h1>

<form action="{{route('contactanos.store')}}" method="POST">
    @csrf

    <label for="">
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>
    <br>

    @error('name')
        <p><strong>{{$message}}</strong></p>
        <br>
    @enderror

    <label for="">
        Correo:
        <br>
        <input type="text" name="correo" value="{{old('correo')}}">
    </label>
    <br>
    @error('correo')
        <p><strong>{{$message}}</strong></p>
        <br>
    @enderror
 
    <label for="">
        Mensaje:
        <br>
        <textarea name="mensaje" rows="4">{{old('mensaje')}}</textarea>
    </label>

    <br>

    @error('mensaje')
        <p><strong>{{$message}}</strong></p>
        <br>    
    @enderror 

    <button type="submit">
        Enviar mensaje
    </button>
</form>


@if (session('info'))
   
@push('scripts')
    <script type="text/javascript">
    
        Swal.fire(
        "{{session('info')}}", //<-Asi se imprime un session flass 
        'oprima el boton ok!',
        'success'
        )
       // console.log("{{session('info')}}");
    </script>

@endpush

@endif


@endsection


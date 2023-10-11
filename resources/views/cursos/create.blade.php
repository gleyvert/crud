@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')

<h1 style="color:red;">en esta pagina podras crear cursos</h1>
<form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf <!--utiliza un token como medida de seguridad que valida el formulario-->
    <label for="">
         Nombre:
         <br>
         <input type="text" name="name" value="{{old('name')}}">
    </label>
    @error('name')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror
    <br>
    <label for="">
        Slug:
        <br>
        <input type="text" name="slug" value="{{old('slug')}}">
   </label>
   @error('slug')
       <br>
       <span>*{{$message}}</span>
       <br>
   @enderror
   <br>
    <label for="">
         Description:
         <br>
        <textarea name="description" id="" cols="30" rows="5">{{old('description')}}</textarea>
    </label>
    @error('description')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror
    <br>
    <label for="">
        Categoria:
        <br>
        <input type="text"  name="categoria" value="{{old('categoria')}}">
    </label>
    @error('categoria')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror
    <br>
    <label for="">
        Imagen:
        <br>
        <input type="file"  name="featured" value="{{old('featured')}}">
    </label>
    @error('featured')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror
<br>
<button type="submit">Enviar formulario</button>
</form>

@endsection

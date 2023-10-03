@extends('layouts.plantilla')

@section('title', 'Edit curso')

@section('content')

<h1 style="color:red;">en esta pagina podras editar cursos</h1>
<form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf <!--utiliza un token como medida de seguridad que valida el formulario-->
    <!--@ method('put')  es para definir que es un metodo put ya que html solo puede identificar el metodo get y post pero igual no sirve este methodo para laravel 10-->
    @method('put')
    <label for="">
         Nombre:
         <br>
         <input type="text" name="name" value="{{old('name', $curso->name) }}">
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
        <input type="text" name="slug" value="{{old('slug', $curso->slug)}}">
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
        <textarea name="description" id="" cols="30" rows="5">{{old('description', $curso->description) }}</textarea>
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
        <input type="text"  name="categoria" value="{{old('categoria', $curso->categoria)}}">
    </label>
    @error('categoria')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror
<br>
<button type="submit">Actualizar formulario</button>
</form>

@endsection

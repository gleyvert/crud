@props(['title']) <!--usar en caso de agregarle el title dentro de la etiqueta aler de este componente sino usar por la etiqueta slot y borrar este props-->

@props(['type' => 'info']) <!-- por defecto dejamos el 'info' por si no agrega ningun type de alert en el componento de donde lo esten llamando-->

@php
 switch ($type) {
    case 'info':
        $class="primary"; // esto es solo por si queremos agregarle estilo o que se yo en caso de definir un tipo de alert
        break;
    
    case 'danger':
        $class="dark";
        break;
    
    default:
        # code...
        break;
 }   
@endphp

@dump($attributes)
<div {{$attributes}} class="alert alert-{{$class}}" role="alert">
    <h3>{{$title}}</h3>
    {{ $slot}}
  </div>
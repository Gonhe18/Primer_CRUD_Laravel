@extends('Plantilla.mostrar_plantilla')

@section('Titulo')

@section('Contenido')
  <header>
    <nav>
      <ul>
        <li><a href="{{ route('crud') }}">Inicio</a></li>
        <li><a href="{{ route('crud.create') }}">Crear Productos</a></li>
        <li><a href="{{ route('crud.show') }}"></a>Productos</li>
      </ul>
      <h1>Productos disponibles</h1>
    </nav>
  </header>
<ul>
  @foreach ($productos as $producto)
  
    <li><a href="{{ route('crud.unico',$producto->id) }}">{{ $producto->name }}</a></li>
    <br>
  @endforeach
</ul>
  

@endsection
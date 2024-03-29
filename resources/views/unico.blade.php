@extends('Plantilla.unico_plantilla')

@section('Titulo')

@section('Contenido')
  <header>
    <nav>
      <ul>
        <li><a href="{{ route('crud') }}">Inicio</a></li>
        <li><a href="{{ route('crud.create') }}">Crear Productos</a></li>
        <li><a href="{{ route('crud.show') }}">Productos</a></li>
      </ul>
    </nav>
  </header>
  <h1>Producto: {{ $productos ->name }}</h1>
  <div class="contenedor1">
   <h2>Tipo de Producto: {{ $productos ->tipo }}</h2>
  </div>
  <div class="contenedor2">
    <h2 class="descripcion">Descripcion: {{ $productos ->descripcion}}</h2>
  </div>

  <p><a href="{{ route('crud.edit' , $productos->id) }}" class="edit">Editar producto</a></p>
  <form action="{{ route('crud.destroy' , $productos) }}" method="post">
    @csrf
    @method('delete')
    <button>Eliminar producto</button>
  </form>
  

  

@endsection
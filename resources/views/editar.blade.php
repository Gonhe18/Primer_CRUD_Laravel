@extends('Plantilla.crear_plantilla')

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

  <form action="{{ route('crud.update',$productos) }}" method="post">
    @csrf
    @method('put')
    <h1>Editar producto: {{ $productos->name }}</h1>
    <label for="">Nombre del producto
      <input type="text" name='name' value="{{ $productos->name }}"
    </label>
    <br><br>
    <label for="">Tipo del producto
      <input type="text" name='tipo' value="{{$productos->tipo }}"
    </label>
    <br><br>
    <label for="">Descripción del producto
      <textarea name="descripcion"type="text">{{ $productos->descripcion }}</textarea>
    </label>
    <br><br>
    <button>Editar producto</button>
  </form>

@endsection
@extends('Plantilla.crear_plantilla')

@section('Titulo')

@section('Contenido')
  <header>
    <nav>
      <ul>
        <li><a href="{{ route('crud') }}">Inicio</a></li>
        <li><a href="{{ route('crud.create') }}">Crear Productos</a></li>
        <li><a href="{{ route('crud.show') }}"></a>Productos</li>
      </ul>
      
    </nav>
  </header>

  <form action="{{ route('crud.store') }}" method="post">
    @csrf
    <h1>Ingrese un producto a la base de datos</h1>
    <label for="">Nombre del producto
      <input type="text" name='name'>
    </label>
    <br><br>
    <label for="">Tipo del producto
      <input type="text" name='tipo'>
    </label>
    <br><br>
    <label for="">Descripción del producto
      <textarea name="descripcion"type="text"></textarea>
    </label>
    <br><br>
    <button>Ingresar producto</button>
  </form>

@endsection
@extends('Plantilla.index_plantilla')

@section('Titulo')

@section('Contenido')
  <header>
    <nav>
      <ul>
        <li><a href="{{ route('crud') }}">Inicio</a></li>
        <li><a href="{{ route('crud.create') }}">Crear Productos</a></li>
        <li><a href="{{ route('crud.show') }}"></a>Productos</li>
      </ul>
      <h1>Bienvenidos al inicio de nuestro CRUD</h1>
    </nav>
  </header>

  {{-- <form action="" method="post">
    
  </form> --}}

@endsection
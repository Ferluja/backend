@extends('layouts/plantilla')

@section('tituloPagina','Crear un nuevo registro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar nuevo</h5>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">
        <form action="#" method="post">
            <label for="">Apellido paterno</label>
            <input type="text" name="paterno" class="form-control" required>
            <label for="">Apellido materno</label>
            <input type="text" name="materno" class="form-control" required>
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">Fecha nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            <a href="{{route('personas.index')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-primary">Agregar</button>
        </form>
      </p>
    </div>
  </div>    
@endsection
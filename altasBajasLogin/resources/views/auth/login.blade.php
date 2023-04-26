@extends('layouts/plantilla')
@section('tituloPagina','Login')
@section('contenido')

<div class="row position-absolute top-50 start-50 translate-middle">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Inicio Sesion</h5>
          <p class="card-text" style="color: black">
            <br>
            
            
            <form action="{{ route('logear') }}" method="post">
                @csrf
                @method('POST')
                <label for="">Usuario</label>
                <input type="text" class="form-control" name="name">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
                <br>
                <button class="btn-bootstrap">Entrar</button>
            </form>
          </p>
          <p>¿No tienes cuenta? <a href="{{ route('registrar') }}">Crear cuenta</a></p>
        </div>
      </div>
</div>
@endsection
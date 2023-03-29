@extends('../../layouts/main')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center">Crear un nuevo registro de alta o baja</h2>
            <form action="{{route('store')}}" method="post">
                @csrf
                @method('POST')
                <label for="">Tipo</label>
                <select name="tipo" id="tipo" class="form-select">
                    <option value="" selected>Seleccione una opcion</option>
                    <option value="Pago">pago</option>
                    <option value="Gasto">gasto</option>
                </select>
                <label for="">categoria</label>

                <select name="categoria" id="categoria" class="form-select">
                    <option value="" selected>Seleccione una opcion</option>
                    @foreach ($items as $datos)
                    <option value="{{$datos->id}}">{{$datos->nombre}}</option>    
                    @endforeach
                    
                </select>
                <label for="">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control">
                <label for="">descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                <button class="btn btn-primary mt-3">Registrar</button>
            </form>
        </div>
    </div>
</div>
    
@endsection
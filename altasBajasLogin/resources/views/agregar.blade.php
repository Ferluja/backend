@extends('layouts/plantilla')
@section('tituloPagina','agregar altas y bajas')
@section('contenido')

<div class="row position-absolute top-50 start-50 translate-middle">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Ingresar un pago o gasto</h5>
          <p class="card-text" style="color: black">
            Todas las opciones que empiezan con 'compra' son gastos
            <br>
            
            
            <form action="{{route('AltasBajas.store')}}" method="post">
                @csrf
                <label for="" style="color: black">Seleccione una categoria</label>
                <select class="form-select" aria-label="Default select example" name="opcion">
                    <option selected value="">Open this select menu</option>
                    @foreach ($datos as $item)
                        <option value="{{$item->id}}">{{$item->categoria}}</option>    
                    @endforeach
                    
                </select>

                <label for="" style="color: black">Cantidad</label>
                <input type="text" name="txt_cantidad" class="form-control">
                <label for="" style="color: black">Descripcion</label>
                <textarea class="form-control" aria-label="With textarea" name="txt_descripcion"></textarea>
                <br>
                <button class="btn btn-bootstrap">Agregar</button>
                <a href="{{route('AltasBajas.index')}}" class="btn btn-bootstrap position-absolute bottom-0 end-0 mb-3 me-4">Atras</a>
            </form>
          </p>
          
        </div>
      </div>
</div>
@endsection
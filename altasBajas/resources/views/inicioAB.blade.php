@extends('layouts/plantilla')
@section('tituloPagina','Inicio')
@section('contenido')
<div class="alert alert-success" role="alert">
    Total de pagos: {{$pago}}
  </div>
  <div class="alert alert-danger" role="alert">
    Total de gastos: {{$gasto}}
  </div>
    

    <div class="card mt-4 mb-4">
        <h5 class="card-header">Resumen de gastos y pagos</h5>
        <div class="card-body">
          <h5 class="card-title">Datos</h5>
          <p class="card-text">
            <div class="table">
                <table class="table table-sm table-bordered" id="tabla_altas_bajas">
                    <thead>

                        <td>Tipo</td>
                        <td>Categoria</td>
                        <td>Cantidad</td>
                        <td>Descripcion</td>
                        <td>Fecha</td>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            
                        
                        <tr>
                            <td>{{$item->tipo}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </p>
        </div>
      </div>  
<a href="{{route('AltasBajas.index')}}" class="btn btn-bootstrap" >Atras</a>
  
@endsection
    

@extends('../../layouts/main')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center">Registros de altas y bajas</h2>
            <a href="{{route('create')}}" class="btn btn-primary">Nuevo registro</a>
            <hr>
            <table class="table table-sm table-hover" id="tabla_altas_bajas">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Categoria</th>
                        <th>Cantidad</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    @push('scripts')
    <script>
        $(document).ready(function(){
            $('#tabla_altas_bajas').DataTable();
        })
           
        
    </script>
    @endpush
@endsection
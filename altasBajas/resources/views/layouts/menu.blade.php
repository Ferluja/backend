@extends('layouts/plantilla')
@section('fondo')
<div class="row">
    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 position-absolute top-50 start-50 translate-middle">
        <div class="hexagon-menu clear">
            <div class="hexagon-item">
                <div class="hex-item">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="hex-item">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <a  class="hex-content" href="{{route('AltasBajas.inicioAB')}}">
                    <span class="hex-content-inner">
                        <span class="icon">
                            <i class="fa fa-universal-access"></i>
                        </span>
                        <span class="title">Inicio</span>
                    </span>
                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                </a>
            </div>
            <div class="hexagon-item">
                <div class="hex-item">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="hex-item">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <a  class="hex-content" href="{{ route('AltasBajas.create')}}">
                    <span class="hex-content-inner">
                        <span class="icon">
                            <i class="fa fa-bullseye"></i>
                        </span>
                        <span class="title">Altas y bajas</span>
                    </span>
                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                </a>
            </div>  
        </div>

        </div>

    </div>
</div>    
@endsection

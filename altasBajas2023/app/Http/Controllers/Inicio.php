<?php

namespace App\Http\Controllers;

use App\Models\AltaBaja;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class Inicio extends Controller
{
    public function index(){
        $titulo = 'Inicio';
        $pago = AltaBaja::where('tipo','=','Pago')->sum('cantidad');

        return view('modules/inicio/index',compact('titulo','pago'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Altas_bajas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AltasBajasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(Auth::check()){
            return view('welcome');
        }
        return view('auth/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Hace el commit de los datos en la base de datos
        $altasBajas = new Altas_bajas();
        $altasBajas->id_tipo_categoria_fk = $request->post('opcion');
        $altasBajas->cantidad = $request->post('txt_cantidad');
        $altasBajas->descripcion = $request->post('txt_descripcion');

        if($request->post('opcion') != "" && $request->post('txt_cantidad') != "" && $request->post('txt_descripcion') != ""){
            $altasBajas->save();
            Alert::success('Success','Guardado con exito!');
            return redirect()->route('AltasBajas.index');
            

        }else{
            Alert::error('Failed','No debe haber campos vacios');
            return back();            
        }
        

        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Altas_bajas  $altas_bajas
     * @return \Illuminate\Http\Response
     */
    public function show(Altas_bajas $altas_bajas)
    {
        //
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Altas_bajas  $altas_bajas
     * @return \Illuminate\Http\Response
     */
    public function edit(Altas_bajas $altas_bajas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Altas_bajas  $altas_bajas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Altas_bajas $altas_bajas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Altas_bajas  $altas_bajas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Altas_bajas $altas_bajas)
    {
        //
    }
    public function inicioAB(){
        //Retorna a la vista inicioAB
        $datos = Altas_bajas::join('tipos_categorias_cat','altas_bajas.id_tipo_categoria_fk','=','tipos_categorias_cat.id')->select('tipos_categorias_cat.id','tipos_categorias_cat.tipo','tipos_categorias_cat.categoria'
        ,'cantidad','descripcion','altas_bajas.created_at')->get();
        //dd($datos);

        $pago = Altas_bajas::select('tipos_categorias_cat.id', 'tipos_categorias_cat.tipo')
        ->join('tipos_categorias_cat','altas_bajas.id_tipo_categoria_fk','tipos_categorias_cat.id')
        ->where('tipos_categorias_cat.tipo','pago')
        ->sum('cantidad');
        
        $gasto = Altas_bajas::select('tipos_categorias_cat.id', 'tipos_categorias_cat.tipo')
        ->join('tipos_categorias_cat','altas_bajas.id_tipo_categoria_fk','tipos_categorias_cat.id')
        ->where('tipos_categorias_cat.tipo','gasto')
        ->sum('cantidad');

        return view('inicioAB',compact('datos','pago','gasto'));
    }
}

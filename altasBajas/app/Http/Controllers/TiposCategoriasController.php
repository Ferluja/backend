<?php

namespace App\Http\Controllers;

use App\Models\tipos_categorias;
use Illuminate\Http\Request;

class TiposCategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datos = tipos_categorias::all();
        return view('agregar',compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipos_categorias  $tipos_categorias
     * @return \Illuminate\Http\Response
     */
    public function show(tipos_categorias $tipos_categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipos_categorias  $tipos_categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(tipos_categorias $tipos_categorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipos_categorias  $tipos_categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipos_categorias $tipos_categorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipos_categorias  $tipos_categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipos_categorias $tipos_categorias)
    {
        //
    }
}

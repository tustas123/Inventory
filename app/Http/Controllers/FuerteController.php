<?php

namespace App\Http\Controllers;

use App\Models\Fuerte;
use Illuminate\Http\Request;

class FuerteController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuertes = Fuerte::all();
        return view('Fuerte.index')->with('fuertes',$fuertes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Fuerte.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fuertes = new Fuerte();
        $fuertes->id = $request->get('codigo');
        $fuertes->departamento = $request->get('departamento');
        $fuertes->area = $request->get('area');
        $fuertes->userresp = $request->get('usuario');
        $fuertes->tipoequipo = $request->get('tipoequipo');
        $fuertes->marcatipo = $request->get('marca');
        $fuertes->procesador = $request->get('procesador');
        $fuertes->ram = $request->get('ram');
        $fuertes->almacenamiento = $request->get('almacenamiento');
        $fuertes->comentarios = $request->get('comentario');


        $fuertes->save();

        return redirect('/fuerte');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fuerte = Fuerte::find($id);
        return view('fuerte.edit')->with('fuerte',$fuerte);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fuerte = Fuerte::find($id);

        $fuerte->id = $request->get('codigo');
        $fuerte->departamento = $request->get('departamento');
        $fuerte->area = $request->get('area');
        $fuerte->userresp = $request->get('usuario');
        $fuerte->tipoequipo = $request->get('tipoequipo');
        $fuerte->marcatipo = $request->get('marca');
        $fuerte->procesador = $request->get('procesador');
        $fuerte->ram = $request->get('ram');
        $fuerte->almacenamiento = $request->get('almacenamiento');
        $fuerte->comentarios = $request->get('comentario');


        $fuerte->save();

        return redirect('/fuerte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fuerte = Fuerte::find($id);
        $fuerte->delete();

        return redirect('/fuerte');
    }
}

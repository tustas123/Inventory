<?php

namespace App\Http\Controllers;

use App\Models\Dorada;
use App\Models\Stella;
use Illuminate\Http\Request;

class DoradaController extends Controller
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
        $doradas = Dorada::all();
        return view('Dorada.index')->with('doradas',$doradas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dorada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doradas = new Dorada();
        $doradas->id = $request->get('codigo');
        $doradas->departamento = $request->get('departamento');
        $doradas->area = $request->get('area');
        $doradas->userresp = $request->get('usuario');
        $doradas->tipoequipo = $request->get('tipoequipo');
        $doradas->marcatipo = $request->get('marca');
        $doradas->procesador = $request->get('procesador');
        $doradas->ram = $request->get('ram');
        $doradas->almacenamiento = $request->get('almacenamiento');
        $doradas->comentarios = $request->get('comentario');


        $doradas->save();

        return redirect('/dorada');
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
        $dorada = Dorada::find($id);
        return view('dorada.edit')->with('dorada',$dorada);
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
        $dorada = Stella::find($id);

        $dorada->id = $request->get('codigo');
        $dorada->departamento = $request->get('departamento');
        $dorada->area = $request->get('area');
        $dorada->userresp = $request->get('usuario');
        $dorada->tipoequipo = $request->get('tipoequipo');
        $dorada->marcatipo = $request->get('marca');
        $dorada->procesador = $request->get('procesador');
        $dorada->ram = $request->get('ram');
        $dorada->almacenamiento = $request->get('almacenamiento');
        $dorada->comentarios = $request->get('comentario');


        $dorada->save();

        return redirect('/dorada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dorada = Dorada::find($id);
        $dorada->delete();

        return redirect('/dorada');
    }
}

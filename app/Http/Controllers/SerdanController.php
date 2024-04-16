<?php

namespace App\Http\Controllers;

use App\Models\Serdan;
use Illuminate\Http\Request;

class SerdanController extends Controller
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
        $serdans = Serdan::all();
        return view('Serdan.index')->with('serdans',$serdans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Serdan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serdans = new Serdan();
        $serdans->id = $request->get('codigo');
        $serdans->departamento = $request->get('departamento');
        $serdans->area = $request->get('area');
        $serdans->userresp = $request->get('usuario');
        $serdans->tipoequipo = $request->get('tipoequipo');
        $serdans->marcatipo = $request->get('marca');
        $serdans->procesador = $request->get('procesador');
        $serdans->ram = $request->get('ram');
        $serdans->almacenamiento = $request->get('almacenamiento');
        $serdans->comentarios = $request->get('comentario');


        $serdans->save();

        return redirect('/serdan');
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
        $serdan = Serdan::find($id);
        return view('serdan.edit')->with('serdan',$serdan);
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
        $serdan = Serdan::find($id);

        $serdan->id = $request->get('codigo');
        $serdan->departamento = $request->get('departamento');
        $serdan->area = $request->get('area');
        $serdan->userresp = $request->get('usuario');
        $serdan->tipoequipo = $request->get('tipoequipo');
        $serdan->marcatipo = $request->get('marca');
        $serdan->procesador = $request->get('procesador');
        $serdan->ram = $request->get('ram');
        $serdan->almacenamiento = $request->get('almacenamiento');
        $serdan->comentarios = $request->get('comentario');


        $serdan->save();

        return redirect('/serdan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serdan = Serdan::find($id);
        $serdan->delete();

        return redirect('/serdan');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Stella;
use Illuminate\Http\Request;

class StellaController extends Controller
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
        $stellas = Stella::all();
        return view('Stella.index')->with('stellas',$stellas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Stella.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stellas = new Stella();
        $stellas->id = $request->get('codigo');
        $stellas->departamento = $request->get('departamento');
        $stellas->area = $request->get('area');
        $stellas->userresp = $request->get('usuario');
        $stellas->tipoequipo = $request->get('tipoequipo');
        $stellas->marcatipo = $request->get('marca');
        $stellas->procesador = $request->get('procesador');
        $stellas->ram = $request->get('ram');
        $stellas->almacenamiento = $request->get('almacenamiento');
        $stellas->comentarios = $request->get('comentario');


        $stellas->save();

        return redirect('/stella');
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
        $stella = Stella::find($id);
        return view('stella.edit')->with('stella',$stella);
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
        $stella = Stella::find($id);

        $stella->id = $request->get('codigo');
        $stella->departamento = $request->get('departamento');
        $stella->area = $request->get('area');
        $stella->userresp = $request->get('usuario');
        $stella->tipoequipo = $request->get('tipoequipo');
        $stella->marcatipo = $request->get('marca');
        $stella->procesador = $request->get('procesador');
        $stella->ram = $request->get('ram');
        $stella->almacenamiento = $request->get('almacenamiento');
        $stella->comentarios = $request->get('comentario');


        $stella->save();

        return redirect('/stella');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stella = Stella::find($id);
        $stella->delete();

        return redirect('/stella');
    }
}

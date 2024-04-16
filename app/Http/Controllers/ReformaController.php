<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reforma;

class ReformaController extends Controller
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
        $reformas = Reforma::all();
        return view('Reforma.index')->with('reformas',$reformas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Reforma.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reformas = new Reforma();
        $reformas->id = $request->get('codigo');
        $reformas->departamento = $request->get('departamento');
        $reformas->area = $request->get('area');
        $reformas->userresp = $request->get('usuario');
        $reformas->tipoequipo = $request->get('tipoequipo');
        $reformas->marcatipo = $request->get('marca');
        $reformas->procesador = $request->get('procesador');
        $reformas->ram = $request->get('ram');
        $reformas->almacenamiento = $request->get('almacenamiento');
        $reformas->comentarios = $request->get('comentario');


        $reformas->save();

        return redirect('/reforma');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reforma = Reforma::find($id);
        return view('reforma.edit')->with('reforma',$reforma);
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
        $reforma = Reforma::find($id);

        $reforma->id = $request->get('codigo');
        $reforma->departamento = $request->get('departamento');
        $reforma->area = $request->get('area');
        $reforma->userresp = $request->get('usuario');
        $reforma->tipoequipo = $request->get('tipoequipo');
        $reforma->marcatipo = $request->get('marca');
        $reforma->procesador = $request->get('procesador');
        $reforma->ram = $request->get('ram');
        $reforma->almacenamiento = $request->get('almacenamiento');
        $reforma->comentarios = $request->get('comentario');


        $reforma->save();

        return redirect('/reforma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reforma = Reforma::find($id);
        $reforma->delete();

        return redirect('/reforma');
    }
}

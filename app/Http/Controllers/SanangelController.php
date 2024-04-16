<?php

namespace App\Http\Controllers;

use App\Models\Sanangel;
use Illuminate\Http\Request;

class SanangelController extends Controller
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
        $sanangels = Sanangel::all();
        return view('Sanangel.index')->with('sanangels',$sanangels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sanangel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanangels = new Sanangel();
        $sanangels->id = $request->get('codigo');
        $sanangels->departamento = $request->get('departamento');
        $sanangels->area = $request->get('area');
        $sanangels->userresp = $request->get('usuario');
        $sanangels->tipoequipo = $request->get('tipoequipo');
        $sanangels->marcatipo = $request->get('marca');
        $sanangels->procesador = $request->get('procesador');
        $sanangels->ram = $request->get('ram');
        $sanangels->almacenamiento = $request->get('almacenamiento');
        $sanangels->comentarios = $request->get('comentario');


        $sanangels->save();

        return redirect('/sanangel');
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
        $sanangel = Sanangel::find($id);
        return view('sanangel.edit')->with('sanangel',$sanangel);
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
        $sanangel = Sanangel::find($id);

        $sanangel->id = $request->get('codigo');
        $sanangel->departamento = $request->get('departamento');
        $sanangel->area = $request->get('area');
        $sanangel->userresp = $request->get('usuario');
        $sanangel->tipoequipo = $request->get('tipoequipo');
        $sanangel->marcatipo = $request->get('marca');
        $sanangel->procesador = $request->get('procesador');
        $sanangel->ram = $request->get('ram');
        $sanangel->almacenamiento = $request->get('almacenamiento');
        $sanangel->comentarios = $request->get('comentario');


        $sanangel->save();

        return redirect('/sanangel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanangel = Sanangel::find($id);
        $sanangel->delete();

        return redirect('/sanangel');
    }
}

<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;

use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;
use futboleros\Campeonato;
use futboleros\Jornada;
use futboleros\Partido;
use Illuminate\Routing\Route;
class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $partidos = Partido::paginate(10);
      return view('partidos.index', ['partidos' => $partidos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $campeonatos = Campeonato::lists('nombre','id');
      $jornadas = Jornada::lists('numero','id');
      return view('partidos.create',['campeonatos'=>$campeonatos,'jornadas'=>$jornadas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request)
    {
       Equipo::create($request->all());
        Session::flash('message','Partido Creado con Exito');
        return Redirect::to('/equipos');
        
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
      $partido = Partido::find($id);
      $campeonatos = Campeonato::lists('nombre','id');
      $jornadas = Jornada::lists('numero','id');
      return view('partidos.edit',['campeonatos'=>$campeonatos,'jornadas'=>$jornadas,'partido'=>$partido]);
        //
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
        $partido = Partido::find($id);
        $partido->fill($request->all());
        $partido->save();
        Session::flash('message','Partido actualizado con Exito');
        return Redirect::to('/partidos');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        Partido::destroy($id);
        Session::flash('message','Partido Eliminado');
        return Redirect::to('/partidos');
        
    }
}

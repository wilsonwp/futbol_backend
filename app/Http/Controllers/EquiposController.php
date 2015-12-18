<?php

namespace futboleros\Http\Controllers;
use \futboleros\Equipo;
use \futboleros\Campeonato;
use \futboleros\Tecnico;
use \futboleros\Estadio;
use Illuminate\Http\Request;
use Session;
use Redirect;
use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $equipos = Equipo::paginate(10);
      return view('equipos.index', ['equipos' => $equipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $campeonatos = Campeonato::lists('nombre','id');
      $tecnicos = Tecnico::lists('nombre','id');
      $estadios = Estadio::lists('nombre','id');
      return view('equipos.create',['campeonatos'=>$campeonatos,'tecnicos'=>$tecnicos,'estadios'=>$estadios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Equipo::create([
            'nombre' =>$request['nombre'],
            'alias' =>$request['alias'],
            'fecha_fundacion' =>$request['fecha_fundacion'],
            'presidente_actual' =>$request['presidente_actual'],
            'nombre_hinchada' =>$request['nombre_hinchada'],
            'estadio_id' =>$request['estadio_id'],
            'campeonato_id' =>$request['campeonato_id'],
            'tecnico_id' =>$request['tecnico_id']
        ]);
        Session::flash('message','Equipo Creado con Exito');
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
        
      $equipo = Equipo::find($id);
      $campeonatos = Campeonato::lists('nombre','id');
      $tecnicos = Tecnico::lists('nombre','id');
      $estadios = Estadio::lists('nombre','id');
      return view('equipos.edit',['campeonatos'=>$campeonatos,'tecnicos'=>$tecnicos,'estadios'=>$estadios,'equipo'=>$equipo]);
        //
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
        $equipo = Equipo::find($id);
        $equipo->fill($request->all());
        $equipo->save();
        Session::flash('message','Equipo actualizado con Exito');
        return Redirect::to('/equipos');
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
        Equipo::destroy($id);
        Session::flash('message','Equipo Eliminado');
        return Redirect::to('/equipos');
        
    }
}

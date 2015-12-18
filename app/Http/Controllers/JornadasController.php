<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;
use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;
use \futboleros\Jornada;
use \futboleros\Campeonato;
use Redirect;
use Session;
class JornadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      $jornadas = Jornada::paginate(10);
      return view('jornadas.index', ['jornadas' => $jornadas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $campeonatos = Campeonato::lists('nombre','id');
      return view('jornadas.create',compact('campeonatos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if( Jornada::create([
            'numero' =>$request['numero'],
            'fecha' =>$request['fecha'],
            'campeonato_id' =>$request['campeonato_id']
        ])){
         return redirect('jornadas')->with('message','store');
        }else{
            return "fallo al registrar";
        }
        //
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
       $jornada = Jornada::find($id);
       $campeonatos = Campeonato::lists('nombre','id');
       return view('jornadas.edit',['jornada'=>$jornada,'campeonatos'=>$campeonatos]);
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
        $jornada = Jornada::find($id);
        $jornada->fill($request->all());
        $jornada->save();
        Session::flash('message','Jornada actualizada con Exito');
        return Redirect::to('/jornadas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        Jornada::destroy($id);
        Session::flash('message','Jornada Eliminada');
        return Redirect::to('/jornadas');
        
    }
}

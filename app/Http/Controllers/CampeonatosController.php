<?php

namespace futboleros\Http\Controllers;
use \futboleros\Campeonato;
use Redirect;
use Session;
use Illuminate\Http\Request;

use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;

class CampeonatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
         $campeonatos = Campeonato::all();
         return view('campeonatos.index',  compact('campeonatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
      return view('campeonatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( Campeonato::create([
            'nombre' =>$request['nombre'],
            'alias' =>$request['alias'],
            'num_partidos' =>$request['num_partidos'],
            'fecha_inic'=>$request['fecha_inic'],
            'fecha_fin' =>$request['fecha_fin'],
        ])){
         return redirect('campeonatos')->with('message','store');
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
        $campeonato = Campeonato::find($id);
        return view('campeonatos.edit',['campeonato'=>$campeonato]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $campeonato = Campeonato::find($id);
        $campeonato->fill($request->all());
        //dd($campeonato);
        $campeonato->save();
        Session::flash('message','Campeonato Actualizado con Exito');
        return Redirect::to('/campeonatos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

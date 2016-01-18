<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;
use futboleros\Comentario;
use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;
use futboleros\Log;
use futboleros\Partido;
<<<<<<< HEAD
use futboleros\EquipoPartido;
use futboleros\Gol;
=======
>>>>>>> c3ad6474361fdf1b1ded0e804a19bdd60792b632

class ComentariosController extends Controller
{
    function __construct(){
        $this->middleware('cors');
    } 
    public function index($id)
    {
     $comentarios = Comentario::where('partido_id',$id)
             ->get()
             ;
     return response()->json($comentarios->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
<<<<<<< HEAD
    { 
            switch ($request['tipo_comentario_id']) {
                  case 4:
                      Gol::create([
                        'equipo_id'=>$request['equipo_id'],
                        'minuto'=>$request['minuto'],
                        'partido_id'=>$request['partido_id'],
                        ]);
                      break;
              }  
=======
    {   
>>>>>>> c3ad6474361fdf1b1ded0e804a19bdd60792b632
           Comentario::create($request->all());
           return response()->json([
               
               "mensaje"=>"Comentario Creado con Exito"
           ]);
    }
    public function show($id)
    {
         $comentarios = Partido::where('partidos.id',$id)
             ->with('equipos','comentarios')
             ->get()
             ;
     return response()->json($comentarios->toArray());
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

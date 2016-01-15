<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;
use futboleros\Comentario;
use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;
use futboleros\Log;

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
    {   
           Comentario::create($request->all());
           return response()->json([
               
               "mensaje"=>"Comentario Creado con Exito"
           ]);
    }
    public function show($id)
    {
         $comentarios = Comentario::where('partido_id',$id)
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

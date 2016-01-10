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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch ($request['tipo_comentario_id']):
            case 0:
                $request['clase_css_tipo'] = 'tl-wrap b-info';
                $request['clase_css_posicion'] = 'tl-item';
                break;
            case 1:
                $request['clase_css_tipo'] = 'tl-wrap b-info';
                $request['clase_css_posicion'] = 'tl-item';
                break;
            case 2:
                $request['clase_css_tipo'] = 'tl-content panel padder b-a';
                $request['clase_css_posicion'] = 'tl-item';
                break;
            case 3:
                $request['clase_css_tipo'] = 'tl-wrap b-success';
                $request['clase_css_posicion'] = 'tl-item tl-left';
                break;
            case 4:
                $request['clase_css_tipo'] = 'tl-wrap b-primary';
                $request['clase_css_posicion'] = 'tl-item';
                break;
        endswitch;
           Comentario::create($request->all());
           return response()->json([
               
               "mensaje"=>"Comentario Creado con Exito"
           ]);
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
        //
    }
}

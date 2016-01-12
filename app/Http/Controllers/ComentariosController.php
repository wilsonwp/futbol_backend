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
    {        switch ($request['tipo_comentario_id']):
                case 0 :
                    $request['look'] = '<li class="tl-item" ng-repeat="comentario in comentarios">
                                <div class="tl-wrap b-info">
                                <span class="tl-date">'.$request['minuto'].'</span>
                                <div class="tl-content">
                                '.$request['contenido'].'
                                 </div>
                                 </div>
                                 </li>';
                    break;
                case 1 :
                     $request['look'] = '<li class="tl-item" ng-repeat="comentario in comentarios">
                                <div class="tl-wrap b-info">
                                <span class="tl-date">'.$request['minuto'].'</span>
                                <div class="tl-content">
                                '.$request['contenido'].'
                                 </div>
                                 </div>
                                 </li>';
                    break;
                case 2 :
                     $request['look'] = '<li class="tl-item">
                                         <div class="tl-wrap">
                                          <span class="tl-date">'.$request['minuto'].'</span>
                                          <div class="tl-content panel padder b-a">
                                          <span class="arrow left pull-up"></span>
                                           <div>'.$request['contenido'].'</div>
                                            </div>
                                             </div>
                                             </li>';
                    break;
                case 3 :
                     $request['look'] = '<li class="tl-item tl-left">
                                              <div class="tl-wrap b-success">
                                           <span class="tl-date">'.$request['minuto'].'/span>
                                            <div class="tl-content panel bg-success padder">
                                            <span class="arrow arrow-success left pull-up hidden-left"></span>
                                           <span class="arrow arrow-success right pull-up visible-left"></span>
                                            <div class="text-lt">'.$request['contenido'].'</div>
                                            </div>
                                           </div>
                                             </li>';
                    break;
                case 4 :
                     $request['look'] = '  <li class="tl-item">
                                            <div class="tl-wrap b-primary">
                                            <span class="tl-date">'.$request['minuto'].'</span>
                                             <div class="tl-content panel padder b-a w-md w-auto-xs">
                                                <span class="arrow left pull-up"></span>
                                                <div class="text-lt m-b-sm">'.$request['titulo'].'</div>
                                                <div class="panel-body pull-in b-t b-light">
                                                  <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                                    <img src="img/a4.jpg" alt="...">
                                                    <i class="on md b-white bottom"></i>
                                                  </a>
                                                  <div class="clear">
                                                    <a href="" class="text-primary block m-b-xs">@Mike Mcalidek <i class="icon-twitter"></i></a>
                                                    <a href="" class="btn btn-addon btn-sm btn-primary m-t-xs"><i class="fa fa-eye"></i> Follow</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </li>
    ';
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
         $comentarios = Comentario::where('partido_id',$id)
             ->get()
             ;
     return response()->json($comentarios->toArray());
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

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
                case 0 :
                    $request['look'] = '
                                <li class="tl-item">
                                  <div class="tl-wrap b-falta">
                                    <span class="tl-date">'.$request['minuto'].'Min. </span>
                                    <div class="tl-content panel padder b-a w-md w-auto-xs">
                                      <span class="arrow left pull-up"></span>
                                      <div class="text-lt m-b-sm"> Falta </div>
                                      <div class="panel-body pull-in b-t b-light">
                                        <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                          <img src="img/a4.jpg" alt="...">
                                          <i class="on md b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                          <p>'.$request['contenido'].'</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>';
                    break;
                case 1 :
                     $request['look'] = '
                                <li class="tl-item">
                                  <div class="tl-wrap b-fuera">
                                    <span class="tl-date">'.$request['minuto'].'Min. </span>
                                    <div class="tl-content panel padder b-a w-md w-auto-xs">
                                      <span class="arrow left pull-up"></span>
                                      <div class="text-lt m-b-sm">Fuera de Juego </div>
                                      <div class="panel-body pull-in b-t b-light">
                                        <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                          <img src="img/a4.jpg" alt="...">
                                          <i class="on md b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                          <p>'.$request['contenido'].'</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>';
                    break;
                case 2 :
                     $request['look'] = '
                                <li class="tl-item">
                                  <div class="tl-wrap b-tiro">
                                    <span class="tl-date">'.$request['minuto'].'Min. </span>
                                    <div class="tl-content panel padder b-a w-md w-auto-xs">
                                      <span class="arrow left pull-up"></span>
                                      <div class="text-lt m-b-sm">Disparo a Portería</div>
                                      <div class="panel-body pull-in b-t b-light">
                                        <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                          <img src="img/a4.jpg" alt="...">
                                          <i class="on md b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                          <p>'.$request['contenido'].'</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>';
                    break;
                case 3 :
                     $request['look'] = '
                                <li class="tl-item">
                                  <div class="tl-wrap b-gol">
                                    <span class="tl-date">'.$request['minuto'].'Min. </span>
                                    <div class="tl-content panel padder b-a w-md w-auto-xs">
                                      <span class="arrow left pull-up"></span>
                                      <div class="text-lt m-b-sm">GOOOOOOL</div>
                                      <div class="panel-body pull-in b-t b-light">
                                        <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                          <img src="img/a4.jpg" alt="...">
                                          <i class="on md b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                          <p>'.$request['contenido'].'</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>';
                    break;
                case 4 :
                     $request['look'] = '
                                <li class="tl-item">
                                  <div class="tl-wrap b-medio">
                                    <span class="tl-date">'.$request['minuto'].'Min. </span>
                                    <div class="tl-content panel padder b-a w-md w-auto-xs">
                                      <span class="arrow left pull-up"></span>
                                      <div class="text-lt m-b-sm">Medio Tiempo</div>
                                      <div class="panel-body pull-in b-t b-light">
                                        <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                          <img src="img/a4.jpg" alt="...">
                                          <i class="on md b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                          <p>'.$request['contenido'].'</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>';
                    break;
                    case 5 :
                     $request['look'] = '
                                <li class="tl-item">
                                  <div class="tl-wrap b-extra">
                                    <span class="tl-date">'.$request['minuto'].'Min. </span>
                                    <div class="tl-content panel padder b-a w-md w-auto-xs">
                                      <span class="arrow left pull-up"></span>
                                      <div class="text-lt m-b-sm">Minutos Extras</div>
                                      <div class="panel-body pull-in b-t b-light">
                                        <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                          <img src="img/a4.jpg" alt="...">
                                          <i class="on md b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                          <p>'.$request['contenido'].'</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>';
                    break;
                    case 6 :
                     $request['look'] = '
                                <li class="tl-item">
                                  <div class="tl-wrap b-final">
                                    <span class="tl-date">'.$request['minuto'].'Min. </span>
                                    <div class="tl-content panel padder b-a w-md w-auto-xs">
                                      <span class="arrow left pull-up"></span>
                                      <div class="text-lt m-b-sm">Final del Partido</div>
                                      <div class="panel-body pull-in b-t b-light">
                                        <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                          <img src="img/a4.jpg" alt="...">
                                          <i class="on md b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                          <p>'.$request['contenido'].'</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>';
                    break;
                    case 7 :
                     $request['look'] = '
                                <li class="tl-item">
                                  <div class="tl-wrap b-amarilla">
                                    <span class="tl-date">'.$request['minuto'].'Min. </span>
                                    <div class="tl-content panel padder b-a w-md w-auto-xs">
                                      <span class="arrow left pull-up"></span>
                                      <div class="text-lt m-b-sm">Tarjeta Amarilla</div>
                                      <div class="panel-body pull-in b-t b-light">
                                        <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                          <img src="img/a4.jpg" alt="...">
                                          <i class="on md b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                          <p>'.$request['contenido'].'</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>';
                    break;
                    case 8 :
                     $request['look'] = '
                                <li class="tl-item">
                                  <div class="tl-wrap b-roja">
                                    <span class="tl-date">'.$request['minuto'].'Min. </span>
                                    <div class="tl-content panel padder b-a w-md w-auto-xs">
                                      <span class="arrow left pull-up"></span>
                                      <div class="text-lt m-b-sm">Tarjeta Roja</div>
                                      <div class="panel-body pull-in b-t b-light">
                                        <a href="" class="thumb pull-right m-l m-t-xs avatar">
                                          <img src="img/a4.jpg" alt="...">
                                          <i class="on md b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                          <p>'.$request['contenido'].'</p>                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>';
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

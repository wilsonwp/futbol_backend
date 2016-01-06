<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;

use futboleros\Http\Requests;
use futboleros\Http\PartidoRequests;
use futboleros\Http\Controllers\Controller;
use futboleros\Campeonato;
use futboleros\Jornada;
use futboleros\EquipoPartido;
use futboleros\Partido;
use futboleros\Equipo;
use Illuminate\Routing\Route;
use Auth;
use Session;
use Redirect;
use DB;
class PartidosController extends Controller
{
    
    
    public function __construct(){
        $this->middleware('cors');
        //$this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
   public function find(Route $route){
       $this->partido = Partido::find($route->getParameter('partidos'));
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
      $partidos = DB::table('equipo_partido')
            ->join('equipos', 'equipos.id', '=','equipo_partido.equipo_id' )
            ->join('partidos', 'partidos.id', '=','equipo_partido.partido_id' )
            ->join('campeonatos', 'equipos.campeonato_id', '=','campeonatos.id' )
            ->groupBy('equipo_partido.id')
            ->get()
              ;
         * 
         */
       $partidos = Partido::all();
     // dd($partidos);
      return view('partidos.index', ['partidos' => $partidos]);
      
      
    }
    public function partidos_live()
    {
      $partidos= Partido::with('equipos')
              ->where('partidos.estatus_partido',1)
              ->get();
        return  response()->json($partidos->toArray()) ;
      
      
    }
    public function partidos_live_local()
    {
     $partidos= DB::table('partidos')
            ->where(['estatus_partido'=>1])
            ->join('campeonatos', 'partidos.campeonato_id', '=','campeonatos.id' )
            ->groupBy('partidos.id')
            ->get()
              ;
        return  response()->json($partidos);
      
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $campeonatos = Campeonato::lists('nombre_campeonato','id');
      $jornadas = Jornada::lists('numero','id');
      return view('partidos.create',['campeonatos'=>$campeonatos,'jornadas'=>$jornadas]);
    }
    public function get_jornada(Request $request,$id){
        $jornadas = Jornada::get_jornadas($id);
            return response()->json($jornadas);
        if($request->ajax()){
            $jornadas = Jornada::get_jornadas($id);
            return response()->json($jornadas);
        }
    }
    public function get_equipo(Request $request,$id){
        $equipos = Equipo::get_equipos($id);
            return response()->json($equipos);
        if($request->ajax()){
            $equipos = Equipo::get_equipos($id);
            return response()->json($equipos);
        }
    }
     public function get_estadio(Request $request,$id){
      
        if($request->ajax()){
            $equipos = Equipo::get_estadio($id);
            return response()->json($equipos);
        }
    }
     public function get_estatus(Request $request,$id){
            if($request->ajax()){
                $partidos = Partido::get_estatus($id);
                return response()->json($partidos);
            }
            
       
    }
    public function get_comentarios($partido){
        $partido = Partido::find($partido);
        //dd($partido->comentarios);
        return response()->json(
                $partido->comentarios->toArray()
                );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request)
    {
          $partido = new Partido;
          $partido->create($request->all());
          $id_partido = $partido->all()->last();
         $detalle_partido1 = new EquipoPartido;
         $detalle_partido1->create([
        'partido_id'=>$id_partido->id,
         'equipo_id' => $request['equipo_local'],
         'calidad' => 0
            ]);
         $detalle_partido2 = new EquipoPartido;
         $detalle_partido2->create([
        'partido_id'=>$id_partido->id,
         'equipo_id' => $request['equipo_visitante'],
         'calidad' => 1
            ]);
       
        Session::flash('message','Partido Creado con Exito');
        return Redirect::to('/partidos');
        
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
           return response()->json(
                $this->partido->toArray()
                );
  
        
      
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
        return response()->json([
            
            'mensaje'=>'Actualizado con Exito'
        ]);
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

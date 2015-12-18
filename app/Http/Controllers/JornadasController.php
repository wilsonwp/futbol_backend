<?php

namespace futboleros\Http\Controllers;
use Illuminate\Http\Request;
use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;
use \futboleros\Jornada;
use \futboleros\Campeonato;
use Redirect;
use Session;
use Illuminate\Routing\Route;
class JornadasController extends Controller
{
    public function __construct(){
         $this->middleware('auth');
        $this->beforeFilter('@find_jornada',['only' => ['edit','update','destroy']]);
    }
    public function find_jornada(Route $route){
        $this->jornada = Jornada::find($route->getParameter('jornadas'));
    }
    public function index()
    {
      
      $jornadas = Jornada::paginate(10);
      return view('jornadas.index', ['jornadas' => $jornadas]);
    }

    public function create()
    {
      $campeonatos = Campeonato::lists('nombre','id');
      return view('jornadas.create',compact('campeonatos'));
    }

    public function store(Request $request)
    {
         if( Jornada::create([
            'numero' =>$request['numero'],
             'show'=> 'Fecha No.'.$request['numero'],
            'fecha' =>$request['fecha'],
            'campeonato_id' =>$request['campeonato_id']
        ])){
         return redirect('jornadas')->with('message','store');
        }else{
            return "fallo al registrar";
        }
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $campeonatos = Campeonato::lists('nombre','id');
       return view('jornadas.edit',['jornada'=>$this->jornada,'campeonatos'=>$campeonatos]);
        //
    }

    public function update(Request $request, $id)
    {
        $this->jornada->fill($request->all());
        $this->jornada->save();
        Session::flash('message','Jornada actualizada con Exito');
        return Redirect::to('/jornadas');
    }

    public function destroy($id)
    {
        Jornada::destroy($id);
        Session::flash('message','Jornada Eliminada');
        return Redirect::to('/jornadas');
        
    }
}

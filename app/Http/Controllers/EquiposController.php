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
use Illuminate\Routing\Route;

class EquiposController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find_equipo',['only' => ['edit','update','destroy']]);
    }
    //este metodo busca los parametros que usan los metodos edit, update y destroy
    public function find_equipo(Route $route){
        $this->equipo = Equipo::find($route->getParameter('equipos'));
   
    }
    
    public function index()
    {
      $equipos = Equipo::paginate(10);
      return view('equipos.index', ['equipos' => $equipos]);
    }

    public function create()
    {
      $campeonatos = Campeonato::lists('nombre_campeonato','id');
      $tecnicos = Tecnico::lists('nombre','id');
      $estadios = Estadio::lists('nombre','id');
      return view('equipos.create',['campeonatos'=>$campeonatos,'tecnicos'=>$tecnicos,'estadios'=>$estadios]);
    }
    
    public function store(Request $request)
    {
       Equipo::create($request->all());
        Session::flash('message','Equipo Creado con Exito');
        return Redirect::to('/equipos');
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      $campeonatos = Campeonato::lists('nombre_campeonato','id');
      $tecnicos = Tecnico::lists('nombre','id');
      $estadios = Estadio::lists('nombre','id');
      return view('equipos.edit',['campeonatos'=>$campeonatos,'tecnicos'=>$tecnicos,'estadios'=>$estadios,'equipo'=>$this->equipo]);
        
    }
    public function update(Request $request, $id)
    {
        $this->equipo->fill($request->all());
        $this->equipo->save();
        Session::flash('message','Equipo actualizado con Exito');
        return Redirect::to('/equipos');
        //
    }
    public function destroy($id)
    {
        Equipo::destroy($id);
        Session::flash('message','Equipo Eliminado');
        return Redirect::to('/equipos');
        
    }
}

<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;

use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;
use futboleros\Log;
use Illuminate\Routing\Route;
use futboleros\Tecnico;
class TecnicosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
     //este metodo busca los parametros que usan los metodos edit, update y destroy
    public function find(Route $route){
        $this->tecnico = Tecnico::find($route->getParameter('tecnicos'));
   
    }
    
    public function index()
    {
        $tecnicos = Tecnico::paginate(10);
        return view('tecnicos.index',['tecnicos'=>$tecnicos]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tecnico:create($request->all());
        Session::flash('message','Tecnico Creado con Exito');
        Redirect::to('tecnicos');
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
       return view('tecnicos.edit',['tecnico'=>$this->tecnico]);
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

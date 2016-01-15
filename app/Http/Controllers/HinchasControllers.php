<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;
use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;
use futboleros\Hincha;
use Session;
use Redirect;
use Mail;
use Illuminate\Routing\Route;
use futboleros\Log;

class HinchasController extends Controller
{
    
    public function __construct(){
        $this->beforeFilter('@find',['only' => ['emailSender']]);
    }
  
    public function find(Route $route){
        $this->hincha = Hincha::find($route->getParameter('hinchas'));
   
    }
    public function index()
    {
      $hinchas = Hincha::paginate(5);
      return view('usuarios.index',compact('hinchas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('usuarios.create',compact('tipo_usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Hincha::create($request->all());
       return response()->json(['mensaje'=>'Hincha creado con Exito']);  
    }
    function emailSender($email,$password){
         Mail::send('emails.registro', ['email' => $email,'password' => $password], function ($m) use ($email) {
            $m->from('garcia.solutions@gmail.com', 'Futboleros');

            $m->to($email, 'suscriptor')->subject('Datos de Ingreso a Backend del Sistema');
        });
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
      $hincha = Hincha::find($id);
       $tipo_usuarios = CategoriaHincha::lists('nombre_categoria','id');
       return view('usuarios.edit',['hincha'=>$hincha,'tipo_usuarios'=>$tipo_usuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HinchaUpdateRequest $request, $id)
    {
         $hincha = Hincha::find($id);
        $hincha->fill($request->all());
        $hincha->save();
        Session::flash('message','Usuario Actualizado con Exito');
        return Redirect::to('/hinchas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hincha::destroy($id);
        Session::flash('message','Usuario Eliminado');
        return Redirect::to('/hinchas');
        
    }
}

<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;
use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = \futboleros\User::all();
      return view('usuarios.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //aqui consulto los tipo de usuarios de la tabla categoria_user_id
      $tipo_usuarios = \futboleros\CategoriaUser::lists('nombre_categoria','id');
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
       if( \futboleros\User::create([
            'nombre' =>$request['nombre'],
            'apellido' =>$request['apellido'],
            'username' =>$request['username'],
            'email'=>$request['email'],
            'categoria_user_id' =>$request['categoria_user_id'],
            'password'=> bcrypt($request['password'])
        ])){
         return redirect('users')->with('message','store');
        }else{
            return "fallo al registrar";
        }
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

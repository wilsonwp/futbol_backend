<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;

use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;
use Html;
class BackendController extends Controller
{
    public function __construct() {
        $this->middleware('auth',['only'=>'admin']);
    }
 
     public function index()
    {
       return view('index');
    }
    
    //metodo de panel de control
    
     public function admin()
    {
       return view('admin');
    }
    
    
    
}

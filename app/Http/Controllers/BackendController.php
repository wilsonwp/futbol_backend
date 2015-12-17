<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;

use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;

class BackendController extends Controller
{
 
     public function login()
    {
       return view('login');
    }
    //metodo de panel de control
    
     public function admin()
    {
       return view('admin');
    }
    
    
}

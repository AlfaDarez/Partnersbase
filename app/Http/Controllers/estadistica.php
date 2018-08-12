<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estadistica extends Controller
{
    //

    function index()
    {
    	return view('template.estadistica');
    }

    function busqueda($usuario,$mes){
    	

    	return view('template.estadistica',compact(compras,costo));

    }
}

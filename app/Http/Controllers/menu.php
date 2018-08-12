<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
#--> mmx chipper all

class menu extends Controller
{

	function index(){
		return view('Menus.principal');
	}

    
    function partners(){

    	return view('Menus.partners');
     }


     function admin(){
     	return view('Menus.admin');
     }

     function biblioteca(){
     	return view('Menus.biblioteca');
     }


     function tienda(){
     	return view('Menus.tienda');
     }

     //// Estadisticas tiene su propio controlador 

     function reportes(){
     	return view('Menus.reportes');
     }


     function configuracion(){
           return view('Menus.configuracion');
     }
     /// Opciones Menu Usuarios
    function usermenu(){
        return view('user-menu.main');
    }


     function usernegocios(){
        return view('user-menu.centro-negocios');
     }

     function userclientes(){
        return view('user-menu.clientes');
     }

     function usercompras(){
        return view('user-menu.compras');
     }


     function library(){
        return view('user-menu.user-biblioteca');
     }

    function confipartners(){
        return view('user-menu.configuracion');
    }





}

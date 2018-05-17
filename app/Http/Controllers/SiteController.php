<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    }
    /**
     * Obtiene la vista de inicio
     */
    public function showInicio() {
        return view('site.inicio');
    }
    /**
     * Obtiene la vista de quines somos
     */
    public function showQuienesSomos() {
        return view('site.quienesSomos');
    }
    /**
     * Obtiene la vista de nuestros servicios
     */
    public function showNuestrosServicios() {
        return view('site.nuestrosServicios');
    }
    /**
     * Obtiene la vista de contactanos
     */
    public function showContactanos() {
        return view('site.contactanos');
    }

    public function dashboard(){
      if(Auth::check()){
        if(Auth::user()->rol == "Administrador"){
          return view('site.dashboardAdmin');
        }
        if(Auth::user()->rol == "Cliente"){
          return view('site.dashboardCliente');
        }
        if(Auth::user()->rol == "Tecnico"){
          return view('site.dashboardTecnico');
        }
      }
      else{
        Session::flash('flash_message','Debe iniciar sesión antes de continuar');
        return redirect()->route('login');
      }
    }

}

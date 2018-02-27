<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}

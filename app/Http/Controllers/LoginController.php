<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Obtiene la vista del login
     *
     * @return \Illuminate\Http\Response
     */
    public function login() {
        return view('auth.login');
    }

    /**
     * Hace el post del login
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function postLogin( Request $request) {
        return redirect()->route('tecnicos');
    }

}

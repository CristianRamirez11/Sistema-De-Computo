<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;


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
        try{
              $credenciales = $request->only('email', 'password');
              //$usuario = User::all()->where('email',$email);
              if(Auth::attempt($credenciales)){


              return redirect()->route('dashboard');
            }
        }catch(ModelNotFoundException $e){
              Session::flash('flash_message', 'Error con correo o contraseña, valide las credenciales ingresadas');
              return redirect()->back();
        }


    }

    public function logout(){
      if(Auth::check()){
        Auth::logout();
        Session::flash('flash_message', 'La sesión se cerró correctamente');
        return redirect()->route('login');
      }
      else{
        Session::flash('flash_message', 'Por favor inicie sesión antes.');
        return redirect()->route('login');
      }
    }

}

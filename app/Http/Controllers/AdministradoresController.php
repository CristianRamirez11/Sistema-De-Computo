<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;


class AdministradoresController extends Controller
{
    //

    public function __construct(){
      $this->middleware('auth');
    }
    public function create(){

      return view('admin.createUser');

    }

    public function store(Request $request){

      $this->validate($request, [
            'name'        => 'required | string | max:40',
            'email'       => 'required | email | max:255 | unique:users',
            'password'    => 'required | min:6 |confirmed',
            'cedula'      => 'required | integer | min:6',
            'direccion'   => 'string | max:255',
            'telefono'    => 'integer | min:0',
            'rol'  => 'required | string |in:Administrador,Cliente,Tecnico'
        ]);
      User::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => Hash::make($request['password']),
          'cedula' => $request['cedula'],
          'direccion' => $request['direccion'],
          'telefono' => $request['telefono'],
          'rol' => $request['rol'],
      ]);
      if($request['rol'] == "Administrador"){
        Session::flash('flash_message', "Se ha creado con éxito el nuevo administrador");
      }
      else if($request['rol'] == "Cliente"){
        Session::flash('flash_message', "Se ha creado con éxito el nuevo cliente");
      }
      else if($request['rol'] == "Tecnico"){
        Session::flash('flash_message', "Se ha creado con éxito el nuevo tecnico");
      }
        return redirect()->route('admin.index');
    }

    public function index(){
      $usuarios = User::all();
      return view('admin.listUsers', ['usuarios' => $usuarios]);
    }

    public function show(Request $request,$id) {
        try{
            $usuario=User::findOrFail($id);
            return view('admin.showUser', ['usuario' => $usuario]);
        }catch(ModelNotFoundException $e){
            Session::flash('flash_message','El usuario '.$id.' no existe en la base de datos');
            return redirect()->back();
        }

    }

    public function edit($id) {
      try{

          $cliente = User::findOrFail($id);
          return view('clientes.edit')->withcliente($cliente);
      }catch(ModelNotFoundException $e){
          Session::flash('flash_message','El cliente no existe en la base de datos');
          return redirect()->back();
      }

    }


    public function update($id, Request $request) {
        try{
            $cliente = User::findOrFail($id);
            $this->validate($request, [
                  'name'        => 'required | string | max:45',
                  'email'       => 'required | email | max:255',
                  'cedula'      => 'required | integer | min:6',
                  'direccion'   => 'string | max:255',
                  'telefono'    => 'integer | min:0',
                  'rol'  => 'required | string |in:Administrador,Cliente,Tecnico'
              ]);

              $input['name']= $request['name'];
              $input['email']= $request['email'];
              $input['cedula']= $request['cedula'];
              $input['direccion']= $request['direccion'];
              $input['telefono']= $request['telefono'];
              $input['rol']= $request['rol'];

              $cliente->fill($input)->save();
              Session::flash('flash_message', 'El usuario fue actualizado correctamente');
              return redirect()->route('clientes.index');

        }catch(ModelNotFoundException $e){
          Session::flash('flash_message', 'El usuario no se encuentra en al base de datos');
          return redirect()->back();
        }

    }

    public function destroy(Request $request, $id) {
        try{
            $cliente = User::findOrFail($id);
            $cliente->delete();
            Session::flash('flash_message', 'El usuario se ha eliminado satisfactoriamente');
            return redirect()->route('admin.listUsers');
        }catch(ModelNotFoundException $e){
            Session::flash('flash_message', 'El usuario no existe en la base de datos');
            return redirect()->back();
        }

    }



}

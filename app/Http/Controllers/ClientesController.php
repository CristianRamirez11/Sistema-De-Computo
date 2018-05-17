<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;


class ClientesController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
      $this->middleware('auth');
    }

    /**
     * Obtiene todos los clientes registrado
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

      try{
          $clientes = User::all()->where('rol','Cliente');
          //dd($clientes);
          return view('clientes.index')->withclientes($clientes);
      }catch(ModelNotFoundException $e){
          Session::flash('flash_message', 'Hubo un problema al cargar los clientes de la base de datos');
          return redirect()->back();
      }

    }

    /**
     * Obtiene la vista para crear un cliente
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('clientes.create');
    }

    /**
     * Crea un nuevo cliente
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

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
        Session::flash('flash_message', "Se ha creado con éxito el nuevo cliente");
        return redirect()->route('clientes.index');
    }

    /**
     * Visualiza un cliente en especial
     *
     * @param $id int identificador del tecnico
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id) {
        try{
            $cliente=User::findOrFail($id);
            return view('clientes.show', ['cliente' => $cliente]);
        }catch(ModelNotFoundException $e){
            Session::flash('flash_message','El cliente '.$id.' no existe en la base de datos');
            return redirect()->back();
        }

    }

    /**
     * Obtiene la vista para editar un cliente
     *
     * @param $id int identificador del cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
      try{

          $cliente = User::findOrFail($id);
          return view('clientes.edit')->withcliente($cliente);
      }catch(ModelNotFoundException $e){
          Session::flash('flash_message','El cliente no existe en la base de datos');
          return redirect()->back();
      }

    }

    /**
     * Actualiza un cliente
     *
     * @param $id int identificador del cliente
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
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
              Session::flash('flash_message', 'El cliente fue actualizado correctamente');
              return redirect()->route('clientes.index');

        }catch(ModelNotFoundException $e){
          Session::flash('flash_message', 'El cliente no se encuentra en al base de datos');
          return redirect()->back();
        }

    }

    /**
     * Elimina un cliente
     *
     * @param $id int identificador del cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        try{
            $cliente = User::findOrFail($id);
            $cliente->delete();
            Session::flash('flash_message', 'El cliente se ha eliminado satisfactoriamente');
            return redirect()->route('clientes.index');
        }catch(ModelNotFoundException $e){
            Session::flash('flash_message', 'El cliente no existe en la base de datos');
            return redirect()->back();
        }

    }

    /**
     * Obtiene la vista para buscar un cliente
     *
     * @return \Illuminate\Http\Response
     */
    public function search() {
        return view('clientes.search', ['cliente' => null]);
    }

    /**
     * Busca un cliente
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function postSearch(Request $request) {
        $cliente = ['nombre' => 'Tecnico 1', 'identificacion' => '12345', 'direccion' => 'Calle 41', 'telefono' => '12345'];
        return view('clientes.search', ['cliente' => $cliente]);
    }

}

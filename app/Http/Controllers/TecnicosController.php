<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class TecnicosController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  /**
   * Obtiene todos los tecnicos registrado
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {

    try{
        $tecnicos = User::all()->where('rol','Tecnico');
        //dd($tecnicos);
        return view('tecnicos.index')->withtecnicos($tecnicos);
    }catch(ModelNotFoundException $e){
        Session::flash('flash_message', 'Hubo un problema al cargar los tecnicos de la base de datos');
        return redirect()->back();
    }

  }

  /**
   * Obtiene la vista para crear un tecnico
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
      return view('tecnicos.create');
  }

  /**
   * Crea un nuevo tecnico
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
          'rol'  => 'required | string |in:Administrador,tecnico,Tecnico'
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
      Session::flash('flash_message', "Se ha creado con éxito el nuevo tecnico");
      return redirect()->route('tecnicos.index');
  }

  /**
   * Visualiza un tecnico en especial
   *
   * @param $id int identificador del tecnico
   * @return \Illuminate\Http\Response
   */
  public function show(Request $request,$id) {
      try{
          $tecnico=User::findOrFail($id);
          return view('tecnicos.show', ['tecnico' => $tecnico]);
      }catch(ModelNotFoundException $e){
          Session::flash('flash_message','El tecnico '.$id.' no existe en la base de datos');
          return redirect()->back();
      }

  }

  /**
   * Obtiene la vista para editar un tecnico
   *
   * @param $id int identificador del tecnico
   * @return \Illuminate\Http\Response
   */
  public function edit($id) {
    try{

        $tecnico = User::findOrFail($id);
        return view('tecnicos.edit')->withtecnico($tecnico);
    }catch(ModelNotFoundException $e){
        Session::flash('flash_message','El tecnico no existe en la base de datos');
        return redirect()->back();
    }

  }

  /**
   * Actualiza un tecnico
   *
   * @param $id int identificador del tecnico
   * @param Illuminate\Http\Request $request donde vienen los datos del request
   * @return \Illuminate\Http\Response
   */
  public function update($id, Request $request) {
      try{
          $tecnico = User::findOrFail($id);
          $this->validate($request, [
                'name'        => 'required | string | max:45',
                'email'       => 'required | email | max:255',
                'cedula'      => 'required | integer | min:6',
                'direccion'   => 'string | max:255',
                'telefono'    => 'integer | min:0',
                'rol'  => 'required | string |in:Administrador,tecnico,Tecnico'
            ]);

            $input['name']= $request['name'];
            $input['email']= $request['email'];
            $input['cedula']= $request['cedula'];
            $input['direccion']= $request['direccion'];
            $input['telefono']= $request['telefono'];
            $input['rol']= $request['rol'];

            $tecnico->fill($input)->save();
            Session::flash('flash_message', 'El tecnico fue actualizado correctamente');
            return redirect()->route('tecnicos.index');

      }catch(ModelNotFoundException $e){
        Session::flash('flash_message', 'El tecnico no se encuentra en al base de datos');
        return redirect()->back();
      }

  }

  /**
   * Elimina un tecnico
   *
   * @param $id int identificador del tecnico
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request, $id) {
      try{
          $tecnico = User::findOrFail($id);
          $tecnico->delete();
          Session::flash('flash_message', 'El tecnico se ha eliminado satisfactoriamente');
          return redirect()->route('tecnicos.index');
      }catch(ModelNotFoundException $e){
          Session::flash('flash_message', 'El tecnico no existe en la base de datos');
          return redirect()->back();
      }

  }

  /**
   * Obtiene la vista para buscar un tecnico
   *
   * @return \Illuminate\Http\Response
   */
  public function search() {
      return view('tecnicos.search', ['tecnico' => null]);
  }

  /**
   * Busca un tecnico
   * @param Illuminate\Http\Request $request donde vienen los datos del request
   * @return \Illuminate\Http\Response
   */
  public function postSearch(Request $request) {
      $tecnico = ['nombre' => 'Tecnico 1', 'identificacion' => '12345', 'direccion' => 'Calle 41', 'telefono' => '12345'];
      return view('tecnicos.search', ['tecnico' => $tecnico]);
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\User;
use Illuminate\Support\Facades\Session;
use App\Equipo;

class SolicitudesController extends Controller
{
  //
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  /**
   * Obtiene todos los solicituds registrados
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $solicitudes = Solicitud::all();

      return view('solicitudes.index', ['solicitudes' => $solicitudes]);
  }

  public function listMine($id) {
      $solicitudes = Solicitud::all()->where('idCliente', '=', $id);
        return view('solicitudes.listMine', ['solicitudes' => $solicitudes]);
  }

  public function asignarTecnico($idSolicitud){
      $solicitud = Solicitud::findOrFail($idSolicitud);
      $equipo = Equipo::findOrFail($solicitud->idEquipo);
      $tecnicos = User::all()->where('rol', '=', 'Tecnico')->pluck('name','id');
      $cliente = User::findOrFail($solicitud->idCliente);

        return view('solicitudes.asignarTecnico', ['solicitud' => $solicitud,
        'equipo' => $equipo, 'tecnicos' => $tecnicos, 'cliente' => $cliente]);
  }

  public function verSolicitudesEquipo($idEquipo){
    try{
    $solicitudes = Solicitud::all()->where('idEquipo','=',$idEquipo);
    $equipo = Equipo::findOrFail($idEquipo);
    return view('solicitudes.solicitudesEquipo', ['solicitudes' => $solicitudes, 'equipo' => $equipo]);
  }catch(ModelNotFoundException $e){
    Session::flash('flash_message','Ha ocurrido un problema al buscar las solictudes del equipo seleccionado');
    return redirect()->back();
  }

  }

  /**
   * Obtiene la vista para crear un solicitud
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    try{

      $equipos = Equipo::all();
      if(!$equipos->isEmpty()){
        $equipos = Equipo::pluck('modelo','id')->all();
        return view('solicitudes.create')->withequipos($equipos);
      }
      else{
        Session::flash('flash_message', 'No hay equipos agregados en el sistema, comuníquese con el administrador');
        return redirect()->back();
      }
    }catch(ModelNotFoundException $e){

    }

  }

  /**
   * Crea una nueva solicitud
   * @param Illuminate\Http\Request $request donde vienen los datos del request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {


      $this->validate($request, [
          'idCliente'=> 'required | integer',
          'idEquipo'=> 'required | integer',
          'fecha'=> 'required | date | after:now()',
          'hora' => 'required | string | max:45',
          'descripcion' => 'required | string | max:45'

      ]);

      $input = $request->all();

      Solicitud::create($input);
      Session::flash('flash_message', "se ha guardado el informe correctamente");
      return redirect()->route('solicitudes.index');
  }

  /**
   * Visualiza un solicitud en especial
   *
   * @param $id int identificador del solicitud
   * @return \Illuminate\Http\Response
   */
  public function show(Request $request, $id) {
    try{
          $solicitud = Solicitud::findOrFail($id);
          $equipo = Equipo::findOrFail($solicitud['idEquipo']);
          $tecnico = User::findOrFail($solicitud->idTecnico);
          return view('solicitudes.show', ['solicitud' => $solicitud])
          ->withequipo($equipo)->withtecnico($tecnico);
    }catch(ModelNotFoundException $e){
        Session::flash('flash_message',"El solicitud no existe en la base de datos!");
        return redirect()->back();
    }

      //$solicitud = ['nombre' => 'solicitud 1', 'serial' => '12345', 'marca' => 'Mi marca', 'modelo' => 'Mi modelo', 'tipo' => 'Tipo 1'];

  }

  /**
   * Obtiene la vista para editar una solicitud
   *
   * @param $id int identificador del solicitud
   * @return \Illuminate\Http\Response
   */
  public function edit(Request $request,$id) {
    try{
          $solicitud = Solicitud::findOrFail($id);
          $equipos = Equipo::pluck('modelo','id')->all();
            return view('solicitudes.edit')->withsolicitud($solicitud)
            ->withequipos($equipos);
    }catch(ModelNotFoundException $e){
          Session::flash('flash_message',"la solicitud no existe en la base de datos!");
          return redirect()->back();
    }

  }

  /**
   * Obtiene la vista para editar un solicitud
   *
   * @param $id int identificador del solicitud
   * @param Illuminate\Http\Request $request donde vienen los datos del request
   * @return \Illuminate\Http\Response
   */
  public function update($id, Request $request) {
      try{
          $solicitud = Solicitud::findOrFail($id);
          $this->validate($request, [
              'idCliente'=> 'required | integer',
              'idEquipo'=> 'required | integer',
              'fecha'=> 'required | date',
              'hora' => 'required | string | max:45',
              'descripcion' => 'required | string | max:45'

          ]);
          $input = $request->all();
          $solicitud->fill($input)->save();
          Session::flash('flash_message', "La solicitud se ha modificado correctamente");
          return redirect()->route('solicitudes.index');
      }catch(ModelNotFoundException $e){

        Session::flash('flash_message', "La solicitud no existe en la base de datos");
        return redirect()->route('solicitudes.index');
      }
  }

  /**
   * Elimina un informe de solicitud
   *
   * @param $id int identificador del informe de solicitud a eliminar
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {
    try
    {
      $solicitud= Solicitud::findOrFail($id);

      $solicitud->delete();

      Session::flash('flash_message', 'La solicitud se ha eliminado exitosamente!');

      return redirect()->route('solicitudes.index');
    }
    catch(ModelNotFoundException $e)
    {
      Session::flash('flash_message', "La solicitud $id no fue eliminada o no existe en la base de datos");

      return redirect()->back();
    }
  }

  /**
   * Obtiene la vista para buscar un solicitud
   *
   * @return \Illuminate\Http\Response
   */
  public function search() {
      return view('solicitudes.search', ['solicitud' => null]);
  }

  /**
   * Busca un solicitud
   * @param Illuminate\Http\Request $request donde vienen los datos del request
   * @return \Illuminate\Http\Response
   */
  public function postSearch(Request $request) {
      $solicitud = ['nombre' => 'solicitud 1', 'serial' => '12345', 'marca' => 'Mi marca', 'modelo' => 'Mi modelo', 'tipo' => 'Tipo 1'];
      return view('solicitudes.search', ['solicitud' => $solicitud]);

}
}

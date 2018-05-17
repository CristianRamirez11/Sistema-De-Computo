<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Mantenimiento;
use App\Equipo;
use App\User;
use App\Solicitud;

class MantenimientoController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    }

    /**
     * Obtiene todos los mantenimientos registrados
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $mantenimientos = Mantenimiento::all();
        return view('mantenimientos.index', ['mantenimientos' => $mantenimientos]);
    }

    public function listMine($id) {
      $mantenimientos = Mantenimiento::all()->where('idTecnico',$id);
        return view('mantenimientos.index', ['mantenimientos' => $mantenimientos]);
    }

    /**
     * Obtiene la vista para crear un mantenimiento
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
      try{
        $equipos = Equipo::pluck('modelo','id')->all();
        $solicitudes = Solicitud::pluck('descripcion','id')->all();
          return view('mantenimientos.create')->withequipos($equipos)->withsolicitudes($solicitudes);
      }catch(ModelNotFoundException $e){

      }

    }

    /**
     * Crea un nuevo mantenimiento
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, [
            'idTecnico'=> 'integer',
            'codigo'=> 'required | integer',
            'fecha'=> 'required | date',
            'hora' => 'required | string | max:45',
            'descripcion' => 'required | string | max:45',
            'estado' => 'required | string | max:45',
            'tipo_de_mantenimiento' => 'required | string | max:45'
        ]);

        $input = $request->all();

        Mantenimiento::create($input);
        Session::flash('flash_message', "se ha guardado el informe correctamente");
        return redirect()->route('mantenimientos.index');
    }

    /**
     * Visualiza un mantenimiento en especial
     *
     * @param $id int identificador del mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
      try{
            $mantenimiento = Mantenimiento::findOrFail($id);
            $equipo = Equipo::findOrFail($mantenimiento['idEquipo']);
            $tecnico = User::findOrFail($mantenimiento['idTecnico']);

            return view('mantenimientos.show', ['mantenimiento' => $mantenimiento])
            ->withequipo($equipo)->withtecnico($tecnico);
      }catch(ModelNotFoundException $e){
          Session::flash('flash_message',"El mantenimiento no existe en la base de datos!");
          return redirect()->back();
      }

        //$mantenimiento = ['nombre' => 'mantenimiento 1', 'serial' => '12345', 'marca' => 'Mi marca', 'modelo' => 'Mi modelo', 'tipo' => 'Tipo 1'];

    }

    /**
     * Obtiene la vista para editar un mantenimiento
     *
     * @param $id int identificador del mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id) {
      try{
            $mantenimiento = Mantenimiento::findOrFail($id);
            $equipos = Equipo::pluck('modelo','id')->all();
            $tecnicos = User::where('rol','=','Tecnico')->pluck('nombre','id');
              return view('mantenimientos.edit')->withmantenimiento($mantenimiento)
              ->withequipos($equipos)->withtecnicos($tecnicos);
      }catch(ModelNotFoundException $e){
            Session::flash('flash_message',"El mantenimiento no existe en la base de datos!");
            return redirect()->back();
      }

    }

    /**
     * Obtiene la vista para editar un mantenimiento
     *
     * @param $id int identificador del mantenimiento
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request) {
        try{
            $mantenimiento = Mantenimiento::findOrFail($id);
            $this->validate($request, [
              'idTecnico'=> 'integer',
              'codigo'=> 'required | integer',
              'fecha'=> 'required | date',
              'hora' => 'required | string | max:45',
              'descripcion' => 'required | string | max:45',
              'estado' => 'required | string | max:45',
              'tipo_de_mantenimiento' => 'required | string | max:45'
            ]);
            $input = $request->all();
            $mantenimiento->fill($input)->save();
            Session::flash('flash_message', "El informe mantenimiento se ha modificado correctamente");
            return redirect()->route('mantenimientos.index');
        }catch(ModelNotFoundException $e){

          Session::flash('flash_message', "El informe mantenimiento no existe en la base de daatos");
          return redirect()->route('mantenimientos.index');
        }
    }

    /**
     * Elimina un informe de mantenimiento
     *
     * @param $id int identificador del informe de mantenimiento a eliminar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
      try
      {
        $mantenimiento= Mantenimiento::findOrFail($id);

        $mantenimiento->delete();

        Session::flash('flash_message', 'El informe se ha eliminado exitosamente!');

        return redirect()->route('mantenimientos.index');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "El informe $id no fue eliminado, ha ocurrido un error");

        return redirect()->back();
      }
    }

    /**
     * Obtiene la vista para buscar un mantenimiento
     *
     * @return \Illuminate\Http\Response
     */
    public function search() {
        return view('mantenimientos.search', ['mantenimiento' => null]);
    }

    /**
     * Busca un mantenimiento
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function postSearch(Request $request) {
        $mantenimiento = ['nombre' => 'mantenimiento 1', 'serial' => '12345', 'marca' => 'Mi marca', 'modelo' => 'Mi modelo', 'tipo' => 'Tipo 1'];
        return view('mantenimientos.search', ['mantenimiento' => $mantenimiento]);
    }
}

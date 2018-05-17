<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use Illuminate\Support\Facades\Session;
class EquiposController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
       $this->middleware('auth');
    }

    /**
     * Obtiene todos los equipos registrados
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $equipos = Equipo::all();
        return view('equipos.index', ['equipos' => $equipos]);
    }

    /**
     * Obtiene la vista para crear un equipo
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('equipos.create');
    }

    /**
     * Crea un nuevo equipo
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, [
            'serial'=> 'required | integer',
            'marca' => 'required | string | max:45',
            'modelo'=> 'required | string | max:45',
            'color' => 'required | string | max:45',
            'capacidad_memoria_RAM' => 'required | string | max:45',
            'capacidad_disco_duro' => 'required | string | max:45',
            'tipo_computador' => 'required | string | max:45'
        ]);

        $input = $request->all();
        Equipo::create($input);
        Session::flash('flash_message', "se ha guardado el equipo correctamente");
        return redirect()->route('equipos.index');
    }

    /**
     * Visualiza un equipo en especial
     *
     * @param $id int identificador del equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
      try{
            $equipo = Equipo::findOrFail($id);
            return view('equipos.show', ['equipo' => $equipo]);
      }catch(ModelNotFoundException $e){
          Session::flash('flash_message',"El equipo no existe en la base de datos!");
          return redirect()->back();
      }

        //$equipo = ['nombre' => 'Equipo 1', 'serial' => '12345', 'marca' => 'Mi marca', 'modelo' => 'Mi modelo', 'tipo' => 'Tipo 1'];

    }

    /**
     * Obtiene la vista para editar un equipo
     *
     * @param $id int identificador del equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id) {
      try{
            $equipo = Equipo::findOrFail($id);
              return view('equipos.edit')->withequipo($equipo);
      }catch(ModelNotFoundException $e){
            Session::flash('flash_message',"El equipo no existe en la base de datos!");
            return redirect()->back();
      }

    }

    /**
     * Obtiene la vista para editar un equipo
     *
     * @param $id int identificador del equipo
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request) {
        try{
            $equipo = Equipo::findOrFail($id);
            $this->validate($request, [
                'serial'=> 'required | integer',
                'marca' => 'required | string | max:45',
                'color' => 'required | string | max:45',
                'capacidad_memoria_RAM' => 'required | string | max:45',
                'capacidad_disco_duro' => 'required | string | max:45',
                'tipo_computador' => 'required | string | max:45'
            ]);
            $input = $request->all();
            $equipo->fill($input)->save();
            Session::flash('flash_message', "El equipo se actualizó con éxito");
            return redirect()->route('equipos.index');
        }catch(ModelNotFoundException $e){
          Session::flash('flash_message', "El equipo no existe en la base de datos");
          return redirect()->route('equipos.index');
        }
    }

    /**
     * Elimina un equipo
     *
     * @param $id int identificador del equipo a eliminar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
      try
      {
        $equipo= Equipo::findOrFail($id);

        $equipo->delete();

        Session::flash('flash_message', 'El equipo se ha eliminado exitosamente!');

        return redirect()->route('equipos.index');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "El equipo $id no fue eliminado, ha ocurrido un error");

        return redirect()->back();
      }
    }

    /**
     * Obtiene la vista para buscar un equipo
     *
     * @return \Illuminate\Http\Response
     */
    public function search() {
        return view('equipos.search', ['equipo' => null]);
    }

    /**
     * Busca un equipo
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function postSearch(Request $request) {
        $equipo = ['nombre' => 'Equipo 1', 'serial' => '12345', 'marca' => 'Mi marca', 'modelo' => 'Mi modelo', 'tipo' => 'Tipo 1'];
        return view('equipos.search', ['equipo' => $equipo]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquiposController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Obtiene todos los equipos registrados
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('equipos.index');
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
        return redirect()->route('equipos');
    }

    /**
     * Visualiza un equipo en especial
     *
     * @param $id int identificador del equipo
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $equipo = ['nombre' => 'Equipo 1', 'serial' => '12345', 'marca' => 'Mi marca', 'modelo' => 'Mi modelo', 'tipo' => 'Tipo 1'];
        return view('equipos.show', ['equipo' => $equipo]);
    }

    /**
     * Obtiene la vista para editar un equipo
     *
     * @param $id int identificador del equipo
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return view('equipos.edit');
    }

    /**
     * Obtiene la vista para editar un equipo
     *
     * @param $id int identificador del equipo
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request) {
        return redirect()->route('equipos');
    }

    /**
     * Elimina un quipo
     *
     * @param $id int identificador del tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        return redirect()->route('equipos');
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

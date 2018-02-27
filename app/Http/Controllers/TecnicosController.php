<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecnicosController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Obtiene todos los tecnicos registrado
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('tecnicos.index');
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
        return redirect()->route('tecnicos');
    }

    /**
     * Visualiza un tecnico en especial
     *
     * @param $id int identificador del tecnico
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $tecnico = ['nombre' => 'Tecnico 1', 'identificacion' => '12345', 'codigo' => 'AAAB1', 'telefono' => '12345'];
        return view('tecnicos.show', ['tecnico' => $tecnico]);
    }

    /**
     * Obtiene la vista para editar un tecnico
     *
     * @param $id int identificador del tecnico
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return view('tecnicos.edit');
    }

    /**
     * Actualiza un tecnico
     *
     * @param $id int identificador del tecnico
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request) {
        return redirect()->route('tecnicos');
    }

    /**
     * Elimina un técnico
     *
     * @param $id int identificador del tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        return redirect()->route('tecnicos');
    }

    /**
     * Obtiene la vista para buscar un técnico
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
        $tecnico = ['nombre' => 'Tecnico 1', 'identificacion' => '12345', 'codigo' => 'AAAB1', 'telefono' => '12345'];
        return view('tecnicos.search', ['tecnico' => $tecnico]);
    }

}

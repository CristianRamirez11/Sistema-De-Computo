<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Obtiene todos los clientes registrado
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('clientes.index');
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
        return redirect()->route('clientes');
    }

    /**
     * Visualiza un cliente en especial
     *
     * @param $id int identificador del tecnico
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $cliente = ['nombre' => 'Tecnico 1', 'identificacion' => '12345', 'direccion' => 'Calle 41', 'telefono' => '12345'];
        return view('clientes.show', ['cliente' => $cliente]);
    }

    /**
     * Obtiene la vista para editar un cliente
     *
     * @param $id int identificador del cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return view('clientes.edit');
    }

    /**
     * Actualiza un cliente
     *
     * @param $id int identificador del cliente
     * @param Illuminate\Http\Request $request donde vienen los datos del request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request) {
        return redirect()->route('clientes');
    }

    /**
     * Elimina un cliente
     *
     * @param $id int identificador del cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        return redirect()->route('clientes');
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

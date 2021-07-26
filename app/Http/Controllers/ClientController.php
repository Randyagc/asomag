<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveClientRequest;
use App\Cliente;
use App\Id_tipo;
use App\Cliente_tipo;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('clients.index', [
            'clientes' => Cliente::latest()->paginate(10)
        ]);
    }
    // Ejemplo de uso de ROUTE MODEL BINDING (Project $project)
    public function show(Cliente $client)
    {
        return view('clients.show', [
            'cliente' => $client,
        ]);
    }

    public function create()
    {
        return view('clients.create', [
            'cliente' => new Cliente(),
            'tiposid' => Id_tipo::all(['id', 'tid_descripcion']),
            'tiposcliente' => Cliente_tipo::all(['id', 'tpc_descripcion']),
        ]);
    }

    //  Otra manera segura de guardar información  y usando un formulario es la siguiente:
    public function store(SaveClientRequest $request)
    {
        Cliente::create($request->validated());
        return redirect()->route('clients.index')->with('status', 'El cliente fue creado con éxito');
    }

    public function edit(Cliente $client)
    {
        return view('clients.edit', [
            'cliente' => $client,
            'tiposid' => Id_tipo::all(['id', 'tid_descripcion'])
        ]);
    }

    public function update(Cliente $client, SaveClientRequest $request)
    {
        $client->update($request->validated());
        $cliente = $client;
        return redirect()->route('clients.show', $cliente)->with('status', 'El cliente fue actualizado con éxito');
    }

    public function destroy(Cliente $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('status', 'El cliente fue eliminado');
    }
}

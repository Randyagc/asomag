<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaveEstadoRequest;
use App\Estado;

class EstadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('estados.index', [
            'estados' => Estado::latest()->paginate()
        ]);
    }
    // Ejemplo de uso de ROUTE MODEL BINDING (Project $project)
    public function show(Estado $estado)
    {
        return view('estados.show', [
            'estado' => $estado
        ]);
    }

    public function create()
    {
        return view('estados.create', [
            'estado' => new Estado(),
            'estado_s' => Estado::latest()->paginate()
        ]);
    }

    public function store(SaveEstadoRequest $request)
    {
        Estado::create($request->validated());
        return redirect()->route('estados.index')->with('status', 'El Estado del registro fue creado con éxito');
    }

    public function edit(Estado $estado)
    {
        return view('estados.edit', [
            'estado' => $estado
            ]);
    }

    public function update(Estado $estado, SaveEstadoRequest $request)
    {
        $estado->update($request->validated());
        return redirect()->route('estados.show', $estado)->with('status', 'El Estado del Registro fue actualizado con éxito'); // phpcs:ignore
    }

    public function destroy(Estado $estado)
    {
        $estado->delete();
        return redirect()->route('estados.index')->with('status', 'El Estado del Registro fue eliminado');
    }
}

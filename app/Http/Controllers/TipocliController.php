<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaveTipocliRequest;
use App\Cliente_tipo;

class TipocliController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Handle the incoming request
     */

    public function index()
    {
        return view('clientstipo.index', [
            'tiposcli' => Cliente_tipo::latest()->paginate()
        ]);
    }

    // Ejemplo de uso de ROUTE MODEL BINDING (Project $project)
    public function show(Cliente_tipo $tiposcli)
    {
        return view('clientstipo.show', [
            'tipocli' => $tiposcli
        ]);
    }

    public function create()
    {
        return view('clientstipo.create', [
            'tipocli' => new Cliente_tipo(),
        ]);
    }

    public function store(SaveTipocliRequest $request)
    {
        Cliente_tipo::create($request->validated());
        return redirect()->route('clitipos.index')->with('status', 'El Tipo de cliente fue creado con éxito');
    }

    public function edit(Cliente_tipo $tiposcli)
    {
        return view('clientstipo.edit', [
            'tipocli' => $tiposcli
            ]);
    }

    public function update(Cliente_tipo $tiposcli, SaveTipocliRequest $request)
    {
        $tiposcli->update($request->validated());
        $tipocli = $tiposcli;
        return redirect()->route('clitipos.show', $tipocli)->with('status', 'El Tipo de Cliente fue actualizado con éxito'); // phpcs:ignore
    }

    public function destroy(Cliente_tipo $tiposcli)
    {
        $tiposcli->delete();
        return redirect()->route('clitipos.index')->with('status', 'El Tipo de cliente fue eliminado');
    }
}

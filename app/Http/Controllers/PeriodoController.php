<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePeriodoRequest;
use App\Periodo;

class PeriodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view("periodos.index", [
            "periodos" => Periodo::latest()->paginate()
        ]);
    }

    public function create()
    {
        return view("periodos.create", [
            "periodo" => new Periodo()
        ]);
    }

    public function store(SavePeriodoRequest $request)
    {
        Periodo::create($request->validated());
        return redirect()->route("periodos.index")->with("status", "El Período fue creado satisfactoriamente");
    }

    public function show(Periodo $periodo)
    {
        return view("periodos.show", [
            "periodo" => $periodo
        ]);
    }

    public function edit(Periodo $periodo)
    {
        return view("periodos.edit", [
            "periodo" => $periodo
        ]);
    }

    public function update(Periodo $periodo, SavePeriodoRequest $request)
    {
        $periodo->update($request->validated());
        return redirect()->route("periodos.show", $periodo)->with("status", "El Período fue actualizado existosamente");
    }

    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route("periodos.index")->with("status", "El Período fue eliminado exitosamente");
    }
}

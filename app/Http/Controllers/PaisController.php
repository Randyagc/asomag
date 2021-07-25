<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources;
use App\Http\Requests\SavePaisRequest;
use App\Paise;
use App\Estado;

class PaisController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pais.index', [
            'paises' => Paise::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pais.create', [
            'pais' => new Paise(),
            'estados' => Estado::all(['id', 'est_descripcion']),
        ]);
    }

    public function store(SavePaisRequest $request)
    {
        Paise::create($request->validated());
        return redirect()->route('pais.index')->with('status', 'El Pais fue creado con éxito');
    }

    public function show(Paise $pai)
    {
        return view('pais.show', [
                'pais' => $pai
            ]);
    }

    public function edit(Paise $pai)
    {
        return view('pais.edit', [
            'pais' => $pai
            ]);
    }

    public function update(Paise $pai, SavePaisRequest $request)
    {
        $pai->update($request->validated());
        $pais = $pai;
        return redirect()->route('pais.show', $pais)->with('status', 'El Pais fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paise $pai)
    {
        $pai->delete();
        return redirect()->route('pais.index')->with('status', 'El Pais fue eliminado');
    }
}

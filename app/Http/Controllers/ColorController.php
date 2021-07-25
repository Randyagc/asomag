<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveColorRequest;
use App\Color;

class ColorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view("colors.index", [
            "colores" => Color::latest()->paginate()
        ]);
    }


    public function create()
    {
        return view("colors.create", [
            "color" => new Color()
        ]);
    }


    public function store(SaveColorRequest $request)
    {
        Color::create($request->validated());
        return redirect()->route("colores.index")->with("status", "El Color fue creado satisfactoriamente");
    }


    public function show(Color $color)
    {
        return view("colors.show", [
            "color" => $color
        ]);
    }


    public function edit(Color $color)
    {
        return view("colors.edit", [
            "color" => $color
        ]);
    }


    public function update(Color $color, SaveColorRequest $request)
    {
        $color->update($request->validated());
        return redirect()->route("colores.show", $color)->with("status", "El Color fue actualizado existosamente");
    }


    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()->route("colores.index")->with("status", "El Color fue eliminado exitosamente");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Imports\Proveedores;
use Maatwebsite\Excel\Facades\Excel;

class ImportprovController extends Controller
{
    public function index()
    {
        return view("import.importprov", [
            "proveedor" => Proveedor::latest()->paginate()
        ]);
    }

    public function importprov(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx',
        ]);
        $file = $request->file('file');
        Excel::import(new Proveedores(), $file);
        return back()->with('status', 'Importación de Proveedores completada');
    }
}

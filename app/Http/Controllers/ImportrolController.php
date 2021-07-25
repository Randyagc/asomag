<?php

namespace App\Http\Controllers;

use App\Role;
use App\Periodo;
use Illuminate\Http\Request;
use App\Imports\ImportrolMensual;
use Maatwebsite\Excel\Facades\Excel;

class ImportrolController extends Controller
{
    public function index()
    {
        return view("import.importrolmes", [
            "roles" => Role::latest()->paginate(10),
            "periodos" => Periodo::all()->where("per_estado", "=", "ACT"),
        ]);
    }

    public function importrolmes(Request $request)
    {
        $this->validate($request, [
            'file'  => 'required|mimes:xls,xlsx',
        ]);
        $archxls = $request->file('file');

        $col_improl = null;
        $col_improl = Excel::toCollection(new ImportrolMensual(), $archxls);
        for ($i = 0; $i < count($col_improl[0]); $i++) {
            $ingresados = new Role();
            $ingresados->rol_descripcion = $request->rol_descripcion;
            $ingresados->rol_cod_desc = $request->rol_cod_desc;
            $ingresados->rol_num_id = $col_improl[0][$i][0];
            $ingresados->rol_nombres = $col_improl[0][$i][1];
            $ingresados->rol_periodo = $request->rol_periodo;
            $ingresados->rol_valor = $col_improl[0][$i][2] ?? 0.00;
            $ingresados->rol_fecha_proceso = $request->rol_fecha_ingreso;
            $ingresados->rol_estado = $request->rol_estado;
            $ingresados->rol_user = $request->rol_user;
            $ingresados->save();
        }
        return back()->with('status', 'Importación de Rol Mensual del MAG completada');
    }
}

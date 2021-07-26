<?php

namespace App\Http\Controllers;

use App\Import_detalle;
use App\Periodo;
use App\Cliente;
use Illuminate\Http\Request;
use App\Imports\ImportDetprov;
use Maatwebsite\Excel\Facades\Excel;

class ImportdetprovController extends Controller
{
    public function index()
    {
        return view("import.importdetprov", [
            "proveedordet" => Import_detalle::latest()->paginate(10),
            "periodos" => Periodo::Estadoreg("ACT")->get(),
            "clientes" => Cliente::Proveedor(3)->get(), /** Uso de SCOPES, definido en el modelo(Cliente) */
        ]);
    }

    public function importdetprov(Request $request)
    {
        $this->validate($request, [
            'file'  => 'required|mimes:xls,xlsx',
        ]);
        $archxls = $request->file('file');

        if (isset($col_impdet)) {
            $col_impdet = null;
        }

        // var_dump($col_impdet);
        $col_impdet = Excel::toCollection(new ImportDetprov(), $archxls);
        // dd($col_impdet[0]);
        for ($i = 0; $i < count($col_impdet[0]); $i++) {
            $ingresados = new Import_detalle();
            $ingresados->imd_descripcion = $request->imd_descripcion;
            $ingresados->imd_codigo_proveedor = $request->imd_proveedor;
            $ingresados->imd_numero_transaccion = $i;
            $ingresados->imd_identificador_cliente = $col_impdet[0][$i][0];
            $ingresados->imd_nombre_cliente = $col_impdet[0][$i][1];
            $ingresados->imd_numero_consumos = $col_impdet[0][$i][2];
            $ingresados->imd_periodo = $request->imd_periodo;
            $ingresados->imd_subtotal = $col_impdet[0][$i][3];
            $ingresados->imd_costo_operacion = $col_impdet[0][$i][4];
            $ingresados->imd_total = $col_impdet[0][$i][5];
            $ingresados->imd_credito_meses = $col_impdet[0][$i][6];
            $ingresados->imd_estado = $request->imd_estado;
            $ingresados->imd_user = $request->imd_user;
            $ingresados->save();
        }
        return back()->with('status', 'Importación Detalle de Proveedores completada');
    }
}

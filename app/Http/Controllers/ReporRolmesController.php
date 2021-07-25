<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Periodo;
use App\Import_detalle;
use Illuminate\Http\Request;

class ReporRolmesController extends Controller
{
    public function index()
    {
        return view("reportes.repormes", [
            "periodos" => Periodo::Estadoreg("ACT")->get(),
            "clientes" => Cliente::Proveedor(7)->get(),
        ]);
    }

    public function show(Request $perfilter)
    {
        if (isset($perfilter->imd_prove)) {
            $imd_prove = $perfilter->imd_prove;
        }
        return view("reportes.repormesshow", [
            "rolmes" => Import_detalle::join("roles", "roles.rol_num_id", "import_detalles.imd_identificador_cliente")
                                ->where("imd_periodo", $perfilter->imd_periodo)
                                // ->where("rol_periodo", $perfilter->imd_periodo)
                                ->select("import_detalles.imd_codigo_proveedor", "import_detalles.imd_identificador_cliente", // phpcs:ignore
                                    "roles.rol_nombres", "roles.rol_valor", "import_detalles.imd_total",
                                "import_detalles.imd_credito_meses", "import_detalles.imd_costo_operacion")
                                ->orderBy("import_detalles.imd_codigo_proveedor", "asc")
                                ->orderBy("roles.rol_nombres", "asc")
                                ->get(),
            "rolind" => Cliente::with("impdet")->get(),
            "imd_periodo" => $perfilter->imd_periodo,
        ]);
    }
}

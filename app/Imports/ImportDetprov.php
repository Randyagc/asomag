<?php

namespace App\Imports;

use App\Import_detalle;

use Maatwebsite\Excel\Concerns\ToModel;

class ImportDetprov implements ToModel
{

    public function model(array $row)
    {
        return new Import_detalle([
            "imd_identificador_cliente" => $row[0],
            "imd_nombre_cliente" => $row[1],
            "imd_numero_consumos" => $row[2],
            "imd_subtotal" => $row[3],
            "imd_costo_operacion" => $row[4],
            "imd_total" => $row[5],
            "imd_credito_meses" => $row[6]
        ]);
    }


}

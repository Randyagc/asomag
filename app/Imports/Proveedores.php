<?php

namespace App\Imports;

use App\Proveedor;
use Maatwebsite\Excel\Concerns\ToModel;

class Proveedores implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Proveedor([
            "num_id" => $row[0],
            "nombre" => $row[1],
            "gasto" => $row[2],
            "cuota" => $row[3],
            "aso_porc" => $row[4],
            "total" => $row[5],
            "mes" => $row[6]
        ]);
    }
}

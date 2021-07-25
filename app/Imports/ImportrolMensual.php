<?php

namespace App\Imports;

use App\Role;

use Maatwebsite\Excel\Concerns\ToModel;

class ImportrolMensual implements ToModel
{

    public function model(array $row)
    {
        return new Role([
            "rol_num_id" => $row[0],
            "rol_nombres" => $row[1],
            "rol_valor" => $row[2]
        ]);
    }
}

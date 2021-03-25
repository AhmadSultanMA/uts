<?php

namespace App\Imports;

use App\Models\Table;
use Maatwebsite\Excel\Concerns\ToModel;

class UtsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Table([
            'namaKaryawan' => $row[0],
            'hadirMasuk' => $row[1],
            'izinMasuk' => $row[2],
            'bolosMasuk' => $row[3],
            'telatMasuk' => $row[4]
        ]);
    }
}

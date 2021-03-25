<?php

namespace App\Exports;

use App\Models\Table;
use Maatwebsite\Excel\Concerns\FromCollection;

class UtsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Table::all();
    }
}

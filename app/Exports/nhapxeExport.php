<?php

namespace App\Exports;

use App\nhapxe;
use Maatwebsite\Excel\Concerns\FromCollection;

class nhapxeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return nhapxe::all();
    }
}

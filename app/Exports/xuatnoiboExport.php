<?php

namespace App\Exports;
use Maatwebsite\Excel;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\xuatnoibo;
use Maatwebsite\Excel\Concerns\FromCollection;

class xuatnoiboExport implements FromView
{
    /**[
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('xuatnoibo.index', [
            'xuatnoibos' => xuatnoibo::latest()->paginate(10)
        ]);
    }
}

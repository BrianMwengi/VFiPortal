<?php

namespace App\Exports;

use App\Vfi;
use Maatwebsite\Excel\Concerns\FromCollection;

class VfisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vfi::all();
    }
}

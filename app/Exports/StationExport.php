<?php

namespace App\Exports;

use App\Models\Station;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithMapping;

class StationExport implements FromCollection
{
    public function collection(): \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
    {
        return Station::all();
    }
}

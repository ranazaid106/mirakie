<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelMultiplesExport implements FromCollection, WithHeadings
{
    protected $array;
    protected $columns;

    public function __construct(array $array, array $columns)
    {
        $this->array = $array;
        // $this->data = $data;
        $this->columns = $columns;
        
    }

    public function collection()
    {
        return new Collection($this->array);
    }

    public function headings(): array
    {
        return $this->columns;
    }
}


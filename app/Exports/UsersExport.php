<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection, WithHeadings
{


    protected $order;

    public function __construct(Collection $order)
    {
        $this->order = $order;
    }

    public function collection()
    {
        return $this->order;
    }

    public function headings(): array
    {
        // Define the column headers for the Excel file
        return [
            // 'Customer Name ', 'Address', 'Post code', 'phone number', 'country', 'product', 'Design', 'Price',  'Delivery date', 'Note', 'Agent name',
        ];


    
    }




}
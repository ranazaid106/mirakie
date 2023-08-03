<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Product;
use Maatwebsite\Excel\Row;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class UberImport implements WithHeadingRow, SkipsOnFailure, WithValidation, SkipsOnError, WithCalculatedFormulas, OnEachRow
{
    use Importable, SkipsErrors, SkipsFailures;

    public function onRow(Row $row)
    {
        $now = Carbon::now();
        // dd($row);
        $productGet = Product::where('name', $row['product'])->exists();
        // dd($productGet);
        if ($productGet == false) {
            $product = Product::create(array(
                'name' => $row['product'],
                'country' => $this->json($row['country']),
            ));
        } else {
            $product = Product::where('name', $row['product'])->first();
            // dd($product);
        }

        DB::table('product_variations')->insert(array(
            'design' => $this->json($row['design']),
            'size' => $this->json($row['size']),
            'headboard' => $this->json($row['headboard']),
            'color_or_fabric' => $this->json($row['colorfabric']),
            'matteres' => $this->json($row['mattress']),
            'storage' => $this->json($row['storage']),
            'product_id' => $product->id,
            'created_at' => $now,
            'updated_at' => $now,
        ));

        return true;
    }
    public function rules(): array
    {
        return [];
    }

    public function json($input)
    {
        $allDataArray = explode(',', $input);
        return json_encode($allDataArray);
    }
}

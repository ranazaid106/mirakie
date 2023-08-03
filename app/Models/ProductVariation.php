<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;
    protected $fillable = [
        'design', 'size', 'headboard', 'color_or_fabric', 'matteres', 'storage', 'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

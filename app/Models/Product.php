<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'price',
    'country',
  ];

  public function productVariations()
  {
    return $this->hasMany(ProductVariation::class);
  }

  public function orders()
  {
    return $this->hasMany(Order::class);
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'type',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsInvoices extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'role_id',
        'links',
        'note',
        'user_id',
      ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopyShortOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'short_orders_id',
        'short_country',
        'short_product',
        'short_order_message',
        'short_delivery_date',
        'short_post_code',
        'user_id',
        'customer_id',
        'comfirmation',
        'status',
        'commision',
        'commision_payment',
        'status_payment',
        'reason',
        'alert',
        'seen',
    ] ;
}

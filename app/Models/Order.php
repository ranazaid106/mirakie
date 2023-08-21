<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'user_id',
        'customer_id',
        'note',
        'price',
        'delivery_status',
        'delivery_date',
        'product_id',
        'qty',
        'alert',
        'seen',
    ];  	 	

  

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($obj) {
            $projectCount = Order::where('order_number', 'LIKE', '%-' . date('Y'))->count();
            $projectCount++;
            $obj->order_number = 'In-' . str_pad($projectCount, 5, '0', STR_PAD_LEFT) . '-' . date('Y');
            return true;
        });
    }
}

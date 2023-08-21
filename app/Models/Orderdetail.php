<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetails';

    protected $fillable = [
        'customer_id',
        'user_id',
        'order_id',
        'select_country',
        'select_product',
        'mattress_size',
        'select_mattress',
        'shipment_status',
        'ottoman_design',
        'ottoman_color',
        'ottoman_fabric',
        'gaslift_size',
        'gaslift_design',
        'headboard_size',
        'headboard_design',
        'headboard_color',
        'headboard_fabric',
        'without_diamond_size',
        'without_diamond_color',
        'without_diamond_fabric',
        'without_diamond_storage',
        'without_diamond_base',
        'without_diamond_mattress',
        'with_diamond_size',
        'with_diamond_design',
        'with_diamond_color',
        'with_diamond_fabric',
        'with_diamond_button_diamond',
        'with_diamond_storage',
        'with_diamond_base',
        'with_diamond_mattress',
        'ottoman_divan_size',

        'ottoman_divan_headboad',
        'ottoman_divan_color',
        'ottoman_divan_fabric',
        'ottoman_divan_mattress',
        'divan_size',
        'divan_headboard',
        'divan_color',
        'divan_fabric',
        'divan_storage',
        'divan_mattress',
        'monaco_divan_size',
        'monaco_divan_headboard',
        'monaco_divan_color',
        'monaco_divan_fabric',
        'monaco_divan_storage',
        'monaco_divan_mattress',
        'without_diamond_design',
        'Mattress',
        'Ottoman',
        'Bed',
        'Gaslift',
        'Headboard',
        'Design',
        'Without_diamond_button',
        'With_diamond_button',
        'Divan',
        'Ottoman_divan',
        'Divan_form',
        'Manaco_divan',
    ];


   



}

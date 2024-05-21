<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Order extends Model
{
    use HasFactory;

    /**
     * @var \Illuminate\Support\HigherOrderCollectionProxy|mixed
     */

    protected $table = 'product_order';
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'order_date',
        'status',
        'user_id',
        'customer_id',
        'payment_id',
        'shipping_id'
    ];

}

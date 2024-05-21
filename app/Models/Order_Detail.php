<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;

    /**
     * @var \Illuminate\Support\HigherOrderCollectionProxy|mixed
     */

    protected $table = 'order_detail';
    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'size',
        'price',
        'quantity'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping_Unit extends Model
{
    use HasFactory;
    protected $table = 'shipping_unit';
    protected $primaryKey = 'shipping_id';
    protected $fillable = [
        'shipping_unit_name'
    ];
}

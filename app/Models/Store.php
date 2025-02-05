<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'store';
    protected $primaryKey = 'store_id';
    protected $fillable = [
        'admin_id',
        'store_name',
        'address',
        'phone_number',
        'email'
    ];
}

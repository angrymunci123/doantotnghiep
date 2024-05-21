<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $table = 'warehouses';
    protected $primaryKey = 'warehouse_id';
    protected $fillable = [
        'import_date',
        'export_date',
        'product_source'
    ];
}

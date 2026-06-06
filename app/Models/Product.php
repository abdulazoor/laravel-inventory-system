<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'code',
        'price',
        'quantity',
        'low_stock_limit',
    ];
    public function isLowStock()
{
    return $this->quantity <= $this->low_stock_limit;
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsToMany(Customer::class, 'transactions', 'customers_id', 'products_id')->withPivot('created_at', 'id');
    }
}

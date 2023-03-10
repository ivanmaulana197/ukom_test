<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'transactions')->withPivot('created_at', 'id');
    }
}

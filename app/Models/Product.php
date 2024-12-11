<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'brand',
        'price',
        'description',
        'product_type_id',
    ];

    // Relasi ke model ProductType
    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
}

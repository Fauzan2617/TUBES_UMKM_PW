<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relasi ke model Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

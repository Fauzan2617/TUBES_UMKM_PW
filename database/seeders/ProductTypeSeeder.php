<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    public function run()
    {
        ProductType::create(['name' => 'Noodles']);
        ProductType::create(['name' => 'Drink']);
        ProductType::create(['name' => 'Snack']);
    }
}
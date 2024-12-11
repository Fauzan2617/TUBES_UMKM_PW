<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama produk
            $table->string('image')->nullable(); // URL atau path gambar
            $table->string('brand')->nullable(); // Brand produk
            $table->decimal('price', 10, 2); // Harga produk
            $table->text('description')->nullable(); // Deskripsi produk
            $table->foreignId('product_type_id')->constrained('product_types')->onDelete('cascade'); // Relasi ke jenis produk
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {


        Schema::dropIfExists('products');

        
    }
};

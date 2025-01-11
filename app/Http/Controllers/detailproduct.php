<?php


namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\crudproduk;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class detailproduct extends Controller
{
    public function index (){

        return view('detailproduct');
    }

    public function menampilkan($id)
    {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);
        $productTypes = ProductType::all(); // Jika kategori produk dibutuhkan

        // Kirim data produk ke halaman edit
        return view('detailproduct', compact('product', 'productTypes'));
    }
}

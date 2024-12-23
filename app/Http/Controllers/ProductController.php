<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\crudproduk;

class ProductController extends Controller
{
    public function create()
    {
        $productTypes = ProductType::all(); // Ambil data product_types
        return view('views_admin.crudproduk', compact('productTypes'));
    }

    // Simpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'brand' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'product_type_id' => 'required|exists:product_types,id',
        ]);

        // Upload gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img/products', 'public');
        }

        // Simpan data ke database
        Product::create([
            'name' => $request->name,
            'image' => $imagePath,
            'brand' => $request->brand,
            'price' => $request->price,
            'description' => $request->description,
            'product_type_id' => $request->product_type_id,
        ]);

        return redirect()->route('views_admin.produk')->with('success', 'Produk berhasil ditambahkan');
    }

    // Tampilkan data untuk admin
    public function index()
    {
        $products = Product::with('ProductType')->get();
        return view('views_admin.produk', compact('products'));
    }


    // Tampilkan data untuk user
    public function index_user()
    {
        $products = Product::with('ProductType')->get();
        return view('halamanproduct', compact('products'));
    }
}
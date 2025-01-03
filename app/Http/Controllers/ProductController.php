<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\crudproduk;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

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
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'brand' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'product_type_id' => 'required|exists:product_types,id',
        ]);

        // Upload gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Ambil nama asli file gambar
            $originalName = $request->file('image')->getClientOriginalName();
            // Buat nama unik dengan menambahkan timestamp
            $uniqueName = time() . '_' . $originalName;
            // Simpan gambar dengan nama unik di folder 'images/products'
            $imagePath = $request->file('image')->storeAs('images/products', $uniqueName, 'public');
        }

        // Simpan data ke database
        Product::create([
            'name' => $request->name,
            'image' => $imagePath, // Simpan path lengkap gambar
            'brand' => $request->brand,
            'price' => $request->price,
            'description' => $request->description,
            'product_type_id' => $request->product_type_id,
        ]);

        return redirect()->route('views_admin.produk')->with('success', 'Produk berhasil ditambahkan!');
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

    public function edit($id)
    {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);
        $productTypes = ProductType::all(); // Jika kategori produk dibutuhkan

        // Kirim data produk ke halaman edit
        return view('views_admin.editproduk', compact('product', 'productTypes'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input sesuai dengan struktur tabel products
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // Validasi file gambar
            'brand' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0', // Harga harus angka positif
            'description' => 'nullable|string',
            'product_type_id' => 'required|exists:product_types,id', // Pastikan ID kategori valid
        ]);

        // Cari produk berdasarkan ID
        $update_produk = Product::findOrFail($id);

        // Update data produk
        $update_produk->name = $validated['name'];
        $update_produk->brand = $validated['brand'];
        $update_produk->price = $validated['price'];
        $update_produk->description = $validated['description'];
        $update_produk->product_type_id = $validated['product_type_id'];

        // Jika ada file gambar yang di-upload
        if ($request->hasFile('image')) {
            // Ambil nama asli file gambar
            $originalName = $request->file('image')->getClientOriginalName();
            // Tambahkan timestamp pada nama file untuk membuatnya unik
            $uniqueName = time() . '_' . $originalName;

            // Simpan gambar dengan nama unik di folder 'images/products'
            $path = $request->file('image')->storeAs('images/products', $uniqueName, 'public');

            // Simpan path gambar ke dalam database
            $update_produk->image = 'images/products/' . $uniqueName;

            // Log path gambar yang disimpan untuk debugging
            Log::info('Path gambar disimpan: ' . $update_produk->image);
        }

        // Simpan perubahan produk ke database
        $update_produk->save();

        // Hapus cache jika ada
        Cache::flush();

        return redirect()->route('views_admin.produk', $id)->with('success', 'Produk berhasil diperbarui!');
    }


    // Menghapus post berdasarkan ID
    public function destroy($id)
    {
        $hapus_produk = Product::findOrFail($id);
        $hapus_produk->delete();

        return redirect()->route('views_admin.produk')->with('success', 'Produk berhasil dihapus');
    }
}

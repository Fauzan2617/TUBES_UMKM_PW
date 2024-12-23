<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Produk</title>
    <link rel="icon" href="{{ asset('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-indigo-50 min-h-screen overflow-x-hidden">
    {{-- HEADER --}}
    <x-produk-admin.navbar-admin></x-produk-admin.navbar-admin>
    {{-- END HEADER --}}

    {{-- FORM EDIT PRODUK --}}
    <div class="container mx-auto p-4">
        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-black mb-6">Edit Produk</h1>

        <!-- Form Update -->
        <!-- Form Update -->
        <form action="{{ route('produk.update', $product->id) }}" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 gap-6">
            @csrf
            @method('PUT') <!-- Method PUT untuk Update -->

            <!-- Nama Produk -->
            <div class="p-2">
                <input type="text" name="name" value="{{ $product->name }}"
                    class="block w-full rounded-md border-gray-300 shadow-sm p-2" required>
            </div>

            <!-- Kategori Produk -->
            <div class="p-2">
                <select name="product_type_id" class="block w-full rounded-md border-gray-300 shadow-sm p-2" required>
                    @foreach ($productTypes as $type)
                        <option value="{{ $type->id }}"
                            {{ $product->product_type_id == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Deskripsi Produk -->
            <div class="p-2">
                <textarea name="description" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm p-2">{{ $product->description }}</textarea>
            </div>

            <!-- Upload Gambar -->
            <div class="p-2">
                <input type="file" name="image" class="block w-full border-gray-300 rounded-md">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Current Image"
                        class="mt-2 w-32 h-32 object-cover">
                @endif
            </div>

            <!-- Harga -->
            <div class="p-2">
                <input type="number" name="price" value="{{ $product->price }}"
                    class="block w-full rounded-md border-gray-300 shadow-sm p-2" required>
            </div>

            <!-- Brand Produk -->
            <div class="p-2">
                <input type="text" name="brand" value="{{ $product->brand }}"
                    class="block w-full rounded-md border-gray-300 shadow-sm p-2">
            </div>

            <!-- Tombol Update -->
            <div class="p-2">
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-full">
                    Update Produk
                </button>
            </div>
        </form>

        <!-- Form Delete -->
        <form action="" method="POST" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-3 px-4 rounded-full">
                Delete Produk
            </button>
        </form>

    </div>
</body>

</html>

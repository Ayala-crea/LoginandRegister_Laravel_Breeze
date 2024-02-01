<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIAW AUGG STORE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400;0,700;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: visible;
            }
        }
    </style>
</head>

<body class="bg-white">

    <!--nav-->
    <nav class="navbar bg-white shadow-md p-4">
        <a href="#" class="navbar-logo font-bold text-lg">KANTIN<span class="text-teal-500"> KAMPOES.</span></a>

        <div class="navbar-nav">
            <a href="#" class="text-gray-600 hover:text-teal-500">Home</a>
            <a href="#contact" class="text-gray-600 hover:text-teal-500">Tentang</a>
            <a href="#" class="text-gray-600 hover:text-teal-500">Kontak</a>
            <a href="#" class="text-white bg-teal-500 rounded-md px-4 py-2 ml-2 hover:bg-teal-600">Daftar
                Sekarang</a>
            <a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                    class="badge bg-danger">{{ count((array) session('cart')) }}</span>
            </a>
        </div>
    </nav>

    <!-- Setelah Nav -->
    <br>
    <br>
    <br>
    <div class="container mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($DataProduk as $item)
                <!-- Item 1 -->
                <div class="bg-white p-4 rounded-md shadow-md">
                    <img src="{{ asset($item->image) }}" alt="Product 1"
                        class="w-full h-48 object-cover mb-4 rounded-md">
                    <h2 class="text-xl font-bold text-teal-500 mb-2">{{ $item->nama_produk }}</h2>
                    <p class="text-gray-600">{{ $item->deskripsi }}</p>
                    <span class="text-gray-700 font-semibold">Rp{{ $item->harga }}.000</span>
                    <button class="btn-holder">
                        <a href="{{ route('cart.produk', $item->id) }}"
                            class="btn btn-outline-danger inline-block px-4 py-2 border border-teal-500 text-teal-500 rounded hover:bg-teal-500 hover:text-white">
                            Add to Cart
                        </a>
                    </button>

                    {{-- </form> --}}
                </div>
            @endforeach
            <!-- ... Add more items as needed -->
        </div>
    </div>

    <script>
        feather.replace();
    </script>
    <script src="{{ asset('script.js') }}"></script>
</body>

</html>

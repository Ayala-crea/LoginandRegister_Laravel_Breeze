<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f6f6f6;
        }

        #summary {
            background-color: #f6f6f6;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: visible;
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl text-black">Shopping Cart</h1>
                    <h2 class="font-semibold text-2xl">3 Items</h2>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">
                        Product Details</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">
                        Quantity</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">
                        Price</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">
                        Total</h3>
                </div>
                @php $total = 0 @endphp
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                            <div class="flex w-2/5"> <!-- product -->
                                <div class="w-20">
                                    <img class="h-24" src="{{ asset($details['image']) }}" alt="">
                                </div>
                                <div class="flex flex-col justify-between ml-4 flex-grow">
                                    <span class="font-bold text-sm text-black">{{ $details['name'] }}</span>
                                    <div class="actions">
                                        <a class="btn btn-outline-danger btn-sm delete-product"><i
                                                class="fa fa-trash-o">Hapus</i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center w-1/5">
                                <p class="text-black">{{ $details['quantity'] }}</p>
                            </div>

                            <span class="text-center w-1/5 font-semibold text-sm text-black">
                                Rp{{ $details['price'] }}.000</span>
                            <span class="text-center w-1/5 font-semibold text-sm text-black">
                                Rp{{ $details['price'] }}.000</span>
                        </div>
                        @php $total += $details['price'] @endphp
                    @endforeach
                @endif

                <a href="#" class="flex font-semibold text-indigo-600 text-sm mt-10">
                    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                        <path
                            d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                    </svg>
                    Continue Shopping
                </a>
            </div>

            <div id="summary" class="w-1/4 px-8 py-10">
                <h1 class="font-semibold text-2xl border-b pb-8 text-black">Order Summary</h1>
                <div class="flex justify-between mt-10 mb-5">
                    <span class="font-semibold text-sm uppercase text-black">Items 3</span>
                    <span class="font-semibold text-sm text-black">Rp{{ $total }}.000</span>
                </div>

                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Total cost</span>
                        <span>Rp{{ $total }}.000</span>
                    </div>
                    <button
                        class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full"><a href="{{ route('checkout.minuman') }}">Checkout</a></button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(".delete-product").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to delete?")) {
                $.ajax({
                    url: '{{ route('delete.cart.product.minuman') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("div").attr("rowId")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
</body>

</html>

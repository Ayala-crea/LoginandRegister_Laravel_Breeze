<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400;0,700;1,500&display=swap" rel="stylesheet">
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
<body>

    
    <div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32">
        <a href="#" class="text-2xl font-bold text-gray-800">Kantin Kampoes.</a>
        <div class="mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base">
          <div class="relative">
            <ul class="relative flex w-full items-center justify-between space-x-2 sm:space-x-4">
              <li class="flex items-center space-x-3 text-left sm:space-x-4">
                <a class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700" href="#"
                  ><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    {{-- <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg --}}
                ></a>
              --}}
            </ul>
          </div>
        </div>
      </div>
      <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
        <div class="px-4 pt-8">
          <p class="text-xl font-medium">Orderan Anda</p>
          <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
            <div class="flex flex-col rounded-lg bg-white sm:flex-row">
              <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" />
              <div class="flex w-full flex-col px-4 py-4">
                <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
                <span class="float-right text-gray-400">42EU - 8.5US</span>
                <p class="text-lg font-bold">$138.99</p>
              </div>
            </div>
            <div class="flex flex-col rounded-lg bg-white sm:flex-row">
              <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" />
              <div class="flex w-full flex-col px-4 py-4">
                <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
                <span class="float-right text-gray-400">42EU - 8.5US</span>
                <p class="mt-auto text-lg font-bold">$238.99</p>
              </div>
            </div>
          </div>
      
          {{-- <p class="mt-8 text-lg font-medium">Shipping Methods</p> --}}
          <form class="mt-5 grid gap-6">
            <div class="relative">
              {{-- <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
              <span class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
              <label class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_1">
                <img class="w-14 object-contain" src="/images/naorrAeygcJzX0SyNI4Y0.png" alt="" />
                <div class="ml-5">
                  <span class="mt-2 font-semibold">Fedex Delivery</span>
                  <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_2" type="radio" name="radio" checked />
              <span class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
              <label class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_2">
                <img class="w-14 object-contain" src="/images/oG8xsl3xsOkwkMsrLGKM4.png" alt="" />
                <div class="ml-5">
                  <span class="mt-2 font-semibold">Fedex Delivery</span>
                  <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
                </div> --}}
              </label>
            </div>
          </form>
        </div>
        <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
          <p class="text-xl font-medium">Payment Details</p>
          <p class="text-gray-400">ISI DATA DIRI ANDA</p>
          <div class="">
            class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                {{-- <div class="px-4 sm:px-0">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                  <p class="mt-1 text-sm text-gray-600">
                    Use a permanent address where you can receive mail.
                  </p> --}}
                </div>
              </div>
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                          <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                          <input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                          <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>
          
                        <div class="col-span-6">
                          <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>
                          <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                          <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                          <input type="text" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                          <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                      </div>
                    </div>
                        <!-- Total -->
            <div class="mt-6 border-t border-b py-2">
                <div class="flex items-center justify-between">
                  <p class="text-sm font-medium text-gray-900">Subtotal</p>
                  <p class="font-semibold text-gray-900">$399.00</p>
                </div>
                <div class="flex items-center justify-between">
                  <p class="text-sm font-medium text-gray-900">Shipping</p>
                  <p class="font-semibold text-gray-900">$8.00</p>
                </div>
              </div>
              <div class="mt-6 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Total</p>
                <p class="text-2xl font-semibold text-gray-900">$408.00</p>
              </div>
            </div>
            <button class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Place Order</button>
          </div>
        </div>
                    {{-- <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                      </button>
                    </div> --}}
                  </div>
                </form>
              </div>
            </div>
          </div>
      
            <!-- Total -->
            {{-- <div class="mt-6 border-t border-b py-2">
              <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Subtotal</p>
                <p class="font-semibold text-gray-900">$399.00</p>
              </div>
              <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Shipping</p>
                <p class="font-semibold text-gray-900">$8.00</p>
              </div>
            </div>
            <div class="mt-6 flex items-center justify-between">
              <p class="text-sm font-medium text-gray-900">Total</p>
              <p class="text-2xl font-semibold text-gray-900">$408.00</p>
            </div>
          </div>
          <button class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Place Order</button>
        </div>
      </div> --}}
      

    
    

</body>
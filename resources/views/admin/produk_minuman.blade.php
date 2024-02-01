@include('Admin/layout/header')
<!-- END: Side Menu -->
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <button class="btn btn-primary shadow-md mr-2">Add New Product</button>
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Notification -->
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">IMAGES</th>
                                <th class="whitespace-nowrap">PRODUCT NAME</th>
                                <th class="text-center whitespace-nowrap">STOCK</th>
                                <th class="text-center whitespace-nowrap">HARGA</th>
                                <th class="text-center whitespace-nowrap">DESKRIPSI</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataProdukMinuman as $item)
                                <tr class="intro-x">

                                    <td class="w-40">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                                src="{{ asset($item->image) }}" title="Uploaded at 1 September 2022">
                                        </div>
                                    </td>
                                    <td>
                                        <a href=""
                                            class="font-medium whitespace-nowrap">{{ $item->nama_produk }}</a>
                                    </td>
                                    <td class="text-center">{{ $item->qty }}</td>
                                    <td class="text-center">Rp{{ $item->harga }}.000</td>
                                    <td class="text-center">{{ $item->deskripsi }}</td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;"> <i
                                                    data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                                Edit </a>
                                            <a class="flex items-center text-danger" href="javascript:;"
                                                data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i
                                                    data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>

    </div>
</div>
<!-- END: Content -->
@include('Admin/layout/footer')
e


{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

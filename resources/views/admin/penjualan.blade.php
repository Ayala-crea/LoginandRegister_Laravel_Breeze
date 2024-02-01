@include('Admin/layout/header')
<!-- END: Side Menu -->
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <button class="btn btn-primary shadow-md mr-2"><a href="{{ route('Add_data.Admin') }}">Add New Product</a>
            </button>
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Notification -->
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">PRODUCT NAME</th>
                                <th class="text-center whitespace-nowrap">STOCK</th>
                                <th class="text-center whitespace-nowrap">HARGA</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($DataPenjualan as $item)
                                <tr class="intro-x">

                                    <td>
                                        <a href=""
                                            class="font-medium whitespace-nowrap">{{ $item->nama_produk }}</a>
                                    </td>
                                    <td class="text-center">{{ $item->jumlah_terjual }}</td>
                                    <td class="text-center">Rp{{ $item->harga_jual }}0</td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3"
                                                href="{{ route('Admin.edit.data', $item->id) }}"> <i
                                                    data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                                Edit </a>
                                            <a class="flex items-center text-danger"
                                                href="{{ route('Admin.delete.data', $item->id) }}"
                                                data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
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

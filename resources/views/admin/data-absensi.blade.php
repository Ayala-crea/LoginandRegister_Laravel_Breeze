@include('Admin/layout/header')
<!-- END: Side Menu -->
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Notification -->
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">NAMA STAFF</th>
                                <th class="text-center whitespace-nowrap">SHIFT</th>
                                <th class="text-center whitespace-nowrap">TANGGAL MASUK</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataAbsen as $item)
                                <tr class="intro-x">

                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">{{ $item->nama_staff }}</a>
                                    </td>
                                    <td class="text-center">{{ $item->shift }}</td>
                                    <td class="text-center">{{ $item->tanggal_masuk }}</td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center text-danger" href="{{ route('Absensi.hapus', $item->id) }}"
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

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
                                <th class="whitespace-nowrap">NAMA</th>
                                <th class="text-center whitespace-nowrap">EMAIL</th>
                                <th class="text-center whitespace-nowrap">USERNAME</th>
                                <th class="text-center whitespace-nowrap">NO TELP</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($CustomerData as $item)
                                <tr class="intro-x">

                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">{{ $item->nama }}</a>
                                    </td>
                                    <td class="text-center">{{ $item->email }}</td>
                                    <td class="text-center">{{ $item->username }}</td>
                                    <td class="text-center">{{ $item->no_telp }}</td>
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

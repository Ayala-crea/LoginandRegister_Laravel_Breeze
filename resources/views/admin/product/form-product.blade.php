@include('admin/layout/header')
<!-- END: Side Menu -->
<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Form Layout
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form
                action="{{ isset($DataPenjualan) ? route('Admin.simpan.edit', $DataPenjualan->id) : route('InputData.Admin') }}"
                method="post">
                @csrf
                <div class="intro-y box p-5">
                    <div class="mt-3">
                        <label for="produk_barang" class="form-label">nama menu makanan</label>
                        <select name="produk_barang" data-placeholder="Select your favorite actors"
                            class="tom-select w-full" id="produk_barang" multiple>
                            <option value="1"
                                {{ isset($DataPenjualan) && $DataPenjualan->produk_barang == 1 ? 'selected' : '' }}>
                                ayam bakar madu</option>
                            <option value="2"
                                {{ isset($DataPenjualan) && $DataPenjualan->produk_barang == 2 ? 'selected' : '' }}>
                                coto makassar</option>
                            <option value="3"
                                {{ isset($DataPenjualan) && $DataPenjualan->produk_barang == 3 ? 'selected' : '' }}>
                                Smartphone & Tablet</option>
                            <option value="4"
                                {{ isset($DataPenjualan) && $DataPenjualan->produk_barang == 4 ? 'selected' : '' }}>
                                Photography</option>
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="produk_minuman" class="form-label">nama menu minuman</label>
                        <select name="produk_minuman" data-placeholder="Select your favorite actors"
                            class="tom-select w-full" id="produk_minuman" multiple>
                            <option value="1"
                                {{ isset($DataPenjualan) && $DataPenjualan->produk_minuman == 1 ? 'selected' : '' }}>
                                thai tea</option>
                            <option value="2"
                                {{ isset($DataPenjualan) && $DataPenjualan->produk_minuman == 2 ? 'selected' : '' }}>
                                lemon tea</option>
                            <option value="3"
                                {{ isset($DataPenjualan) && $DataPenjualan->produk_minuman == 3 ? 'selected' : '' }}>
                                Smartphone & Tablet</option>
                            <option value="4"
                                {{ isset($DataPenjualan) && $DataPenjualan->produk_minuman == 4 ? 'selected' : '' }}>
                                Photography</option>
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="jumlah_terjual" class="form-label">Quantity</label>
                        <div class="input-group">
                            <input name="jumlah_terjual" id="jumlah_terjual" type="text" class="form-control"
                                placeholder="Quantity" aria-describedby="input-group-1"
                                value="{{ isset($DataPenjualan) ? $DataPenjualan->jumlah_terjual : '' }}">
                            <div id="input-group-1" class="input-group-text">pcs</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="harga_jual" class="form-label">Harga</label>
                        <div class="input-group">
                            <input name="harga_jual" id="harga_jual" type="text" class="form-control"
                                placeholder="Harga" aria-describedby="input-group-2"
                                value="{{ isset($DataPenjualan) ? $DataPenjualan->harga_jual : '' }}">
                            <div id="input-group-2" class="input-group-text">Rp</div>
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
            </form>

            <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@include('Admin/layout/footer')

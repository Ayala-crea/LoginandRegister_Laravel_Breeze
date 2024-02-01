<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_penjualan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_barang');
            $table->bigInteger('jumlah_terjual');
            $table->decimal('harga_jual', 8, 2);
            $table->unsignedBigInteger('produk_minuman');

            $table->foreign('produk_barang')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('produk_minuman')->references('id')->on('minuman_produk')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_penjualan');
    }
};

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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('no_order');
            $table->foreignId('produk_id')->constrained('produks')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->integer('jumlah');
            $table->float('ongkir');
            $table->string('keterangan');
            $table->string('jasa_kurir');
            $table->float('total_harga');
            $table->string('pengirim');
            $table->string('telp_pengirim');
            $table->string('penerima');
            $table->string('telp_penerima');
            $table->string('kota_tujan');
            $table->string('alamat_tujuan');
            $table->string('label_pengiriman');
            $table->string('bukti_pembayaran');
            $table->string('status_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};

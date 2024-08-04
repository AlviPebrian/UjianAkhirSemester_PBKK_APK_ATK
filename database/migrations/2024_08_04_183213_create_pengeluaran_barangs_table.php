<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranBarangsTable extends Migration
{
    public function up()
    {
        Schema::create('pengeluaran_barangs', function (Blueprint $table) {
            $table->id('id_pengeluaran');
            $table->date('tgl_keluar');
            $table->string('tujuan', 150);
            $table->integer('kode_barang');
            $table->integer('kuantity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengeluaran_barangs');
    }
}

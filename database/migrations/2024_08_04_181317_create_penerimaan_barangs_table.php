<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaanBarangsTable extends Migration
{
    public function up()
    {
        Schema::create('penerimaan_barangs', function (Blueprint $table) {
            $table->id('id_penerimaan');
            $table->date('tgl_penyimpanan');
            $table->text('alamat');
            $table->integer('kode_barang');
            $table->integer('kuantity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerimaan_barangs');
    }
}

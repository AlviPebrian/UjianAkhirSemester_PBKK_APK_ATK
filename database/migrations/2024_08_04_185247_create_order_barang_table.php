<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('order_barang', function (Blueprint $table) {
        $table->increments('no_po'); // PK
        $table->date('tanggal')->nullable(false);
        $table->integer('kode_supplier')->nullable(false); // FK
        $table->integer('PPN')->nullable(false);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_barang');
    }
};

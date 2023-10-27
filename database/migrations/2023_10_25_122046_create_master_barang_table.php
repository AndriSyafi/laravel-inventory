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
        Schema::create('master_barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 7);
            $table->string('nama', 25);
            $table->string('deskripsi');
            $table->integer('id_kategori');
            $table->integer('id_gudang');
            $table->dateTime('dibuat_kapan');
            $table->integer('dibuat_oleh');
            $table->dateTime('diperbarui_kapan');
            $table->integer('diperbarui_oleh');
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_barang');
    }
};

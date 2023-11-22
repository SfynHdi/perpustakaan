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
        Schema::create('detail_buku', function (Blueprint $table) {
            $table->id();
            $table->string('sinopsis');
            $table->string('penerbit');
            $table->string('image');
            $table->string('jumlah_halaman');
            $table->string('tahggal_terbit');
            $table->string('isbn');
            $table->string('bahasa');
            $table->foreignId('id_buku')->notNull()->references('id')->on('buku')->onUpdate('cascade')->onDelete('cascade');
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('detail_buku');
    }
};

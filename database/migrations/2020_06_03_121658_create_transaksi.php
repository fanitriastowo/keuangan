<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_id')->unsigned()->nullable();
            $table->foreign('kategori_id')
                  ->references('id')->on('kategori')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
            $table->string('nama');
            $table->text('deskripsi');
            $table->bigInteger('nominal')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}

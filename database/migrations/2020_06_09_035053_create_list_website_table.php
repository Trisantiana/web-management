<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_website', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id')->on('users');
            $table->string('nama_website');
            $table->string('url_website');
            $table->string('merk');
            $table->string('wilayah');
            $table->date('tgl_aktif');
            $table->date('tgl_selesai');
            $table->string('periode');
            $table->string('status');
            $table->unsignedBigInteger('id_jenis_website');
            $table->foreign('id_jenis_website')->references('id')->on('jns_website');
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
        Schema::dropIfExists('list_website');
    }
}

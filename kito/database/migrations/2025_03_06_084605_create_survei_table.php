<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveiTable extends Migration
{
    public function up()
    {
        Schema::create('survei', function (Blueprint $table) {
            $table->id('id_survei');
            $table->unsignedBigInteger('id_provinsi');
            $table->unsignedBigInteger('id_kabupaten');
            $table->string('nama_survei', 1024);
            $table->string('kro', 1024)->nullable();
            $table->date('jadwal_kegiatan');
            $table->date('jadwal_berakhir_kegiatan');
            $table->date('bulan_dominan');
            $table->integer('status_survei');
            $table->string('tim', 1024);

            $table->foreign('id_provinsi')->references('id_provinsi')->on('provinsi')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('id_kabupaten')->references('id_kabupaten')->on('kabupaten')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('survei');
    }
}

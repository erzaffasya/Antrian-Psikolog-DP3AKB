<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntriansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->string('nomor')->nullable();
            $table->integer('urut')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('jenis_layanan')->nullable();
            $table->foreignId("spesialis")->constrained("spesialis");
            $table->string('status')->nullable();
            $table->text('keterangan')->nullable();
            $table->boolean('isOnline')->nullable();
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
        Schema::dropIfExists('antrian');
    }
}

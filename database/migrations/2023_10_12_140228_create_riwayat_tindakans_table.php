<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatTindakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_tindakan', function (Blueprint $table) {
            $table->id();
            $table->foreignId("users_id")->constrained("users");
            $table->foreignId("dokter_id")->constrained("dokter");
            $table->text('keterangan')->nullable();
            $table->text('tindakan')->nullable();
            $table->text('keluhan')->nullable();
            $table->date('tanggal')->nullable();
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
        Schema::dropIfExists('riwayat_tindakan');
    }
}

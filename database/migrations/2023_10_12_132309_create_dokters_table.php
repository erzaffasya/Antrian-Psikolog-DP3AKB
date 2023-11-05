<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->nullable();
            $table->string('batas_maksimal')->nullable();
            $table->string('jam_mulai')->nullable();
            $table->string('jam_selesai')->nullable();
            $table->boolean('isLibur')->nullable();
            $table->foreignId("spesialis_id")->constrained("spesialis");
            $table->foreignId("users_id")->constrained("users");
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
        Schema::dropIfExists('dokter');
    }
}

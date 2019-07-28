<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrganisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ukm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nama_ukm");
            $table->string("kegiatan_ukm");
            $table->string("jadwal_ukm");
            $table->string("kontak_ukm");
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
        Schema::dropIfExists('tb_ukm');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Artikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('artikels', function (Blueprint $table) {

          $table->bigIncrements('id');
          $table->string('nama_artikel');
          $table->string('jenis_artikel');
          $table->text('isi_artikel');
          $table->string('gambar_artikel');
          
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
        //
    }
}

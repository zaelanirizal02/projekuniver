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
<<<<<<< HEAD:database/migrations/2020_05_09_074421_artikel.php
        $table->bigIncrements('id');
        $table->string('nama_artikel');
        $table->string('jenis_artikel');
        $table->string('gambar_artikel');
        $table->text('isi_artikel');
        $table->timestamps();
=======
          $table->bigIncrements('id');
          $table->string('nama_artikel');
          $table->string('jenis_artikel');
          $table->text('isi_artikel');
          $table->string('gambar_artikel');
          
          $table->timestamps();
>>>>>>> 9736095703d8565a862d6b7c61040f04aabd20bf:database/migrations/2019_09_21_122418_artikels.php
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

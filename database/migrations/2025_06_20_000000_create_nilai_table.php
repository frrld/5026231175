<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('nilai', function (Blueprint $table) {
        $table->increments('id');
        $table->char('normorinduksiswa', 5);
        $table->integer('nilaiangka')->check('nilaiangka BETWEEN 0 AND 100');
        $table->integer('sks')->unsigned();
        // tanpa timestamps, sesuai spesifikasi
    });
    }

    public function down()
    {
        Schema::dropIfExists('nilai');
    }
};

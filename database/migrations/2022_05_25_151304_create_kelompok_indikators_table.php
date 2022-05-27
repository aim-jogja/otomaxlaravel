<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompokIndikatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok_indikators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_indikator");
            $table->string("pertanyaan");
            $table->timestamps();

            $table->foreign("id_indikator")->references("id")->on("indikators")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok_indikators');
    }
}

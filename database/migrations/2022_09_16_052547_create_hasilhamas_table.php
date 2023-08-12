<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilhamas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('id_hama');
            $table->text('hasil_diagnosa');
            $table->text('cf_max');
            $table->text('gejala_terpilih');
            $table->string('file_pdf')->nullable();
            $table->timestamps();
            $table->foreign('id_hama')->references('id')->on('hamas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasilhamas');
    }
};

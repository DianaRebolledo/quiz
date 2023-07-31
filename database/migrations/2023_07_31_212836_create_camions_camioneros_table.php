<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionCamioneroTable extends Migration
{
    public function up()
    {
        Schema::create('camion_camionero', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camion_id');
            $table->unsignedBigInteger('camionero_id');
            $table->timestamps();

            $table->foreign('camion_id')->references('id')->on('camiones');
            $table->foreign('camionero_id')->references('id')->on('camioneros');
        });
    }

    public function down()
    {
        Schema::dropIfExists('camion_camioneros');
    }
}
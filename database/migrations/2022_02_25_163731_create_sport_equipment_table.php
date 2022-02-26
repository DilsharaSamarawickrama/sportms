<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sport_equipment', function (Blueprint $table) {
            $table->id();
            $table->string('sport', 30);
            $table->foreign('sport')->references('sport')->on('sports')->onDelete('cascade')->onUpdate('cascade');
            $table->string('equipment', 200);
            $table->integer('normal_quantity');
            $table->integer('normal_available_quantity');
            $table->integer('pool_quantity');
            $table->integer('pool_available_quantity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sport_equipment');
    }
};

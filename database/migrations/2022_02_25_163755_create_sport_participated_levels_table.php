<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sport_participated_levels', function (Blueprint $table) {
            $table->id();
            $table->string('level', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sport_participated_levels');
    }
};

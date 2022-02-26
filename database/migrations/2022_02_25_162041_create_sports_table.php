<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('sport', 30)->unique();
            $table->integer('men');
            $table->integer('women');
            $table->string('image', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sports');
    }
};

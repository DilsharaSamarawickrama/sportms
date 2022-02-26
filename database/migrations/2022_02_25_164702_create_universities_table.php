<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('university', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('universities');
    }
};

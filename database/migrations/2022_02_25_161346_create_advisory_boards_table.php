<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('advisory_boards', function (Blueprint $table) {
            $table->id();
            $table->string('nic', 20);
            $table->string('title', 10);
            $table->string('name', 200);
            $table->string('gender', 6);
            $table->string('role', 30);
            $table->string('faculty', 50);
            $table->string('current_status', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('advisory_boards');
    }
};

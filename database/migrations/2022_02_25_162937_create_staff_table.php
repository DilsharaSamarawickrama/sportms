<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('nic', 20)->unique();
            $table->string('name', 200);
            $table->string('gender', 6);
            $table->string('position', 30);
            $table->string('email', 200);
            $table->string('contact', 10);
            $table->string('image', 200);
            $table->dateTime('started_work');
            $table->dateTime('left_work')->nullable();
            $table->string('current_status', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
};

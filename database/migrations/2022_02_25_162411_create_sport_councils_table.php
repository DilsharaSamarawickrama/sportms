<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sport_councils', function (Blueprint $table) {
            $table->id();
            $table->string('studentId', 30);
            $table->foreign('studentId')->references('studentId')->on('student_personal_details')->onDelete('cascade')->onUpdate('cascade');
            $table->string('position', 50);
            $table->string('current_status', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sport_councils');
    }
};

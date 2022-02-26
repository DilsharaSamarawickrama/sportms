<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('student_participated_sports', function (Blueprint $table) {
            $table->id();
            $table->string('studentId', 30);
            $table->foreign('studentId')->references('studentId')->on('student_personal_details')->onDelete('cascade')->onUpdate('cascade');
            $table->string('academy', 500);
            $table->string('sport', 30);
            $table->foreign('sport')->references('sport')->on('sports')->onDelete('cascade')->onUpdate('cascade');
            $table->string('level', 100);
            $table->foreign('level')->references('level')->on('levels')->onDelete('cascade')->onUpdate('cascade');
            $table->string('achievement', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_participated_sports');
    }
};

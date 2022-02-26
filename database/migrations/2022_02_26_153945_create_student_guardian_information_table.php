<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('student_guardian_information', function (Blueprint $table) {
            $table->string('studentId', 30)->unique();
            $table->foreign('studentId')->references('studentId')->on('student_personal_details')->onDelete('cascade')->onUpdate('cascade');
            $table->string('designation', 5);
            $table->string('name', 200);
            $table->string('contact', 10);
            $table->string('email', 200);
            $table->string('address', 500);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_guardian_information');
    }
};
